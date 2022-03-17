<?php

require_once "conexion.php";

$id_pelicula = $_GET["id_pelicula"];

$id_pelicula = (int)$id_pelicula;


$sql = 'SELECT p.*, c.nombre_cine FROM peliculas p ';
$sql2 = $sql . 'INNER JOIN cines c ON p.id_cine = c.id_cine WHERE p.id_pelicula=' . $id_pelicula;


$result = $conn->query($sql2);

$rows = $result->fetchAll();

?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Reporte de pelicula </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <h2 class="text-center" style="margin-top: 15px">Reporte a detalle de la pelicula seleccionada</h2>
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
                        <td><?php echo $row['pelicula']; ?></td>
                        <td><?php echo $row['clasificacion']; ?></td>
                        <td><?php echo $row['director']; ?></td>
                        <td><?php echo $row['genero']; ?></td>
                        <td><?php echo $row['duracion']; ?>hrs</td>
                        <td><?php echo $row['idioma']; ?></td>
                        <td><?php echo $row['horario']; ?></td>
                        <td><?php echo $row['nombre_cine']; ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="reporte_peliculas_josue.php">
                                Regresar al reporte completo de la pelicula
                            </a>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <?php
    $conn = null;
    ?>

    <br />
    <br />

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>