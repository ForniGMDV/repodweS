<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edades</title>
    <link rel="stylesheet" href="/Ejercicios/cssparaphp/estilo.css">
</head>
<body>
    <!--
        CREAR UN FORMULARIO QUE RECIBA EL NOMBRE Y LA EDAD DE UNA PERSONA

        SI LA EDAD ES MENOR QUE 18, SE MOSTRARÁ EL NOMBRE Y QUE ES MENOR DE EDAD
        
        SI LA EDAD ESTÁ ENTRE 18 Y 65, SE MOSTRARÁ EL NOMBRE Y QUE ES MAYOR DE EDAD

        SI LA EDAD ES MÁS DE 65, SE MOSTRARÁ EL NOMBRE Y QUE SE HA JUBILADO
        
    -->
    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <label for="apellido">Apellido</label>
        <input type="text" name="apellido">
        <label for="edad">Edad</label>
        <input type="text" name="edad">
        <input type="submit" value="respuesta">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        //$mensaje = $_POST["mensaje"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $edad = $_POST["edad"];

        if($edad < 18){
            echo "<h3>$nombre es menor de edad</h3>";
        }
        else if($edad >= 18 && $edad <= 65){
            echo "<h3>$nombre es mayor de edad</h3>";
        }
        else if($edad > 65){
            echo "<h3>$nombre se ha jubilado</h3>";
        }     
    }
    
    ?>

    <!--
        CREAR UN FORMULARIO QUE RECIBA UN NÚMERO

        SE MOSTRARÁ LA TABLA DE MULTIPLICAR DE ESE NUMERO EN UNA TABLA HTML
    -->

    <form action="" method="post">
        <label for="numero">Numero</label>
        <input type="text" name="numero">
        <input type="submit" value="calcular">
    </form>


    <table>
        <tbody>
            <tr>
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $numero = $_POST["numero"];
                    for($i = 1;$i <= 10; $i++){
                        $resultado = $numero*$i;
                        echo "<tr><td>$resultado</td></tr>";
                    }
                }
            ?>
            </tr>
        </tbody>
    </table>
    
</body>
</html>