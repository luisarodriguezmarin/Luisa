<?php
//En el caso del que el método sea post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Incluye la conexión para conectar se a la instancia
    include("conexionNooksCranny.php");

    //Pasa el nombre de usuario y la contraseña como parámetro
    $nombre = $_POST['nombre'];
    $contrasenya = $_POST['contrasenya'];

    //Inserta el nombre de usuario y la contraseña en la tabla de usuarios
    $sql = "INSERT INTO usuarios (nombre, contrasenya)
    VALUES ('$nombre', '$contrasenya')";

//Comprueba si el ususario se ha instartado o no
    if (mysqli_query($conn, $sql)) {
        echo "Usuario creado correctamente.";
    } else {
        echo "Algo es incorrecto.";
    }  

    mysqli_close($conn);
}
?>