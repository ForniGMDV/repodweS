<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EjemplosArrays</title>
</head>
<body>
    <?php 
    /* TODOS LOS ARRAYS EN PHP SON ASOCIATIVOS, COMO LOS MAP DE JAVA
    TIENEN PARES CLAVE - VALOR
    */

    $numeros = [5,10,9,6,7,4];
    $numeros = array(6,10,9,4,3);
    print_r($numeros);

    echo "<br><br>";

    $animales = ["Perro","Gato", "Ornitorrinco","Suricato","Capibara"];
    $animales = [
        "A01" => "Perro",
        "A02" => "Gato",
        "A03" => "Ornitorrinco",
        "A04" => "Suricato",
        "A05" => "Capibara",
    ];
    print_r($animales);

    echo "<p>" . $animales["A03"] . "</p>";
    ?>
</body>
</html>