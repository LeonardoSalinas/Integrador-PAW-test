<?php  
require_once('generico.php');

//CONEXION!!!

	class ConexionInmobiliaria extends Conexion{
        public function getConexion(){
        	$user = "root";
        	$pass = "";
        	$host = "localhost";
        	$db = "inmobiliaria";
            $conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
            return $conexion;
        }  
	}

//CASA!!!

	class InsertCasa extends Insert{
		public function insertarCasa($direccion, $ciudad, $transaccion, $tipo, $metros2, $ambientes, $dormitorios, $patio, $garage, $coordenadas, $precio, $estado, $ubicacion, $id_usuario){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "INSERT INTO `casa` (direccion, ciudad, transaccion, tipo, metros2, ambientes, dormitorios, patio, garage, coordenadas, precio, estado, ubicacion, id_usuario) VALUES (:direccion, :ciudad, :transaccion, :tipo, :metros2, :ambientes, :dormitorios, :patio, :garage, :coordenadas, :precio, :estado, :ubicacion, :id_usuario)";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':direccion', $direccion);
			$statement->bindParam(':ciudad', $ciudad);
			$statement->bindParam(':transaccion', $transaccion);
			$statement->bindParam(':tipo', $tipo);
			$statement->bindParam(':metros2', $metros2);
			$statement->bindParam(':ambientes', $ambientes);
			$statement->bindParam(':dormitorios', $dormitorios);
			$statement->bindParam(':patio', $patio);
			$statement->bindParam(':garage', $garage);
			$statement->bindParam(':coordenadas', $coordenadas);
            $statement->bindParam(':precio', $precio);
            $statement->bindParam(':estado', $estado);
            $statement->bindParam(':ubicacion', $ubicacion);
            $statement->bindParam(':id_usuario', $id_usuario);
            if (!$statement){
                return "Error al insertar";
            }else{
                $statement->execute();
                $last_id = $conexion->lastInsertId();
                return $last_id;
            }
        }
	}

	class UpdateCasa extends Update{
        public function actualizarCasa($id_casa, $direccion, $ciudad, $transaccion, $tipo, $metros2, $ambientes, $dormitorios, $patio, $garage, $coordenadas, $precio, $estado, $ubicacion, $id_usuario){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "UPDATE `casa` SET direccion = :direccion, ciudad = :ciudad, transaccion = :transaccion, tipo = :tipo, metros2 = :metros2, ambientes = :ambients, dormitorios = :dormitorios, patio = :patio, garage = :garage, coordenadas = :coordenadas, precio = :precio, estado = :estado, ubicacion = :ubicacion, id_usuario = :id_usuario WHERE id_casa = :id_casa";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id_casa', $id_casa);
            $statement->bindParam(':direccion', $direccion);
			$statement->bindParam(':ciudad', $ciudad);
			$statement->bindParam(':transaccion', $transaccion);
			$statement->bindParam(':tipo', $tipo);
			$statement->bindParam(':metros2', $metros2);
			$statement->bindParam(':ambientes', $ambientes);
			$statement->bindParam(':dormitorios', $dormitorios);
			$statement->bindParam(':patio', $patio);
			$statement->bindParam(':garage', $garage);
			$statement->bindParam(':coordenadas', $coordenadas);
            $statement->bindParam(':precio', $precio);
            $statement->bindParam(':estado', $estado);
            $statement->bindParam(':ubicacion', $ubicacion);
            $statement->bindParam(':id_usuario', $id_usuario);
            if (!$statement){
                return "Error al actualizar";
            }else{
                $statement->execute();
            }
        }
    }

    class DeleteCasa extends Delete{
        public function borrarCasa($id){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "UPDATE `casa` SET actividad = `0` WHERE id_casa = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            if (!$statement){
                return "Error al borrar";
            }else{
                $statement->execute();
            }
        }
    }

    class SelectCasa extends Select{
        public function seleccionarCasa($id){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "SELECT * FROM `casa` WHERE id_casa = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            if (!$statement){
                return "Error al seleccionar";
            }else{
                $statement->execute();
                $rta = $statement->fetchAll();
                return $rta;
            }
        }

        public function seleccionarCasas(){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $act = 1;
            $sql = "SELECT * FROM `casa` where actividad = :act";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':act', $act);
            if (!$statement){
                return "Error al seleccionar";
            }else{
                $statement->execute();
                $rta = $statement->fetchAll();
                return $rta;
            }
        }

        public function seleccionarCasasAlquiler(){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $act = 1;
            $transaccion = "Alquiler";
            $sql = "SELECT * FROM `casa` where transaccion = :transaccion and actividad = :act";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':act', $act);
            $statement ->bindParam('transaccion', $transaccion);
            if (!$statement){
                return "Error al seleccionar";
            }else{
                $statement->execute();
                $rta = $statement->fetchAll();
                return $rta;
            }
        }

        public function seleccionarCasasVenta(){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $act = 1;
            $transaccion = "Venta";
            $sql = "SELECT * FROM `casa` where transaccion = :transaccion and actividad = :act";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':act', $act);
            $statement ->bindParam('transaccion', $transaccion);
            if (!$statement){
                return "Error al seleccionar";
            }else{
                $statement->execute();
                $rta = $statement->fetchAll();
                return $rta;
            }
        }

        public function advancedSelectCasa($ciudad, $transaccion, $tipo, $ambientes, $dormitorios, $patio, $garage, $ubicacion){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "SELECT * FROM `casa` WHERE actividad = `1`";
            if (!empty($ciudad)){
                $sql .= " AND ciudad = :ciudad";
            }
            if (!empty($transaccion)){
                $sql .= " AND transaccion = :transaccion";
            }
            if (!empty($tipo)){
                $sql .= " AND tipo = :tipo";
            }
            if (!empty($ambientes)){
                $sql .= " AND ambientes = :ambientes";
            }
            if (!empty($dormitorios)){
                $sql .= " AND dormitorios = :dormitorios";
            }
            if (!empty($patio)){
                $sql .= " AND patio = :patio";
            }
            if (!empty($garage)){
                $sql .= " AND garage = :garage";
            }
            if (!empty($ubicacion)){
                $sql .= " AND ubicacion = :ubicacion";
            }
            $statement = $conexion->prepare($sql);
            if (!empty($ciudad)){
                $statement->bindParam(':ciudad', $ciudad);
            }
            if (!empty($transaccion)){
                $statement->bindParam(':transaccion', $transaccion);
            }
            if (!empty($tipo)){
                $statement->bindParam(':tipo', $tipo);
            }
            if (!empty($ambientes)){
                $statement->bindParam(':ambientes', $ambiantes);
            }
            if (!empty($dormitorios)){
                $statement->bindParam(':dormitorios', $dormitorios);
            }
            if (!empty($patio)){
                $statement->bindParam(':patio', $patio);
            }
            if (!empty($garage)){
                $statement->bindParam(':garage', $garage);
            }
            if (!empty($ubicacion)){
                $statement->bindParam(':ubicacion', $ubicacion);
            }
            if (!$statement){
                return "Error al seleccionar";
            }else{
                $statement->execute();
                $rta = $statement->fetchAll();
                return $rta;
            }
        }
    }

