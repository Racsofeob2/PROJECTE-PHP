<?php
session_start();
$_SESSION["foot"]= "<footer class='bg-light text-center text-lg-start'>
<!-- Copyright -->
    <div class='text-center p-3' style='background-color: rgba(0, 0, 0, 0.2);'>
    © 2023 Copyright: Oscar Ferre
    <a href='https://www.youtube.com/watch?v=dQw4w9WgXcQ' target='blank'><img src='https://previews.123rf.com/images/generalfmv/generalfmv1312/generalfmv131200170/24660409-forma-de-la-5px-orbital-at%C3%B3mico-en-el-fondo-blanco.jpg'style='heigth:27px;width:27px' alt=''></a>
    tlfn: 123 456 789
    </div>
    <!-- Copyright -->
</footer>";
$_SESSION["array1"]=array();
if (isset($_SESSION["array"])){
    $_SESSION["array1"] = $_SESSION["array"];
}
?>
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="sha384-RxqHG2ilm4r6aFRpGmBbGTjsqwfqHOKy1ArsMhHusnRO47jcGqpIQqlQK/kmGy9R" crossorigin="anonymous">
    
    <style>
        body{
            background-color:#4a4f4d; /* Light Grey */
        }
    </style>

    <title>Log in</title>
</head>
<body>  
<section class="vh-100">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <h1 style="color:blanchedalmond;">LOGIN</h1>
            <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
<form action="./handleLogin.php" method="post">
    <div class="form-group">
        <label for="user">Usuari</label>
        <input type="text" name="user" class="form-control" id="user"  placeholder="USUARI">
    </div>
        <div class="form-group">
        <label for="pass">Contrasenya</label>
        <input type="password" name="pass" class="form-control" id="pass" placeholder="CONTRASENYA">
    </div>
    <button type="submit" class="btn btn-primary">Continua</button>
</form>
<br>
    <button onClick="document.location.href='./Register.php'" class="btn btn-info">Registra't</button>

            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
</body>
<?=$_SESSION["foot"]?>
</html>
