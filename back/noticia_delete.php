<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $servidor = "localhost";
    $baseDados = "ementas";
    $userBaseDados = "root";
    $passwordBasedados = "";
    $ligacaoBD =
        mysqli_connect($servidor, $userBaseDados, $passwordBasedados, $baseDados)
        or die("ERRO no acesso à DB");

    $sql = "DELETE FROM noticia WHERE id_noticia = $id";
    $ligacaoBD->query($sql);
}

header("location: ./gerir_noticias.php");
exit;
