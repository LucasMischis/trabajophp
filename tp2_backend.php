<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php
echo "Ejercicio 1 <hr>";
$n1 = 10;

if ($n1 > 0) {
  echo "$n1 es un número positivo <br><br>";
}
echo "Ejercicio 2 <hr>";
$n2 = 6;

if ($n2 > 1 & $n2 < 10) {
  echo "$n2 es mayor a 1 y menor a 10 <br><br>";
}
echo "Ejercico 3 <hr>";
$n3 =1;

if ($n3 > 10 || $n3 < 2) {
  echo "Válido <br><br>";
}

echo "Ejercicio 4 <hr>";

$numero1 = 5;
$numero2 = 7;

if ($numero1 > $numero2) {
  echo "$numero1 + $numero2 , $numero1 - $numero2";
}

elseif ($numero1  <  $numero2) {
 echo "$numero1 * $numero2 , $numero1 / $numero2 , $numero1 % $numero2";
}

else {
  echo "Los números ingresados son iguales <br>";
}


 ?>



  </body>
</html>
