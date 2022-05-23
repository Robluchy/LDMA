<?php
$servername = "localhost";
$database = "zara"; 
$username = "root"; 
$password = ""; 

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
?>