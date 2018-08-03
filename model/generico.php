<?php  
    class Conexion{
        public function getConexion(){
            $user = "";
            $pass = "";
            $host = "";
            $db = "";
            $conexion = new PDO("mysql:host=$host;dbname=$db;", $user, $pass);
            return $conexion;
        }  
    }

    class Insert{
        public function insertar($params){
            $con = new Conexion();
            $conexion = $con->getConexion();
            $sql = "INSERT INTO `tabla` (params) VALUES (:params)";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':params', $params);
            if (!$statement){
                return "Error al insertar";
            }else{
                $statement->execute();
            }
        }
    }

    class Update{
        public function actualizar ($params){
            $con = new Conexion();
            $conexion = $con->getConexion();
            $sql = "UPDATE `tabla` SET params = :params WHERE condicion";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':params', $params);
            if (!$statement){
                return "Error al actualizar";
            }else{
                $statement->execute();
            }
        }
    }

    class Delete{
        public function borrar ($params){
            $con = new Conexion();
            $conexion = $con->getConexion();
            $sql = "DELETE FROM `tabla` WHERE params = :params";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':params', $params);
            if (!$statement){
                return "Error al borrar";
            }else{
                $statement->execute();
            }
        }
    }

    class Select{
        public function seleccionar($params){
            $con = new Conexion();
            $conexion = $con->getConexion();
            $sql = "SELECT * FROM `tabla` WHERE params = :params";
            $statement = $conexion->prepare($sql);
            $statement->bindParam(':params', $params);
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