<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Funciones en PHP</title>
	<?php

      function SaludoPersonalizado($param1, $param2)
      {
		if ($param1 >= 1 && $param1 <=11){
			echo "Buenos días " . $param2;
		}
      }
    ?>
</head>
<body>
     <h1>Esto se ve en pantalla</h1>
     <br />
     <?php
            SaludoPersonalizado(10, "Batman");
	 ?>
</body>
</html>