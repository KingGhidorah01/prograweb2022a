<?php
//Paso 1: Conectar Base de Dato
require_once "conexion.php";
//Paso 2: Crear una consulta SQL que se guarde en una variable
$sql = "SELECT * FROM empleados";
//Paso 3: Ejecutar la consulta de SQL y guardar en otra variable
$result = $conn->query($sql);
//Paso 4: Recuperar los registros en otra variable
$rows = $result->fetchAll();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<tittle>Reporte de PHP conectado a MySql</tittle>
</head>
<body>
        <h2>Reporte de la tabla de MySQL en página de HTML</h2>
        <div align="left">
        <form action="" id="form1" action="grabar.php" method="POST">
            <?php
            $cont = 0;
//Paso 5: Construir 1 ciclo FOREACH para recorrer cada registro
//recuperando ll que guardamos en la variable del paso 4 $rows
foreach ($rows as $row) {
    //Paso 6: Imprimir los valores de los campos de la tabla de MySQL
    $cont = $cont + 1;
    echo "<input type='radio' id='$cont' name='opciones' value='$row[numero]'>" . $row['nombre'] . "</br>";
}
//Paso 7: Cerrar o destruir la conexión a la base de datos
$conn = null;
?>
        </form>
        </div>
</body>
</html>