<?php

  $conexion = mysqli_connect("127.0.0.1", "root", "");
  mysqli_select_db($conexion, "tienda");
  
 $id = $_GET['id'];


  $consulta = "DELETE FROM `ropa` WHERE `id`=$id";

  mysqli_query($conexion,$consulta);

    
  header('location: tp6_backend.php');
?>
