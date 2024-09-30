<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
</head>
<body>
    <!-- 
    Ejercicio 2: Show the list with the multiple numbers of 3 between 1-100 using while.
    Ejercicio 3: Calculate the sum of even numbers between 1 and 20.
    Ejercicio 4: Calculate the factorial of 6 with while.
    -->
    <?php
        echo "<h2>Ejercicio 2:</h1>";

        $i = 1;
        echo "<ul>";
        while($i <= 100):
            if($i % 3 == 0):
                echo "<li>$i</li>";
            endif;
            $i++;
        endwhile;
        echo "</ul>";


        echo "<h2>Ejercicio 3:</h2>";

        $i = 1;
        while($i <= 20){
            if($i % 2 == 0){
                $suma += $i;
            }
            $i++;
        }
        echo "<p>La suma es: $suma </p>";

        
        echo "<h2>Ejercicio 4:</h2>";

        $factorial = 6;
        $resultado = 1;
        $i = 1;
        while($i <= $factorial){
            $resultado *= $i;
            $i++;
        }
        echo "<p>El factorial de $factorial es $resultado</p>";

    ?>
</body>
</html>