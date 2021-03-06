<?php
//Paso 1: Conectar la Base de Datos
require_once "conexion.php";

//Paso 2: Crear una consulta SQL
$sql = "SELECT * FROM empleados";
//Paso 3: Ejecutar la consulta SQL y guardar en otra variable
$result = $conn->query($sql);
//Pas 4: Recuperar los registros en otra variable
$rows = $result->fetchAll();


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de PHP conectado a MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h2 class="text-center" style="margin-top: 15px">Reporte de la tabla de MySQL en página de HTML</h2>
<div align="center" class="container">
    <table border="1" width="90%" class="table table-bordered border-primary" style="margin-top: 15px">
        <thead>
        <tr class="table-primary">
            <th>ID</th>
            <th>Nombre</th>
            <th>Salario</th>
            <th>Categoria</th>
            <th>Sexo</th>
            <th>Departamento</th>
        </tr>
        </thead>
        <tbody>
        <?php
        //Paso 5:
        foreach ($rows as $row) {

            ?>
            <tr>
                <td><?php echo $row['numero']; ?></td>
                <td><?php echo $row['nombre']; ?></td>
                <td><?php echo $row['salario']; ?></td>
                <td><?php echo $row['categoria']; ?></td>
                <td><?php echo $row['sexo']; ?></td>
                <td><?php echo $row['departamento']; ?></td>
            </tr>
        <?php } ?>
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