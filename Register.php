<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="sha384-RxqHG2ilm4r6aFRpGmBbGTjsqwfqHOKy1ArsMhHusnRO47jcGqpIQqlQK/kmGy9R" crossorigin="anonymous">
    
    <style>
        body{
            background-color:#4a4f4d /* Light Grey */
        }
    </style>

    <title>Nou usuari</title>
</head>
<body>  
<section class="vh-100">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <h1 style="color:blanchedalmond;">Nou usuari</h1>
            <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
<form action="./dades.php" method="post">
    <div class="form-group">
        <label for="user">Usuari</label>
        <input type="text" name="user" class="form-control" id="user"  placeholder="USUARI">
    </div>
        <div class="form-group">
        <label for="pass">Contrasenya</label>
        <input type="password" name="pass" class="form-control" id="pass" placeholder="CONTRASENYA">
    </div>
    <button type="submit" class="btn btn-primary">Registra'm</button>
</form>
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
