<?php
session_start();
// unset($_SESSION["user"]);
session_destroy();
echo "<h1>Sesión cerrada con exito</h1>";
header("Refresh:2; url=http://localhost/Projecte/Login.php");
