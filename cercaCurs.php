<?php
session_start();
if(!isset($_SESSION["user"])){

    echo("Sessión invalida");

    header("Refresh:2; url=./Login.php");
}else{
$user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="sha384-RxqHG2ilm4r6aFRpGmBbGTjsqwfqHOKy1ArsMhHusnRO47jcGqpIQqlQK/kmGy9R" crossorigin="anonymous">

    <title>Cercador</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <h2>Hola <?=ucfirst($user)?></h2><hr>   

    </ul>
<button class="btn btn-danger" onClick="document.location.href='./handleLogOut.php'">Log Out</button>
    </div>
</nav>
<body>
    <form action="" method="get">
    <input type="text" name="curso">
    <button class="btn btn-success" type="submit">Cerca</button>
    </form>



<?php }
if(isset($_GET["curso"]) && $_GET["curso"]!=""){
    $names = $_SESSION["courses"];
    $request = $_GET["curso"];


    $input = isset($_GET['curso']) ? $_GET['curso'] : '';
    
    $filtered_names = array_filter($names, function ($name) use ($input) {
        return stripos($name[0], $input) !== false;
    });
    

    foreach($filtered_names as $curso){
        echo "<br><a href='Cursos.php?c=$curso[0]'>$curso[0]</a>";
    }
}

    ?>

</body>
</html>
