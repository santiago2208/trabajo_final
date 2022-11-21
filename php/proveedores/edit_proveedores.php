<?php 
include('../dataBaseConnect.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $read = "SELECT * FROM proveedores WHERE id = $id";
  $resultado = mysqli_query($connection, $read);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $id = $row['id'];
    $nombre_p = $row['nombre_p'];
    $direccion_p = $row['direccion_p'];
    $telefono_p = $row['telefono_p'];
    $nit_p = $row['nit_p'];
    $correo_p = $row['correo_p'];
    $producto_p = $row['producto_p'];
    $descripcion_p = $row['descripcion_p'];
  }
}


if (isset($_POST['guardar'])) {
  $id = $_GET['id'];
  $nombre_p = $_POST['nombre_p'];
  $direccion_p = $_POST['direccion_p'];
  $telefono_p = $_POST['telefono_p'];
  $nit_p = $_POST['nit_p'];
  $correo_p = $_POST['correo_p'];
  $producto_p = $_POST['producto_p'];
  $descripcion_p = $_POST['descripcion_p'];

  $guardar = "UPDATE proveedores SET nombre_p = '$nombre_p', direccion_p ='$direccion_p', telefono_p = '$telefono_p', nit_p = '$nit_p', correo_p = '$correo_p', producto_p = '$producto_p', descripcion_p = '$descripcion_p' WHERE id = '$id' ";

  mysqli_query($connection, $guardar);
  header('Location:../../proveedores.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lociones angelica</title>
    <link rel="stylesheet" href="../../css/actualizarr.css">
</head>
<body>
    <header>
        <img src="../../img/locion.png" alt="icono">
        <p>lociones angel</p>
    </header>
    <nav>
        <a href="../../index.php">Inicio</a>
        <a href="../../clientes.php">Clientes</a>
        <a href="../../productos.php">Productos</a>
        <a href="../../proveedores.php" class="pagina">Proveedores</a>
    </nav>

    <h2>Proveedores</h2>

<main>
        <div class="cont_principal">
            <form name="form" action="edit_proveedores.php?id=<?= $_GET['id'] ?>" method="post">
                <h3>Actualizar</h3>
                <div class="input_item">
                    <label>Nombre</label>
                    <input type="text" name="nombre_p" value="<?php echo $nombre_p; ?>" >
                </div>
                <div class="input_item">
                    <label>Direccion</label>
                    <input type="text" name="direccion_p" value="<?php echo $direccion_p; ?>"> 
                </div>
                <div class="input_item">
                    <label>Telefono</label>
                    <input type="text" name="telefono_p" value="<?php echo $telefono_p; ?>" >  
                </div>
                <div class="input_item">
                    <label>Nit</label>
                    <input type="text" name="nit_p" value="<?php echo $nit_p; ?>">
                </div>
                <div class="input_item">
                    <label>Correo</label>
                    <input type="text" name="correo_p" value="<?php echo $correo_p; ?>">
                </div>
                <div class="input_item">
                    <label>Producto</label>
                    <input type="text" name="producto_p" value="<?php echo $producto_p; ?>">
                </div>
                <div class="input_item">
                    <label>Descripcion</label>
                    <input type="text" name="descripcion_p" value="<?php echo $descripcion_p; ?>">
                </div>
                <div class="input_item">
                    <button name="guardar">Editar</button>
                </div>
            </form>
        </div>
    </main>

</body>

