<?php
session_start();
$courses = $_SESSION["courses"];
$nom = $_POST["n"];
$hores = $_POST["h"];
$mesos = $_POST["m"];
$tutor = $_POST["tu"];
$temari = $_POST["t"];

$courses[$nom] = array($nom,$hores,$mesos,$tutor,$temari);

$_SESSION["nc"] = $courses;

echo "curso añadido correctamente";
header("Refresh:2;url=./Menu.php");
die();

