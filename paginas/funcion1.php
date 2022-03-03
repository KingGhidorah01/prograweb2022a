<!doctype html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Funciones en PHP</title>
	<?php
      // Funcion definida por el programador
	  // Este bloque de código se ejecuta hasta 
	  // que se le manda llamar
      function suma($numero1, $numero2)
      {
         if ($numero1 == ""){
             $numero1 = 0;
         }
         if ($numero2 == ""){
             $numerp2 = 0;
         }
         $suma = ($numero1+$numero2);
         echo "La suma de esos 2 números es ". $suma;
         echo "<br/>";

      }
    ?>
</head>
<body>
  <h1>Esto se ve en pantalla</h1>
  <br /> 
  <?php
	suma(7, 14);
    suma(11, 11);
    suma(1542, 254);
  ?>
</body>
</html>