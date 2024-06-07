<?php
$localhost = 'localhost';
$root = 'root';
$pass = '';
$dbname = 'colegio';


$conn = new mysqli($localhost, $root, $pass, $dbname);

    if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
    }


?>

