<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="sha384-RxqHG2ilm4r6aFRpGmBbGTjsqwfqHOKy1ArsMhHusnRO47jcGqpIQqlQK/kmGy9R" crossorigin="anonymous">

    <title>Cursos</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION["user"])){

    echo("Sessión invalida");

    header("Refresh:2; url=./Login.php");
}else{
$user = $_SESSION["user"];
$courses = $_SESSION["courses"];?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <h2>Hola <?=ucfirst($user)?></h2><hr>   

    </ul>
<button class="btn btn-danger" onClick="document.location.href='./handleLogOut.php'">Log Out</button>
    </div>
</nav>
<br>
<section class="vh-100">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <h1 style="color:black;">Cursos</h1>
            <div class="card" style="border-radius: 5px;">
<form action="" method="get">
            <select name="c">
            <?php
foreach($courses as $course){
?>
    <option value="<?=$course[0]?>"><?=ucfirst($course[0])?></option>

<?php }?>
</select>  
<input type="submit" value=next>
</form> 
<?php
    if(isset($_GET["c"]) && $_GET["c"]!=""){
    $modul = $_GET["c"];
    $cursos= $_SESSION["courses"];
    foreach($cursos as $curs){
        if($curs[0]==$modul){ ?>
        <h3>
        Nom: <?=ucfirst($curs[0])?><br>
        Hores: <?=$curs[1]?><br>
        Mesos: <?=$curs[2]?><br>
        Tutor: <?=$curs[3]?><br>
        Temari: <?=$curs[4]?><br>
        </h3>
        <a href="./Menu.php">Tornar</a>
            </div>
        </div>
        </div>
    </div>
    </div>
    

<?php       }
    }


?>

<?php } }
?>
</section>
</body>
<?=$_SESSION["foot"]?>
</html>

