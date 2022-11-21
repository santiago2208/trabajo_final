<?php 
    include ("../dataBaseConnect.php");

    if (isset($_POST{'add'})){
        $referencia = $_POST['referencia'];
        $cantidad = $_POST['cantidad'];
        $valor = $_POST['valor'];
        $nombre = $_POST['nombre'];

        $create = "INSERT INTO productos (referencia, cantidad, valor, nombre) VALUES ('$referencia', '$cantidad', '$valor', '$nombre' )";
        if (mysqli_query($connection,$create)){
            header('Location: ../../productos.php');
        }
    }

?>