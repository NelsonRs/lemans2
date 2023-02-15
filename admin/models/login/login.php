<?php require_once 'class.php';global $mysqli;

$user = mysqli_escape_string($mysqli,$_POST['user']);$pass =  mysqli_escape_string($mysqli,$_POST['pass']);
$succes = login($user,$pass);
if ($succes==true) {
    header("Location: ../../");
}else {
    header("Location: ../../login.php");
}

