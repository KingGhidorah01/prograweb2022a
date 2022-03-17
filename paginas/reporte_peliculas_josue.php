<?php

require_once "conexion.php";


$sql = "SELECT p.*, c.id_cine, c.nombre_cine FROM peliculas p INNER JOIN cines c ON p.id_cine = c.id_cine";

$result = $conn->query($sql);

$rows = $result->fetchAll();


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Práctica 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h2 class="text-center" style="margin-top: 15px">Información de tabla de peliculas</h2>
<h3 class="text-center" style="margin-top: 15px">Martín Josué Andrade Salazar | 219737144</h3>
<div align="center" class="container">
    <table border="1" width="90%" class="table table-bordered border-primary" style="margin-top: 15px">
        <thead>
        <tr class="table-primary">
            <th>Id</th>
            <th>Pelicula</th>
            <th>Clasificación</th>
            <th>Director</th>
            <th>Género</th>
            <th>Duración</th>
            <th>Idioma</th>
            <th>Horario</th>
            <th>Cine</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($rows as $row) {
            ?>
            <tr>
                <td><?php echo $row['id_pelicula']; ?></td>
                <td>
                    <a href="detalle_pelicula.php?id_pelicula=<?php echo $row['id_pelicula']; ?>">
                        <?php echo $row['pelicula']; ?>
                    </a>
                </td>
                <td><?php echo $row['clasificacion']; ?></td>
                <td><?php echo $row['director']; ?></td>
                <td><?php echo $row['genero']; ?></td>
                <td><?php echo $row['duracion']; ?>hrs</td>
                <td><?php echo $row['idioma']; ?></td>
                <td><?php echo $row['horario']; ?></td>
                <td><?php echo $row['nombre_cine']; ?></td>
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