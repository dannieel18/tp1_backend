<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
<h1>Ejercicio 1</h1>
<?php

echo "hola mundo";
?>

<br>
<hr>

    <h1>Ejercicio 2</h1>
    <?php

$saludo = "hola mundo";

echo $saludo;
?>
<hr>
<br>
<h1>Ejercicio 3</h1>
<?php
$num1 = 34;
$num2 = 6;
?>


<p>Suma</p>
<?php
              
$suma = $num1 + $num2;                
$result = "34 + 6 = $suma";  
echo $result;
                
?>

<hr>
<br>
<p>Resta</p>

<?php
              
$resta = $num1 - $num2;                
$result = "34 - 6 = $resta";  
echo $result;
                
?>
<hr>
<br>
<p>Multipliacion</p>
<?php
              
$multiplicacion = $num1 * $num2;                
$result = "34 x 6 = $multiplicacion";  
echo $result;
                
?>

<hr>
<br>
<p>Division</p>
<?php
              
$division = $num1 / $num2;

$resto =$num1 % $num2 ;

$result = "34 / 6 = $division";  
echo $result;
                
?>

<br>

<?php

echo "resto de la division = $resto"
?>

<hr>
<br>

<h1>Ejercicio 4</h1>
<?php
 $celsius =  20;
$farenheit = $celsius * 1.82 + 32;
echo $farenheit;
?>

<hr>
<br>
<h1>Ejercicio 5</h1>
<br>

<?php
 $base =  12;
$altura = 18;

$perimetro = ($base + $altura) * 2;
$area = $base * $altura;

echo "a) perimetro del rectangulo = $perimetro cm "
?>

<br>

<?php

echo "area del rectangulo = $area cm2"
?>
<hr>
<br>

<?php
$radio = 30;
$perimetro = 2 * 3.14 * $radio;

$area = ($perimetro * $radio)/2;

echo "b) perimetro del circulo = $perimetro cm";
?>

<br>

<?php
echo "area del circulo = $area ";
?>
</main>
<footer>
    <h2>Trabajo hecho por Daniel Lopez</h2>
</footer>
</body>
</html>