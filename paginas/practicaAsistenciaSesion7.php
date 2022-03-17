<?php

require_once "conexion.php";

$id = $_GET["departamento"];

$id = (string)$id;

$sql = 'SELECT D.departamento, D.descripcion, E.numero, E.nombre FROM departamentos D ';
$sql2 = $sql . 'INNER JOIN empleados E ON D.departamento = E.departamento WHERE D.departamento=' . $id;

$result = $conn->query($sql2);

$rows = $result->fetchAll();


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Asistencia Sesión 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h2 class="text-center" style="margin-top: 15px">Reporte de la tabla de MySQL en página de HTML | Para la asistencia de
    la sesión 7</h2>
<h3 class="text-center" style="margin-top: 15px">Martín Josué Andrade Salazar | 219737144</h3>
<div align="center" class="container">
    <table border="1" width="90%" class="table table-bordered border-primary" style="margin-top: 15px">
        <thead>
        <tr class="table-primary">
            <th>Departamento</th>
            <th>Descripción</th>
            <th>Nombre</th>
            <th>Número</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rows as $row) {
            ?>
            <tr>
                <td><?php echo $row['departamento']; ?></td>
                <td><?php echo $row['descripcion']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['numero']; ?></td>
            </tr>
        <?php } ?>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="reporteAsistenci.php"></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>
    </table>
</div>

<?php
//Cerramos la oonexion a la base de datos
$conn = null;
?>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>