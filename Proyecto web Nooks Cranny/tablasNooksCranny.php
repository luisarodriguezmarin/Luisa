<?php
//Incluimos la conexión para que se pueda conectar a la base de datos
include("conexionNooksCranny.php");

//Selecccionamos la base de datos
mysqli_select_db($conn, "nooksCrannyBD");

//Esta tabla se creará inicalmente vacía para contener los usuarios que se inserten desde el archivo registro.php
$sql = "CREATE TABLE usuarios (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(30) NOT NULL,
  contrasenya VARCHAR(30) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
      
//comprobación de la cración de la tabla
  if (mysqli_query($conn, $sql)) {
      echo "Tabla usuarios creada correctamente";
  } else {
      echo "Error al crear la tabla: " . mysqli_error($conn);
  }
  
  //Esta tabla contandrá los articulos de la tienda que serán insertados con el archivo datosNooksCranny.php
  $sql = "CREATE TABLE articulosTienda (
      id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      nombre VARCHAR(100) NOT NULL,
      categoria VARCHAR(30) NOT NULL,
      precio FLOAT(1.000) NOT NULL,
      stock INT(1)
      )";
          
    //Comprobación de la creación de la tabla
      if (mysqli_query($conn, $sql)) {
          echo "Tabla articulosTienda creada correctamente";
      } else {
          echo "Error al crear la tabla: " . mysqli_error($conn);
      }
  
//Esta tabla se creará inicialmente vacía para contener los pedidos que se realizen desde realizar_pedido.php
  $sql = "CREATE TABLE pedido (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      nombre VARCHAR(30) NOT NULL,
      total FLOAT(1.000) NOT NULL
      )";
              
    //Comprobación de la creación de la tabla
      if (mysqli_query($conn, $sql)) {
          echo "Tabla pedido creada correctamente";
      } else {
          echo "Error al crear la tabla: " . mysqli_error($conn);
      }
    
    mysqli_close($conn);
?> 