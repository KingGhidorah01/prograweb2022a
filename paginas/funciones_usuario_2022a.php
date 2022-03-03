<?php
$numero = $_POST['BoxNumbers'];
$nombre = $_POST['txtnombre'];
function CrearTabla($numero)
{
    for ($i = 1; $i <= $numero; $i++) {
        echo "<tr>";
        echo "<td align='center'>" . $numero . "</td>";
        echo "<td align='center'>" . $numero . "</td>";
        echo "<td align='center'>" . $numero . "</td>";
        echo "</tr>";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funciones usuario</title>
</head>
<body>
<div align="center">
    <table border="2" width="80%">
        <?php
        CrearTabla($numero);
        ?>
    </table>
    <br/>
    <br/>
    <?php
    echo "<h1>Este reto de PHP lo programó ".$nombre."</h1>";
    ?>
</div>
</body>
</html>