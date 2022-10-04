
<h1>Ejercicio 1</h1>
<?php

$pares_1 = ["2", "4", "6","8", "10",  "12",  "14", "16", "18", "20",];
print"<pre>";
    print_r($pares_1) ;
print"<pre>";
?>
<hr>

<h1>Ejercicio 2</h1>

<?php

$array2= [  "pedro",  "Ana",  "34", "1",];

print_r($array2)

?>
<hr>

<h1>Ejercicio 3</h1>

<?php

$array3= [  'nombre'=> "pedro",  'apellido'=>"Torres",  'Direccion'=> "Av.Mayor 3703",'Telefono'=>"1122334455",];
print"<pre>";
print_r($array3);
print"<pre>";

?>
<hr>
<h1>Ejercicio 4</h1>
<?php

$array4 = ["Madrid", "Barcelona", "Londres","New York", "Los Angeles",  "Chicago",];
foreach ($array4 as $city => $city_value) {
    print "<p>El indice de ".$city_value."  es ".$city."</p>\n";
;}

?>
<hr>
<h1>Ejercicio 5</h1>
<?php

$matriz = ['MD'=>"Madrid",'BCL'=> "Barcelona",'LD'=> "Londres",'NY'=>"New York",'LA'=> "Los Angeles", 'CCG'=> "Chicago",];

foreach ($matriz as $city2 => $city2_value) {
    print "<p>El indice de ".$city2_value."  es ".$city2."</p>\n";
;}

?>