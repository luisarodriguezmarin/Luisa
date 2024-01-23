 <?php
 //Estas lineas se usan para pasar por pantalla errores que se puedan ocasionar
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Definimos los parámetros para la conexión
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nooksCrannyBD";

//Creamos la conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Comprobamos la coneión
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?> 