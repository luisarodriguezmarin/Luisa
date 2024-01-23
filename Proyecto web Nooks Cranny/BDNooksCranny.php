<?php
//Incluimos el fichero de conexión para poder conectarse a la instancia
include("conexionNooksCranny.php");

//Creamos la base de datos
$sql = "CREATE DATABASE nooksCrannyBD";

//Comprobación de la creación de la base de datos
if (mysqli_query($conn, $sql)) {
  echo "Base de datos creada correctamente";
} else {
  echo "Error al crear la base de datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 