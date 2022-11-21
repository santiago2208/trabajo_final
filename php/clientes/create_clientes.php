<?php 
    include ("../dataBaseConnect.php");

    if (isset($_POST{'add'})){
        $name = $_POST['nombre'];
        $document = $_POST['documento'];
        $email = $_POST['correo'];
        $address = $_POST['direccion'];
        $phone = $_POST['telefono'];

        $create = "INSERT INTO clientes (nombre, documento, correo, direccion, telefono) VALUES ('$name', '$document', '$email', '$address', '$phone')";
        if (mysqli_query($connection,$create)){
            header('Location: ../../clientes.php');
        }
    }

?>