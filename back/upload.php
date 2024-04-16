<?php
session_start();

$target_dir = "../img_noticia/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    // Check if file is empty
    if ($_FILES["fileToUpload"]["size"] == 0) {
        $_SESSION['error'] = "Ficheiro vazio.";
        $uploadOk = 0;
    } else {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $_SESSION['error'] = "Ficheiro não é uma imagem.";
            $uploadOk = 0;
        }
    }
}

// Check if file already exists
if (file_exists($target_file)) {
    $_SESSION['error'] = "Ficheiro já existe.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $_SESSION['error'] = "Ficheiro demasiado grande..";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $_SESSION['error'] = "Apenas JPG, JPEG, PNG & GIF permitidos.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $_SESSION['error'] = "Erro. Ficheiro não adicionado.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $_SESSION['success'] = "O ficheiro ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " foi adicionado.";
    } else {
        $_SESSION['error'] = "Ocorreu um erro a adicionar o ficheiro.";
    }
}

header("location: ./gerir_noticias.php");
exit;
