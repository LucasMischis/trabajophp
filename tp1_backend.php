<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h2>Ejercicio 1</h2>

<?php
echo "Hola mundo";
?>

<br>
<br>
<h2>Ejercicio 2</h2>

<?php
$mensaje = "Hola mundo";
echo $mensaje;
?>

<br><br>

<h2>Ejercico 3</h2>

<?php
$valor1 = 19;
$valor2 = 3;

echo $valor1 + $valor2;
 ?>
 <br>
 <?php
echo $valor1 - $valor2;
  ?>
  <?php
  echo $valor1 * $valor2;
  ?>
  <br>
  <?php
echo $valor1 / $valor2;
   ?>
   <br>
   <?php
echo $valor1 % $valor2;
    ?>
    <br><br>
    <h2>Ejercicio 4</h2>

    <?php
    $grados = 20;
    echo ($grados * 9/5) + 32 ;
     ?>
     <br><br>

     <h2>Ejercicio 5</h2>

     <?php
$base = 18;
$altura = 12;
$area = $base * $altura;
$perimetro = ($base * 2) + ($altura * 2);
echo $area;
  ?>
  <br>
  <?php
echo $perimetro;
   ?>
<br>
   <?php
$radio = 30;
$areacirculo = (3.14 * 30) ** 2;
$perimetrocirculo = ($areacirculo * 2) * 3.14;
echo $areacirculo;
    ?>
<br>
<?php
echo $perimetrocirculo;
 ?>

  </body>
</html>
