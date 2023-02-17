<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/sketchy/bootstrap.min.css" integrity="sha384-RxqHG2ilm4r6aFRpGmBbGTjsqwfqHOKy1ArsMhHusnRO47jcGqpIQqlQK/kmGy9R" crossorigin="anonymous">
    
    <title>Menu</title>
</head>
<body>

<?php
session_start();
$_SESSION["courses"] = array("hardware"=>array("hardware","234","7","John Doe"),"software"=>array("software","152","4","John Doe"));

if (isset($_SESSION["nc"])){
    $_SESSION["courses"] = $_SESSION["nc"];
}
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
            <select name="c">
            <?php
foreach($courses as $course){
?>
    <option value="<?=$course[0]?>"><?=ucfirst($course[0])?></option>

<?php }?>
            </select>
            <div class="card" style="border-radius: 5px;">

            <div class="card-body p-5">

<a href="Cursos.php">Veure els cursos</a> | <a href="nouCurs.php">afegeix-ne un nou</a> | <a href="cercaCurs.php">Cerca el curs</a>

            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
<?php
}
?>

</body>
<?=$_SESSION["foot"] ?>
</html>
