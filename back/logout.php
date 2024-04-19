<?php
session_start(); // Starting the session

$_SESSION = array();


session_destroy();

header("Location: login.php");
exit();

