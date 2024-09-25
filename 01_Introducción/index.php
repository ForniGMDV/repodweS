<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    DEFINE("PI", 3.14);

    echo "<h1>PI vale " . PI . "</h1>";

    $mensaje = "Hola Mundo";
    echo '<h1>El mensaje es $mensaje</h1>';

    $numero = 3;
    var_dump($numero);

    $numero_decimal = 3.0;
    var_dump($numero_decimal);

    $numero_grande = 3e10;
    var_dump($numero_grande);

    $mensaje = "adiós mundo";
    var_dump($mensaje);
    ?>

</body>
</html>