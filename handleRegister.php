<?php
session_start();
$users = $_SESSION["array1"];

$user = $_POST["usr"];
$pass = $_POST["pwd"];
$md5 = md5($pass);

function register($user,$md5){
    echo "<h1>usuario $user añadido correctamente</h1>";
            
    $users[$user]=$md5;
    header("Refresh:2; url=Login.php");
    $_SESSION["array"] = $users;
}
if (isset($users[$user])){?>
<script>
    alert("Usuario ya existente")
    window.location = './Register.php'
</script>
<?php
}elseif($user=="" || $pass==""){?>
<script>
    alert("Usuario y/o contraseña incorrectas")
    window.location = './Register.php'
</script>
<?php
}else{?>
<?php       
register($user,$md5);
}

?>
