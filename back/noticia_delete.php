
<?php
    session_start(); // Starting the session
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
    ?>



<?php

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    include "db_conn.php";


    $sql = "DELETE FROM noticia WHERE id_noticia = $id";
    $ligacaoBD->query($sql);
}

header("location: ./gerir_noticias.php");
exit;
