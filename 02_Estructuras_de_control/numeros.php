<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números</title>
</head>
<body>
    <?php $texto = "hola mundo"; ?>

    <h1><?php echo $texto?></h1>

    <?php
    $numero = 8;

    
    #Forma 1

    if($numero >= -10 and $numero < 0){
        echo "<p>1 El número $numero esta en el primer rango</p>";
    }
    elseif($numero >= 0 and $numero <= 10){
        echo "<p>1 El número $numero esta en el segundo rango</p>";
    }
    elseif($numero > 10 and $numero <= 20){
        echo "<p>1 El número $numero esta en el tercer rango</p>";
    }
    else{
        echo "<p>1 El número $numero no está en ningún rango</p>";
    }

    #Forma 2

    if($numero >= -10 and $numero < 0) echo "<p>2 El número $numero esta en el primer rango</p>";
    elseif($numero >= 0 and $numero <= 10) echo "<p>2 El número $numero esta en el segundo rango</p>";
    elseif($numero > 10 and $numero <= 20) echo "<p>2 El número $numero esta en el tercer rango</p>";
    else echo "<p>2 El número $numero no está en ningún rango</p>";

    #Forma 3

    if($numero >= -10 and $numero < 0) :
        echo "<p>3 El número $numero esta en el primer rango</p>";
    elseif($numero >= 0 and $numero <= 10):
        echo "<p>3 El número $numero esta en el segundo rango</p>";
    elseif($numero > 10 and $numero <=20):
        echo "<p>3 El número $numero esta en el tercer rango</p>";
    else:
        echo "<p>3 El número $numero no está en ningún rango</p>";
    endif;


    $numero_aleatorio = rand(1,200); # [1,200] --> Es un rango cerrado

    $numero_aleatorio_decimales = rand(10,100)/10;

    $digitos = 0;

    /*  COMPROBAR DE TRES FORMAS DIFERENTES, CON LA ESTRUCTURA IF, SI EL NUMERO ALEATORIO TIENE 1,2 0 3 DÍGITOS */

    #Forma 1

    if($numero_aleatorio > 0 and $numero_aleatorio <= 9){
        $digitos = 1;
    }
    elseif($numero_aleatorio >= 10 and $numero_aleatorio < 100){
        $digitos = 2;
    }
    elseif($numero_aleatorio >= 100 and $numero_aleatorio <=200){
        $digitos = 3;
    }
    else{
        $digitos = "ERROR";
    }

    echo "<p>1 El número aleatorio $numero_aleatorio tiene $digitos dígitos</p>";

    #Forma 2
    
    if($numero_aleatorio > 0 and $numero_aleatorio <= 9) echo "<p>2 El número aleatorio $numero_aleatorio tiene 1 dígito</p>";
    elseif($numero_aleatorio >= 10 and $numero_aleatorio < 100) echo "<p>2 El número aleatorio $numero_aleatorio tiene 2 dígitos</p>";
    else echo "<p>2 El número aleatorio $numero_aleatorio tiene 3 dígitos</p>";
    
    #Forma 3
    
    if($numero_aleatorio > 0 and $numero_aleatorio <= 9) :
        echo "<p>3 El número aleatorio $numero_aleatorio tiene 1 dígito</p>";
    elseif($numero_aleatorio >= 10 and $numero_aleatorio < 100):
        echo "<p>3 El número aleatorio $numero_aleatorio tiene 2 dígitos</p>";
    else:
        echo "<p>3 El número aleatorio $numero_aleatorio tiene 3 dígitos</p>";
    endif;
    





    /* #   Forma 1
    if($numero > 0){
        echo "<p>1 El número $numero es mayor que cero</p>";
    }
    elseif ($numero == 0){
        echo "<p>1 El número $numero es igual que cero</p>";
    }
    else{
        echo "<p>1 El número $numero es menor que cero</p>";
    }

    #   Forma 2
    if ($numero > 0) echo "<p>2 El número $numero es mayor que cero</p>";
    elseif($numero == 0) echo "<p>2 El número $numero es igual que cero</p>";
    else echo "<p>2 El número $numero es menor que cero</p>";

    #   Forma 3
    if ($numero > 0):
        echo "<p>3 El número $numero es mayor que cero</p>";
    elseif ($numero == 0):
        echo "<p>3 El número $numero es igual que cero</p>";
    else:
        echo "<p>3 El número $numero es menor que cero</p>";
    endif; */

    /* if($numero > 0) {
        echo "<p>1 El número $numero es mayor que cero</p>";
    }
    if($numero < 0) echo "<p>2 El número $numero es menor que cero</p>";
    
    if($numero = 0): echo "<p>3 El número $numero es igual que 0</p>"; endif;
    ?> */
    ?>
    
    
</body>
</html>