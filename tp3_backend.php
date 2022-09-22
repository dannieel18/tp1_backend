<?php
echo "<h1>Ejercicio 1</h1>";

$i = 1 ;

while ($i <= 100) {
    print"$i - ";
    $i++;
}

?>

<?php
echo "<h1>Ejercicio 2</h1>";

$i = 100 ;

while ($i >0) {
    print"   $i -" ;
    $i--;
}

?>

<?php
echo "<h1>Ejercicio 3</h1>";

$i = 2 ;

while ($i <= 98 && $i= $i+2) {
    echo"$i -";
    
}

?>

<?php

echo "<h1>Ejercicio 4</h1>";

$i = 1;     
  
$impar = 1; 
while ( $i <= 50){
	echo "$impar -";
	$i = $i + 1;
	$impar = $impar + 2;
}

?>
<br>
<?php

echo "<h1>Ejercicio 5</h1>";


$suma = 0;

for ($i=1; $i <=20 ; $i++) { 
    $suma += $i;
}

echo"La suma de los numeros del 1 al 20 es =$suma";
?>
<?php

echo "<h1>Ejercicio 6</h1>";


$suma = 0;


for ($i=2; $i <=20 ; $i=$i+2) { 
    $suma += $i;
    
}

echo"La suma de los numeros del 1 al 20 es =$suma";


?>