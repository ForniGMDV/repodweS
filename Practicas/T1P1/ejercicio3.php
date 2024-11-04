<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="numero">
        <select name="select" id="ocpion">
            <option value="sumatorio">Sumatorio</option>
            <option value="factorial">Factorial</option>
        </select>
        <input type="submit" value="Calcular">
    </form>
    <?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $numero = $_POST["numero"];
        $seleccion = $_POST["select"];
        
        echo "<p>Numero: $numero</p>";
        
        if($seleccion == "sumatorio"){
            $sumatorio = 0;
            for($i = 0; $i <= numero; $i++){
                $sumatorio += $i;
            }
        }
        

        echo "<p> Sumatorio: $sumatorio</p>";
    }
    ?>
</body>
</html>