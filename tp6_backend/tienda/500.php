<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIENDA</title>
</head>
<body>
    <h1>tienda de ropa</h1>
    
<h2>Lista de prendas cuyo precio es mayor a 500</h2>

<table border = 1>
    <tr>
<th>ID</th>
<th>TIPO DE PRENDA </th>
<th>MARCA</th>
<th>TALLE</th>
<th>PRECIO</th>

    </tr>

<?php

$conexion =mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"tienda");

$consulta= "SELECT*FROM ropa WHERE precio > '500'";

$datos= mysqli_query($conexion, $consulta);

while ($reg = mysqli_fetch_array($datos)) {?> 
    <tr>

    <td>    <?php echo $reg['id']; ?>               </td>
    <td>    <?php echo $reg['tipo_de_prenda']; ?>   </td>
    <td>   <?php echo $reg['marca']; ?>             </td>
    <td>    <?php echo $reg['talle']; ?>   </td>
    <td>   <?php   echo $reg['precio'];  ?>         </td>
  

    </tr>

    <?php } ?>
    </table>
    <button type="submit"><a href="index.html">Volver</a></button>  

    </body>
    </html>