<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo</title>
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="mensaje">
        <input type="text" name="numero">
        <input type="submit" value="enviar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        /*
         * Este código se ejecuta cuando el servidor recibe una petición post
         */
        $mensaje = $_POST["mensaje"];

        $numero = $_POST["numero"];
        for($i = 0; $i < $numero; $i++){
            echo "<h3>$mensaje</h3>";
        }

        // Añadir al formulario un campo de texto adicional para introducir un numero
        // Mostrar el mensaje tantas veces como indique el numero
    }
    ?>
</body>
</html>