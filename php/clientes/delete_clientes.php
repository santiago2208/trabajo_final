<?php
    include ("../dataBaseConnect.php");
    if (isset($_GET['id'])){    
        $id = $_GET['id'];
        
        $delete = "DELETE FROM clientes WHERE id = $id";

        if (mysqli_query($connection, $delete)){
            $_SESSION['message'] = 'Registro borrado exitosamente';
            $_SESSION['message_type'] = 'danger';
            header('Location:../../clientes.php'); 
        }else{
            echo "Error al borrar registro: " . mysqli_error($connection);
        }
    }