//IMAGENES!!!

    class InsertImagen extends Insert{
		public function insertarImagen($nombre, $descripcion, $id){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "INSERT INTO `imagenes` (nombre, descripcion, id_casa) VALUES (:nombre, :descripcion, :id_casa)";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':nombre', $nombre);
			$statement->bindParam(':descripcion', $descripcion);
            $statement->bindParam(':id_casa', $id);
            if (!$statement){
                return "Error al insertar";
            }else{
                $statement->execute();
            }
        }
	}

	class UpdateImagen extends Update{
        public function actualizarImagen($id, $nombre, $descripcion){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "UPDATE `imagenes` SET nombre = :nombre, descripcion = :descripcion WHERE id_imagen = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            $statement->bindParam(':nombre', $nombre);
			$statement->bindParam(':descripcion', $descripcion);
            if (!$statement){
                return "Error al actualizar";
            }else{
                $statement->execute();
            }
        }
    }

    class DeleteImagen extends Delete{
        public function borrarImagen($id){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "UPDATE `imagenes` SET actividad = `0` WHERE id_imagen = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            if (!$statement){
                return "Error al borrar";
            }else{
                $statement->execute();
            }
        }
    }

    class SelectImagen extends Select{
        public function seleccionarImagen($id){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "SELECT * FROM `imagenes` WHERE id_imagen = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            if (!$statement){
                return "Error al seleccionar";
            }else{
                $statement->execute();
                $rta = $statement->fetchAll();
                return $rta;
            }
        }

        public function seleccionarImagenes($id){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "SELECT * FROM `imagenes` WHERE id_casa = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            if (!$statement){
                return "Error al seleccionar";
            }else{
                $statement->execute();
                $rta = $statement->fetch();
                return $rta;
            }
        }
    }

