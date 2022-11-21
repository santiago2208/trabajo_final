<?php 
    include ("../dataBaseConnect.php");

    if (isset($_POST{'add'})){
        $nombre_p = $_POST['nombre_p'];
        $direccion_p = $_POST['direccion_p'];
        $telefono_p = $_POST['telefono_p'];
        $nit_p = $_POST['nit_p'];
        $correo_p = $_POST['correo_p'];
        $producto_p = $_POST['producto_p'];
        $descripcion_p = $_POST['descripcion_p'];

        $create = "INSERT INTO proveedores (nombre_p, direccion_p, telefono_p, nit_p, correo_p, producto_p, descripcion_p) VALUES ('$nombre_p', '$direccion_p', '$telefono_p', '$nit_p', '$correo_p', '$producto_p', '$descripcion_p')";
        if (mysqli_query($connection,$create)){
            header('Location: ../../proveedores.php');
        }
    }



?>