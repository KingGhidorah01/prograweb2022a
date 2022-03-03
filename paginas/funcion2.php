<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Funciones con parámetros en PHP</title>
	<?php
      //Funcion definida por el programador con 1 parámetro de entrada
	  //Entre los paréntesis de la función va una(s) variable(s)
      function saludo($nombre)
      {
		 //El parámetro de entrada se usa dentro del cuerpo de la función 
         echo "BUENOS DIAS " . $nombre;
		 echo "<br />";
      }
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
     <h1>Esto se ve en pantalla</h1>
     <br />
     <?php
	        //Se manda llamar la función con su nombre de función
			//Pero además por ser una función con parámetro de entrada se le agrega
			//El valor que queremos enviar a la función
	        saludo("Abraham");
			saludo("Batman");
			saludo("Senua");
			saludo("Goku");
			//http://localhost/prograweb2020b/paginas/funcion2.php
	 ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>