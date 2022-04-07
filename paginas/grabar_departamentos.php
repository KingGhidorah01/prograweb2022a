<?php
require_once "conexion.php";

$departamento = $_POST["departamento"];
$descripcion = $_POST["descripcion"];

$sql = "SELECT * FROM departamentos WHERE departamento ='" . $departamento . "'";
$result = $conn->query($sql);

$rows = $result->fetchAll();

if (empty($rows)) {
    $sqlINSERT1 = "INSERT INTO departamentos(departamento, descripcion) VALUES ('$departamento', '$descripcion')";
    $conn->exec($sqlINSERT1);
    $mensaje = "EL departamento se registro exitosamente.";
} else {
    $mensaje = "El departamento que quieres guardar ya existe, favor de revisar la información";
    $departamento = "<p style ='color:red;'>No se guardó nada</p>";
    $descripcion = "";
}


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Regitro de departamentos desde PHP hacia MySQL</title>

    <style type="text/css" media="screen">

        body {
            background-color: #999;
        }

        #wrapper {
            margin: auto;
            width: 960px;
            height: 550px;
            background-color: #CCC;
        }

        #caja1 {
            width: 300px;
            height: 50px;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 10px;
            background-color: #FFC;
            float: left;
        }

        #caja2 {
            width: 300px;
            height: 50px;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 10px;
            background-color: #FFC;
            float: left;
        }

        #caja3 {
            width: 300px;
            height: 50px;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 10px;
            background-color: #FFC;
            float: left;
        }

        #caja4 {
            width: 940px;
            height: 450px;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 40px;
            background-color: #333;
            clear: both;
            /*
                 position:absolute;
                 top:200px;
                 */

            position: relative;
            top: 10px;
        }

        #imagen1 {
            position: relative;
            top: 10px;
            right: -10px;
        }

        #texto1 {
            width: 500px;
            height: 400px;
            margin-left: 5px;
            margin-right: 10px;
            margin-top: 10px;
            background-color: #CCC;
            padding: 5px;
            float: right;
            right: -10px;
            top: 10px;
        }

        #AddEmpleado {
            position: absolute;
            right: 50px;
            border: 3px solid #009;
            padding: 10px;
        }

    </style>

</head>

<body>

<div id="wrapper">

    <div id="caja1">Licenciatura en Tecnologías de la Información</div>
    <div id="caja2">Programación web</div>
    <div id="caja3">Formulario para alta de empleados en la base de datos desde una página web</div>

    <div id="caja4">
        <div id="texto1"><br>

            <fieldset style="width: 90%;">
                <legend style="color: red"><?php echo $mensaje ?></legend>
                <div>
                    <br/>
                    <b>Departamento:</b> <?php echo($departamento); ?>
                    <br/>
                    <br/>
                    <b>Descripción:</b> <?php echo($descripcion); ?>
                    <br/>
                    <br/>
                    <a href="alta_departamentos.php">REGISTRAR OTRO DEPARTAMENTO</a>
                </div>
            </fieldset>
        </div>
    </div>
</div>
<?php
//Cerramos la conexion a la base de datos *************************************
$conn = null;
?>
</body>
</html>