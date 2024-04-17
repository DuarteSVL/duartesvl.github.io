
<?php


// $servidor = "localhost";
// $baseDados = "ementas";
// $userBaseDados = "root";
// $passwordBasedados = "";
// $ligacaoBD =
//     mysqli_connect($servidor, $userBaseDados, $passwordBasedados, $baseDados)
//     or die("ERRO no acesso à DB");

    















    $servidor = "sql206.infinityfree.com";
    $baseDados = "if0_36352104_ementas";
    $userBaseDados = "if0_36352104";
    $passwordBasedados = "hByCRVohoi"; 
    $ligacaoBD =
    mysqli_connect($servidor, $userBaseDados, $passwordBasedados, $baseDados)
    or die("ERRO no acesso à DB");



    // $sql = "SELECT * FROM `users`";
    // $all_ementas = mysqli_query($ligacaoBD, $sql);