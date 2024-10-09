<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios</title>
    <style>
        table{
            border-collapse: collapse;
            width: 700px;
        }
        table th, table td{
            text-align: center;
            border: 3px solid black;
        }
        .suspenso{
            background-color: red;
        }
        .aprobado{
            background-color: green;
        }
    </style>
    <?php
        error_reporting( E_ALL );
        ini_set("display_errors", 1);
    ?>
</head>
<body>
    <!--
    

    Desarrollo web en entorno servidor => Alejandra
    Desarrollo web en entorno cliente => José Miguel
    Diseño de interfaces web => José Miguel
    Desplieges de aplicaciones => Jaime
    Empresa e iniciativa emprenderora => Convalidado
    Inglés => Virginia

    MOSTRARLO TODO EN UNA TABLA
    -->

<h1>Ejercicio 1</h1>

    <?php
$asignaturas = [
    "Desarrollo web en entorno servidor" => "Alejandra",
    "Desarrollo web en entorno cliente" => "José Miguel",
    "Diseño de interfaces web" => "José Miguel",
    "Desplieges de aplicaciones" => "Jaime",
    "Empresa e iniciativa emprenderora" => "Convalidado",
    "Inglés" => "Virginia"
];

echo "<table>";
echo "<tr><th>Asignatura</th><th>Profesor</th></tr>";

foreach ($asignaturas as $asignatura => $profesor) {
    echo "<tr>";
    echo "<td>$asignatura</td>";
    echo "<td>$profesor</td>";
    echo "</tr>";
}

echo "</table>";
?>
    <!--
    EJERCICIO 02

    Francisco => 3
    Daniel => 5
    Aurora => 10
    Luis => 7
    samuel => 9

    MOSTRAR EN UNA TABLA CON 3 COLUMNAS
     - COLUMNA 1: ALUMNO
     - COLUMNA 2: NOTA
     - COLUMNA 3: SI NOTA < 5, SUSPENSO, ELSE, APROBADO
    -->
<br>
<br>

<h1>Ejercicio 2</h1>

    <?php
    $estudiantes = [
        "Francisco" => 3,
        "Daniel" => 5,
        "Aurora" => 10,
        "Ismael" => 0,
        "Luis" => 7,
        "Samuel" => 9,
        "Juanjo" => 2,
        "Vicente" => 1,
    ]
    ?>

    <table>
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Nota</th>
                <th>Calificación</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($estudiantes as $estudiante => $nota){ 
                    if ($nota < 5) echo "<tr class = 'suspenso'>";
                    else echo "<tr class='aprobado'>";
                    ?>
                        <td><?php echo $estudiante ?></td>
                        <td><?php echo $nota ?></td>
                        <td>
                            <?php
                                if($nota < 5) echo "Suspenso";
                                else if ($nota >= 5  && $nota < 7) echo "Aprobado";
                                else if ($nota >= 7 && $nota < 9) echo "Notable";
                                else echo "Sobresaliente";
                            ?>
                        </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
    ?>
</body>
</html>