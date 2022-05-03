<?php
$servername = "localhost";
$database = "lol"; 
$username = "root"; 
$password = ""; 

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("La conexión ha fallado: " . mysqli_connect_error());
}
?>