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

    <title>Nou curs</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <h2>Hola <?=ucfirst($user)?></h2><hr>   

    </ul>
<button class="btn btn-danger" onClick="document.location.href='./handleLogOut.php'">Log Out</button>
    </div>
</nav>
<br>
NOU CURS
<hr>
<form action="./handleNewCourse.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nom">Nom</label>
      <input required type="text" class="form-control" id="nom" name="n">
    </div>
    <div class="form-group col-md-6">
      <label for="hores">Hores</label>
      <input required type="number" min="1" class="form-control" id="hores" name="h" >
    </div>
  </div>
  <div class="form-group">
    <label for="mesos">Mesos</label>
    <input required type="number"min="1" name="m" class="form-control" id="mesos">
  </div>
  <div class="form-group">
    <label for="tutor">Tutor</label>
    <input required type="text"name="tu" class="form-control" id="tutor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="tema">Temari</label>
      <input required type="text" name="t" class="form-control" id="tema">
    </div>
    
  </div>

  </div>
  <button type="submit" class="btn btn-primary">Afegir</button>
</form>
</body>
<?=$_SESSION["foot"]?>
</html>
<?php } ?>
