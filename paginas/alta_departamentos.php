<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Regitro de departamentos desde PHP hacia MySQL</title>

    <style type="text/css" media="screen">

        body { background-color:#999;}

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

        #imagen1 { position:relative; top:10px; right:-10px; }

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

        #AddEmpleado{
            position: absolute;
            right: 50px;
            border:3px solid #009;
            padding: 10px;
        }

    </style>

    <script language="javascript">
        function ValidaFormulario()
        {
            //Recuperamos lo elegido en el combo de los departamento
            var departamento = document.getElementById("departamento").value;
            //Recuperamos lo escrito en la caja del número de empleado:
            var descripcion = document.getElementById("descripcion").value;

            if(departamento == null || departamento.length == 0)
            {
                alert("Debes escribir el código del departamento");
                document.getElementById("departamento").value = "";
                document.getElementById("departamento").focus();
                return false;
            } else if (descripcion == null || descripcion.length == 0 || /^\s+$/.test(descripcion)){
                alert("Debes escribir la descripcion del departamento");
                document.getElementById("descripcion").focus();
                return false;
            }
            return true;
        }
        //-->
    </script>

</head>

<body>

<div id="wrapper">

    <div id="caja1">Licenciatura en Tecnologías de la Información</div>
    <div id="caja2">Programación web</div>
    <div id="caja3">Formulario para alta de empleados en la base de datos desde una página web</div>

    <div id="caja4">
        <div id="texto1"><br>
            <fieldset style="width: 90%; font-weight: bold;"    >
                <legend>REGISTRAR UN NUEVO DEPARTAMENTO</legend>



                <form action="grabar_departamentos.php" method="post" id="formulario1" onsubmit="return ValidaFormulario()">
                    <div>
                        <br />
                        <label for="departamento">Departamento:</label>
                        <input type="text" name="departamento" id="departamento">
                        <br />
                        <br />
                        <label for="descripcion">Descripción</label>
                        <textarea type="text" name="descripcion" id="descripcion"></textarea>
                        <br />
                        <br />
                        <input type="submit" name="AddDepartamento" id="AddDepartamento" value="  Registrar este departamento " />
                        <br />
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>
<?php
$conn = null;
?>
</body>
</html>