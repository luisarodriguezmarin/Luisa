<?php
//Incluimos el fichero de conexión para conectar con la instancia
  include("conexionNooksCranny.php");

  //En el caso de que el método del formulario en consultarDisponibilidad.html sea post
  if ($_SERVER["REQUEST_METHOD"] == "POST") {  

  //Pasará el nombre del articulo a buscar como variable
  $nombre = $_POST['nombre'];

//Buscará en la tabla si el artículo está o no
  $sql = "SELECT `nombre`, `stock` FROM `articulosTienda` WHERE `nombre` LIKE '$nombre'";

  //Gardará el resultado en otra variable
  $result = mysqli_query($conn, $sql);

  //Dependiendo del resultado de la consulta
  if (mysqli_num_rows($result) > 0) {

    //Mostrará un mensaje en función de lo que se haya guardado en la variable sobre el resultado de la consulta
    while($row = mysqli_fetch_assoc($result)) {
      echo "¡Qué suerte, tenemos ese artículo!";
    }
  } else {
    echo "Lo sentimos, no tenemos lo que buscas.";
  }

  mysqli_close($conn);
}
?>