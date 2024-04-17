
<?php
    session_start(); // Starting the session
    
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }
    ?>





<?php

if ( isset($_GET["id"])) {
    $id = $_GET ["id"];

    include "db_conn.php";


$sql = "DELETE FROM refeicao WHERE id_refeicao = $id";
$ligacaoBD->query($sql);

}

header("location: ./gerir_ementas.php");
exit;
