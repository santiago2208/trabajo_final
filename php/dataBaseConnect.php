<?php 
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'perfumes';
$port = 3306;

try {
    $connection = mysqli_connect($host, $user, $password, $dbName, $port);
} catch (ErrorException $error) {
    $error->getMessage();
    echo $error;
    echo 'no se pudo conectar a la base de datos';
}