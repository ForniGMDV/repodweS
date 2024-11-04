<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
    <!-- Mostrar errores en la web -->
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
</head>
<body>
    <?php
        $array = [];

        $arrayvacio1 = [];
        $arrayvacio2 = [];

        for($i = 0; $i < 5; $i++){
            $arrayvacio1[$i] = rand(1,10);
            $arrayvacio2[$i] = rand(10,100);
        }

        array_push($array,[$arrayvacio1]);
        array_push($array,[$arrayvacio2]);

        echo "<p>Array 1:</p>";
        foreach($arrayvacio1 as $mostrararray1){
            echo "<p>$mostrararray1</p>";
        }

        echo "<p>Array 2:</p>";
        foreach($arrayvacio2 as $mostrararray2){
            echo "<p>$mostrararray2</p>";
        }

        $suma = 0;
        $mayor = $arrayvacio1[0];
        $menor = $arrayvacio1[0];

        for($i = 0; $i < count($arrayvacio1); $i++) {
            $suma += $arrayvacio1[$i];
            if($mayor < $arrayvacio1[$i]){
                $mayor = $arrayvacio1[$i];
            }
            if($menor > $arrayvacio1[$i]){
                $menor = $arrayvacio1[$i];
            }
        }

        $media = $suma / count($arrayvacio1);

        echo "<h4>Primer array</p>";
        echo "<p>Suma: $suma</p>";
        echo "<p>Mayor: $mayor</p>";
        echo "<p>Menor: $menor</p>";
        echo "<p>Media: $media</p>";


        $suma2 = 0;
        $mayor2 = $arrayvacio2[0];
        $menor2 = $arrayvacio2[0];

        for($i = 0; $i < count($arrayvacio2); $i++) {
            $suma2 += $arrayvacio2[$i];
            if($mayor2 < $arrayvacio2[$i]){
                $mayor2 = $arrayvacio2[$i];
            }
            if($menor2 > $arrayvacio2[$i]){
                $menor2 = $arrayvacio2[$i];
            }
        }

        $media2 = $suma / count($arrayvacio2);

        echo "<h4>Segundo array</p>";
        echo "<p>Suma: $suma2</p>";
        echo "<p>Mayor: $mayor2</p>";
        echo "<p>Menor: $menor2</p>";
        echo "<p>Media: $media2</p>";
    ?>
</body>
</html>