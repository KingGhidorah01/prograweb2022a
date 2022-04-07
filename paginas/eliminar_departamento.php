
<?php

require_once "conexion.php";
$result = "";
$departamento = $_GET["departamento"];
$departamento = (string)$departamento;

$sql = "SELECT * FROM departamentos WHERE departamento = '$departamento'";

$result = $conn->query($sql);

$rows = $result->fetchAll();

$sqlBorrar = "DELETE FROM departamentos WHERE departamento = '$departamento'";
$conn->exec($sqlBorrar);


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Asistencia Sesión 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script>
        function borrar_departamento(departamento){
            if (confirm("¿Estás seguro de eliminiar el departamento: " +departamento+ "?") == true){
                return true;
            }else{
                return false;
            }
        }
    </script>
</head>
<body>
<h2 class="text-center" style="margin-top: 15px">Reporte de la tabla de MySQL en página de HTML | Para eliminar
    registros</h2>
<h3 class="text-center" style="margin-top: 15px">Martín Josué Andrade Salazar | 219737144</h3>
<div align="center" class="container">
    <table border="1" width="90%" class="table table-bordered border-primary" style="margin-top: 15px">
        <thead>
        <tr class="table-primary">
            <th>Departamento</th>
            <th>Descripción</th>
            <th>Volver</th>
        </tr>
        </thead>
        <tbody>
        <?php

        foreach ($rows as $row) {
            ?>
            <tr>
                <td>
                        <?php echo $row['departamento']; ?>
                </td>
                <td><?php echo $row['descripcion']; ?></td>
                <td><a href="reporte_dep_borrar.php">Volver al reporte</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<?php
$conn = null;
?>

</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</html>