<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
    <!-- Mostrar errores en la web -->
    <?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    ?>
    <style>
        table{
            border-collapse: collapse;
            width: 700px;
        }
        table th, table td{
            text-align: center;
            border: 3px solid black;
        }
    </style>
</head>
<body>
    <?php
    // Ejercicio 1
    $animes = [
        ["Re:Zero", "Misterio"],
        ["Kekkai Sensen", "Acción"],
        ["Frieren", "Fantasía"],
        ["Jigokuraku", "Acción"],
    ];

    // 1.1

    array_push($animes,["Dandadan","Comedia"]);
    array_push($animes,["Jujutsu Kaisen", "Acción"]);

    // 1.2
    // or alguna razón el apartado 1.2 me destruye el ejercicio entero, seguramente porque yo no esté borrando el anime como es debido
    // unset($animes[0]);

    // 1.3

    for($i = 0; $i < count($animes); $i++) {

        $animes[$i][2] = rand(1990,2030);

        // 1.4

        $animes[$i][3] = rand(1,99);

        // 1.5

        if($animes[$i][2] <= 2024){
            $animes[$i][4] = "Ya disponible";
        }
        else{
            $animes[$i][4] = "Próximamente";
        }
    }

    ?>

    <!-- 1.6 y 1.7 -->
    <table>
        <thead>
            <caption>Animes</caption>
            <tr>
                <th>Titulo</th>
                <th>Género</th>
                <th>Año</th>
                <th>Episodios</th>
                <th>Disponibilidad</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($animes as $anime) { 
                // Descompone el array en varias variables, solamente dentro del foreach
                list($titulo, $genero, $anio, $eps, $dispo) = $anime; ?>
                <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $genero ?></td>
                <td><?php echo $anio ?></td>
                <td><?php echo $eps ?></td>
                <td><?php echo $dispo ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br><br>

    <h2>Tabla ordenada</h2>

    <?php
    $_titulo = array_column($animes, 0);
    $_genero = array_column($animes, 1);
    $_anio = array_column($animes, 2);

    array_multisort($_titulo, SORT_ASC, 
                    $_genero, SORT_DESC, 
                    $_anio, SORT_DESC, 
                    $animes);
    ?>

    <table>
        <thead>
            <caption>Animes</caption>
            <tr>
                <th>Titulo</th>
                <th>Genero</th>
                <th>Año</th>
                <th>Duración</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach($animes as $anime) { 
                // Descompone el array en varias variables, solamente dentro del foreach
                list($titulo, $genero, $anio, $eps, $dispo) = $anime; ?>
                <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $genero ?></td>
                <td><?php echo $anio ?></td>
                <td><?php echo $eps ?></td>
                <td><?php echo $dispo ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
