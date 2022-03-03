<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica de la sesión 5</title>
    <style>
        #contenedor {
            margin: 0 auto;
            width: 960px;
            height: fit-content;
            padding-top: 20px;
            padding-bottom: 20px;
        }

        #formulario {
            width: 600px;
            height: 250px;
            margin-left: 160px;
            text-align: center;
            border-style: solid;
            border-width: 2px;
            padding: 5px;
        }

        .btn {
            margin-top: 40px;
            margin-right: 470px;
        }

        .select {
            float: left;
        }
    </style>
</head>
<body>
<div id="contenedor">
    <div id="formulario">
        <form method="post" action=funciones_usuario_2022a.php id="frm_datos">
            <h1>Formulario</h1>
            <fieldset>
                <legend align="left"><strong>Captura de selección de un número entero:</strong></legend>
                <br/>
                <strong class="select">Selecciona un número: </strong>
                <select id="BoxNumbers" name="BoxNumbers" class="select">
                    <option value="0">--Selecciona un número--</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                    <option value="40">40</option>
                    <option value="50">50</option>
                </select><br/>
                <input type="hidden" name="txtnombre" id="txtnombre" size="10" value="Martín Josué Andrade Salazar"/>
                <input type="submit" value="Grabar datos" id="btn_grabar" class="btn">
            </fieldset>
        </form>
    </div>
</div>
</body>
</html>