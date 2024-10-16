<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    $numero = "2";

    # En un "if", si usamos "===" comparamos que $numero sea IDÉNTICO (valor y tipo) a lo que estamos comparando, si usamos "==" comparamos solo el valor.

    $numero = (int) $numero; #Solo sirve para (int) o para (float)
    if($numero == 2){
        echo "<p>EXITO</p>";
    }
    else{
        echo "<p>NO EXITO</p>";
    }

    */

    $hora = (int)date("G");
    echo "<p>Hora actual: $hora</p>";
    $hora = rand(0,23);
    // rand incluye tanto 0 como 23
    echo "<p>Hora aleatoria: $hora</p>";

    /*
    SI $hora ESTA ENTRE 6 y 11, es MAÑANA
    SI $hora ESTA ENTRE 12 y 14, es MEDIODÍA
    SI $hora ESTA ENTRE 15 y 20, es TARDE
    SI $hora ESTA ENTRE 21 y 0, es NOCHE
    SI $hora ESTA ENTRE 1 y 5, es MADRUGADA
    */

    if($hora >= 6 && $hora <=11) echo "<p>MAÑANA</p>";
    elseif($hora >= 12 && $hora <=14) echo "<p>MEDIODÍA</p>";
    elseif($hora >= 15 && $hora <=20) echo "<p>TARDE</p>";
    elseif($hora >= 21 || $hora == 0) echo "<p>NOCHE</p>";
    else echo "<p>MADRUGADA</p>";

    $hora_exacta = date("H:i:s");
    echo "<h1>Hora exacta: $hora_exacta</h1>";

    $dia = date("l");
    echo "<h2>El día de hoy es: $dia</h2>";


    switch($dia){
        case "Monday":
        case "Wednesday":
        case "Friday":
            echo "<p>Hoy $dia tenemos clase de servidores</p>";
            break;
        default:
            echo "<p>Hoy $dia NO tenemos clase de servidores</p>";
            break;
    }
    /*
    switch($n){
        case 1:
            echo "<p>Caso 1</p>";
            break;
        case 2:
            echo "<p>Caso 2</p>";
            break;
        default:
            echo "<p>Default</p>";
            break;
    }
    */
    ?>
</body>
</html>