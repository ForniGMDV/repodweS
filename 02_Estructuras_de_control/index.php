<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de contenidos</title>
    <style>
        table{
            border-collapse: collapse;
            width: 700px;
        }
        table th, table td{
            text-align: center;
            border: 3px solid deeppink;
        }
        a{
            color: blue;
            text-decoration: none;
        }
        a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <table>
        <caption>Tabla de contenidos</caption>
        <thead>
            <tr>
                <th>Archivo</th>
                <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <a href="numeros.php">numeros.php</a>
                </td>
                <td>Ejercicios con números y estructuras IF</td>
            </tr>
            <tr>
                <td>
                    <a href="fechas.php">fechas.php</a>
                </td>
                <td>Ejercicios de fechas con la función date()</td>
            </tr>
            <tr>
                <td>
                    <a href="ejercicios.php">ejercicios.php</a>
                </td>
                <td>Ejercicios</td>
            </tr>
            <tr>
                <td>
                    <a href="for.php">for.php</a>
                </td>
                <td>Ejercicios con FOR</td>
            </tr>
        </tbody>
    </table>
</body>
</html>