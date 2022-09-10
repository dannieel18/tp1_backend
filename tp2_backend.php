

<h1>Ejercico 1</h1>
<?php
$a = 2;
if($a > 0){
    echo "$a  es un numero positivo";
  }
?>
<br>
<hr>
<h1>Ejercicio 2</h1>
<?php
$b = 4;
if($b > 1 && $a < 10){
    echo "$b es un numero mayor a 1 y menor a 10";
  }
?>
<br>
<hr>
<h1>Ejercicio 3</h1>
<?php
$c = 1;
if($c > 10) {
    echo "$c es un numero mayor a 10";
  }

elseif ($c< 2) {
    echo "$c es un numero menor a 2";

  }
?>

<br>
<hr>
<h1>Ejercicio 4</h1>
<?php
$numero1 = 8;
$numero2= 9;

$suma = $numero1 + $numero2;
$resta = $numero1 - $numero2;

$division= $numero1 / $numero2;
$resto = $numero1 % $numero2;

$multiplicacion= $numero1 * $numero2;


if ($numero1 > $numero2 ) {
  echo "$numero1 - $numero2 = $resta <br> $numero1 + $numero2   = $suma ";
}

if ($numero2 > $numero1) {


echo" $numero1 / $numero2 = $division <br> El resto de $numero1 / $numero2   es $resto <br>
La multiplicaion entre $numero2 y $numero1 es = $multiplicacion  ";

}
if ($numero1 == $numero2) {
  echo"Los numeros ingresados son iguales";
}

  
?>