<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Potencias</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="base">
        <input type="text" name="exponente">
        <input type="submit" value="enviar">
    </form>
    <?php
    /*
    Crear un formulario que reciba dos paramteros: base y exponente
    Cuando se envie el formulario, se calculará el resultado de elevar la base al exponente
    */
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $base = $_POST["base"];
        $exponente = $_POST["exponente"];
        $resultado = 1;
        for($i = 1; $i <= $exponente; $i++){
            $resultado *= $base;
        }
        
        echo "<h3>$resultado</h3>";
    }
    ?>
</body>
</html>