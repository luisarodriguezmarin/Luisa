<?php
//Enel caso en el que elmétodo del formulario del archivo iniciarSesion.html sea post
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  //Incluye la conexión para que se pueda conectar a la instancia
  include("conexionNooksCranny.php");

  //Pasa el nombre de usuario y la contraseña como parámetro
  $nombre = $_POST['nombre'];
  $contrasenya = $_POST['contrasenya'];

  //Busca en la tabla el nombre de usuario y la contraseña
  $sql = "SELECT `nombre`, `contrasenya` FROM `usuarios` WHERE `nombre` LIKE '$nombre' AND `contrasenya` LIKE '$contrasenya'";

  //Seguarda el resultado en una variable
  $result = mysqli_query($conn, $sql);

  //Dependiendo del resultado que se guarde en la variable
  if (mysqli_num_rows($result) > 0) {

    //Muestra un mensaje dependiendo del resultado que se guarde en la variable nueva
    while($row = mysqli_fetch_assoc($result)) {
      echo "Sesión iniciada correctamente.";
    }
  } else {
    echo "Algo es incorrecto. Inténtalo de nuevo.";
  }

  mysqli_close($conn);
}
?> 