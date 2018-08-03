<?php
require_once('../model/model.php');

$id = $_GET["id_casa"];
$descripcion = $_POST["descripcion"];


$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["upload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file)) {
        $upload = new InsertImagen();
		$rta = $upload-> insertarImagen($target_file, $descripcion, $id);
		header("Location: ../view/altaImagen.php?id_casa=" . $id);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>