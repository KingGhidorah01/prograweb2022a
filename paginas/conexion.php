<?php
$servername = "localhost";
$username = "root";
$password = "";
$BasedeDatos = "prograweb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$BasedeDatos", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  //   echo "<div alignF='center'><h1>Si me conecté</h1></div>";
} catch (PDOException $e) {
//    echo "<div align='center'><h1>No me conecté: </h1></div>" . $e->getMessage();
    /*Programado por: Martín Josué Andrade Salazar | 219737144*/
}
?>