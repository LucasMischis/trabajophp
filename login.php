<?php
$usuario = $_POST ["user"];
$contrasenia = $_POST ["pass"];

$ckuser = "lafe";
$ckpass = "1234";

if ($usuario == $ckuser && $contrasenia == $ckpass) {
  header ("location:https://www.facebook.com/DeportivoLaferrere/");
}
else {
  header ("location:error.html");
}


 ?>
