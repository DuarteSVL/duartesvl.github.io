<?php

include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])){
    function validate($data){   
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username) || empty($password)){
        header("Location: login.php?error=Username e password necessarios");
        exit();
    } else {
        // Hash the password before comparing
        $hashed_password = md5($password);

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password'";

        $result = mysqli_query($ligacaoBD, $sql);

        if (mysqli_num_rows($result) == 1){
            // Authentication successful
            header('Location: ./main.php');
            exit();
        } else {
            // Authentication failed
            header("Location: login.php?error=Dados incorrectos.");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}
