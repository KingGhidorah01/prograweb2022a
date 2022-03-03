<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Funciones con 2 parámetros en PHP</title>
	<?php
      //Funcion definida por el programador con 2 parámetros de entrada
	  //En este caso se esperan 2 números
      function suma($numero1, $numero2)
      {
		 //Dentro del cuerpo de la función se usan los 2 parámetros en una suma
		 $suma = ($numero1 + $numero2); 
         echo "La suma de esos 2 número es " . $suma;
		 echo "<br />";
      }
    ?>
</head>
<body>
     <h1>Esto se ve en pantalla</h1>
     <br />
     <?php
	        //Se manda llamar la función con su nombre de función
			//Pero al ser función de 2 parámetros, se le tiene que enviar los
			//2 valores de lo contrario dará error o un resultado "raro" :'-(
	        suma(6, 4);
			suma(157, 43);
			//http://localhost/prograweb2020b/paginas/funcion3.php
	 ?>
</body>
</html>