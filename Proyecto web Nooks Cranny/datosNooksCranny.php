<?php
//INcluimos la conexión para conetarnos a la instancia
include("conexionNooksCranny.php");

//Seleccionamos la base de datos
mysqli_select_db($conn, "nooksCrannyBD");

//Insertamos los datos en la tabla de articulosTienda
$sql = "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('Estufa redonda', 'Articulos de temporada', '3.240', '0');";

$sql .= "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('Sofa Hinchable', 'Articulos de todo el anyo', '1.320', '1');";

$sql .= "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('Cactus', 'Articulos de todo el anyo', '1.680', '0');";

$sql .= "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('TV LCD 50', 'Articulos de todo el anyo', '118.800', '1');";

$sql .= "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('Canya de pescar', 'Miscelaneos', '480', '0');";

$sql .= "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('Semillas de pensamiento amarillo', 'Miscelaneos', '288', '1');";

$sql .= "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('Cerezas', 'Miscelaneos', '480', '0');";

$sql .= "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('Papel pintado azul con estampados de corazones', 'Papel pintado', '1.536', '1');";

$sql .= "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('Papel pintado de curto de juegos rosa', 'Papel pintado', '3.048', '0');";

$sql .= "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('Papel pintado beige marroqui', 'Papel pintado', '2.928', '1');";

$sql .= "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('Suelo laminado comun', 'suelos', '864', '0');";

$sql .= "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('Suelo laminado moderno', 'Suelos', '1.536', '1');";

$sql .= "INSERT INTO articulosTienda (nombre, categoria, precio, stock)
VALUES ('Suelo retro verde', 'Suelos', '1.848', '0');";

if (mysqli_multi_query($conn, $sql)) {
    echo "Fila creada correctamante";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
      
mysqli_close($conn);
?> 