<?php
//En el caso de que el método del formulario sea post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //Incluimos el archivo de la conexión para conectarnos a la instancia
    include("conexionNooksCranny.php");

    //Pasamos el nombre como parámetro
    $nombre = $_POST['nombre'];

    //INsertamos en la tabla la selección del producto
    $sql = "INSERT INTO pedido (nombre, total)
    (SELECT `nombre`, `precio` FROM `articulosTienda` WHERE `nombre` LIKE '$nombre')";

//Mostrará el resultado dependiendo si se ha insertado correctamante o no
    if (mysqli_query($conn, $sql)) {
        echo "¡Marchando! El pedido estará mañana en tu buzón.";
    } else {
        echo "¿Estás seguro/a de que está? Si no, ve a la pestaña de consultar disponibilidad.";
    }

    mysqli_close($conn);
}
?> 