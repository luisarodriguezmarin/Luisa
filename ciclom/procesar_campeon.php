<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title>Campeones de League of Legends</title>
    </head>
	<body>
		<h1>Resultado de la encuesta sobre nuestros campeones</h1>
        <?php
            print("<h1>El formulario de PHP. Reultados del formulario</h1>");
            $nombre = "user_name";
            $apellidos = "user_name";
            $campeon = "user_name";
            $otrocampeon = "user_name";

            //Impresión de los datos recogidos
            print("<p>Los datos que se han introducido son:</p>");
            print("<ul>\n");
            print("<li> Nombre del usuario: $nombre \n");
            print("<li> Apellidos del usuario: $apellidos \n");
            print("<li> Campeón favorito: $campeon \n");
            print("<li> Otro Campeon: $otrocampeon \n");
            print("</ul>\n");
        ?>
	</body>
</html>