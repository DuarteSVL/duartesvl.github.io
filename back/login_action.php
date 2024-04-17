<?php
include "db_conn.php";

session_start(); // Starting the session

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
        header("Location: login.php?error=Dados em falta.");
        exit();
    } else {
        // Hash the password before comparing
        $hashed_password = md5($password);

        $sql = "SELECT * FROM users WHERE username='$username' AND password='$hashed_password'";

        $result = mysqli_query($ligacaoBD, $sql);

        if (mysqli_num_rows($result) == 1){
            // Authentication successful
            $_SESSION['username'] = $username; // Store username in session variable
            header('Location: ./main.php');
            exit();
        } else {
            // Authentication failed
            header("Location: login.php?error=Dados errados.");
            exit();
        }
    }
} else {
    header("Location: login.php");
    exit();
}

