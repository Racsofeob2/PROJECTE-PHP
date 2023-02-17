<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="sha384-RxqHG2ilm4r6aFRpGmBbGTjsqwfqHOKy1ArsMhHusnRO47jcGqpIQqlQK/kmGy9R" crossorigin="anonymous">

    <title>Datos</title>
</head>
<body>
    <section class="vh-100">
    <form action="./handleRegister.php" method="post">
    Usuari: <input name="usr" type="text" value="<?=$_POST['user']?>" readonly>
    Contrasenya: <input name="pwd" type="text" value="<?=$_POST['pass']?>" readonly>
    <input type="submit" value="continua">
    </form>
    <button class="btn btn-danger" onClick="document.location.href='./Register.php'">Cancel·la</button>
    </section>
</body>
<?=$_SESSION["foot"]?>
</html>
