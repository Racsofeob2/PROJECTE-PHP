<?php
session_start();
$user = $_POST["user"];
$pass=$_POST["pass"];

$md5 = md5($pass);

$users = $_SESSION["array1"];

if (isset($users[$user]) && $users[$user]===$md5){
    $_SESSION["user"] = $user;
    header("Location:Menu.php");
    die();
}else{

    echo "<br><h1 class='btn-danger'>ERROR</h1>";
    header("Refresh:2; url=http://localhost/Projecte/Login.php");
    die();
}
