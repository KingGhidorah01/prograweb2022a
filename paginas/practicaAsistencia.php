<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica de la asistencia del día</title>
    <?php
    function miTabla($renglones)
    {
        for ($i = 1; $i <= $renglones; $i++) {
            echo "<tr>";
            echo "<td align='center'>Iteración # " . $i . "</td>";
            echo "</tr>";
        }
    }
    ?>
</head>
<body>
<div align="center">
    <h3>Martín Josué Andrade Salazar, con fecha de hoy
        <?php
        date_default_timezone_set('America/Mexico_City');
        setlocale(LC_TIME, "spanish");
        echo strftime("%A, %d de %B de %Y");
        ?>
    </h3>
    <table border="2" width="80%">
        <?php

        miTabla(20);

        ?>
    </table>
</div>
</body>
</html>