//USUARIOS!!!

    class InsertUsuario extends Insert{
        public function insertarUsuario($nombre, $apellido, $dni, $telefono, $email){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "INSERT INTO `usuario` (nombre, apellido, dni, telefono, email) VALUES (:nombre, :apellido, :dni, :telefono, :email)";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':nombre', $nombre);
            $statement->bindParam(':apellido', $apellido);
            $statement->bindParam(':dni', $dni);
            $statement->bindParam(':telefono', $telefono);
            $statement->bindParam(':email', $email);
            if (!$statement){
                return "Error al insertar";
            }else{
                $statement->execute();
            }
        }
    }

    class UpdateUsuario extends Update{
        public function actualizarUsuario($id, $nombre, $apellido, $dni, $telefono, $email){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "UPDATE `usuario` SET nombre = :nombre, apellido = :apellido, dni = :dni telefono = :telefono, email = :email WHERE id_usuario = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            $statement->bindParam(':nombre', $nombre);
            $statement->bindParam(':apellido', $apellido);
            $statement->bindParam(':dni', $dni);
            $statement->bindParam(':telefono', $telefono);
            $statement->bindParam(':email', $email);
            if (!$statement){
                return "Error al actualizar";
            }else{
                $statement->execute();
            }
        }
    }

    class DeleteUsuario extends Delete{
        public function borrarUsuario($id){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "UPDATE `usuario` SET actividad = `0` WHERE id_usuario = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            if (!$statement){
                return "Error al borrar";
            }else{
                $statement->execute();
            }
        }
    }

    class SelectUsuario extends Select{
        public function seleccionarUsuario($id){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "SELECT * FROM `usuario` WHERE id_usuario = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            if (!$statement){
                return "Error al seleccionar";
            }else{
                $statement->execute();
                $rta = $statement->fetch();
                return $rta;
            }
        }

         public function seleccionarUsuarios(){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $act = 1;
            $sql = "SELECT * FROM `usuario` where actividad = :act";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':act', $act);
            if (!$statement){
                return "Error al seleccionar";
            }else{
                $statement->execute();
                $rta = $statement->fetchAll();
                return $rta;
            }
        }
    }




//TAGS!!!

    class InsertTag extends Insert{
        public function insertarTag($descripcion){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "INSERT INTO `tags` (descripcion) VALUES (:descripcion)";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':descripcion', $descripcion);
            if (!$statement){
                return "Error al insertar";
            }else{
                $statement->execute();
            }
        }
    }

    class UpdateTag extends Update{
        public function actualizarTag($id, $descripcion){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "UPDATE `tags` SET descripcion = :descripcion WHERE id_tag = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            $statement->bindParam(':descripcion', $descripcion);
            if (!$statement){
                return "Error al actualizar";
            }else{
                $statement->execute();
            }
        }
    }

    class DeleteTag extends Delete{
        public function borrarUsuario($id){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "UPDATE `tags` SET actividad = `0` WHERE id_tag = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            if (!$statement){
                return "Error al borrar";
            }else{
                $statement->execute();
            }
        }
    }

    class SelectTag extends Select{
        public function seleccionarTag($id){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "SELECT * FROM `tags` WHERE id_tag = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            if (!$statement){
                return "Error al seleccionar";
            }else{
                $statement->execute();
                $rta = $statement->fetchAll();
                return $rta;
            }
        }
    }

//CASA X TAG   

    class InsertCasaXTag extends Insert{
        public function insertarCasaXTag($id_casa, $id_tag){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "INSERT INTO `casaxtag` (id_casa, id_tag) VALUES (:id_casa, :id_tag)";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id_casa', $id_casa);
            $statement->bindParam(':id_tag', $id_tag);
            if (!$statement){
                return "Error al insertar";
            }else{
                $statement->execute();
            }
        }
    }


    class DeleteCasaXTag extends Delete{
        public function borrarCasaXTag($id_casa, $id_tag){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "DELETE FROM `casaxtag` WHERE id_casa = :id_casa AND id_tag = :id_tag";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id_casa', $id_casa);
            $statement->bindParam(':id_tag', $id_tag);
            if (!$statement){
                return "Error al borrar";
            }else{
                $statement->execute();
            }
        }
    }

    class SelectCasaXTag extends Select{
        public function seleccionarCasaXTag($id){
            $con = new ConexionInmobiliaria();
            $conexion = $con->getConexion();
            $sql = "SELECT t.descripcion FROM `tags` t INNER JOIN `casaxtag` ct ON t.id_tag = ct.id_tag WHERE id_casa = :id";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':id', $id);
            if (!$statement){
                return "Error al seleccionar";
            }else{
                $statement->execute();
                $rta = $statement->fetchAll();
                return $rta;
            }
        }
    }

?>