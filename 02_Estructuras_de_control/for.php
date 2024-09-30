<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For</title>
</head>
<body>
    <?php 
        /* Lista con FOR */
        echo "<ul>";
            for($i = 1; $i <= 10; $i++){
                echo "<li>$i</li>";
            }
        echo "</ul>";

        /* Lista con FOR alternativo */
        echo "<ul>";
            for($i = 1; $i <= 10; $i++):
                echo "<li>$i</li>";
            endfor;
        echo "</ul>";
            
        /* Lista con FOR y con BREAK cursed 1 */
        echo "<ul>";
            for($i = 1; ; $i++){
                if($i > 10){
                    breaK;
                }
                echo "<li>$i</li>";
            }
        echo "</ul>";

        /* Lista con FOR y con BREAK cursed 2 */
        echo "<ul>";
        for($i = 1; ; ){
            if($i > 10){
                breaK;
            }
            echo "<li>$i</li>";
            $i++;
        }
        echo "</ul>";
        


        echo "<h2>Ejercicio 5: Muestra por pantalla los 50 primeros números primos</p>";
        
        $n = 7;
        $m = $n - 1;
        $result = true;
        for($i = 2; $i <= $m; $i++){
            if($n % $i == 0){
                echo "<p>El número no es primo</p>";
                $result = false;
                break;
            }
        }
        echo "<p>El número es primo</p>";
        var_dump($result);
        


        $numero = 2;
        $numerosPrimos = 0;

        echo "<ol>";
        while($numerosPrimos < 50){
            $esPrimo = true;
            for($i = 2; $i < $numero; $i++){
                if($numero % $i == 0){
                    $esPrimo = false;
                    break;
                }
            }
            if($esPrimo){
                $numerosPrimos++;
                echo "<li>$numero</li>";
            }
            $numero++;
        }
        echo "</ol>";
        
    ?>
</body>
</html>