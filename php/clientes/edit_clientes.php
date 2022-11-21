<?php 
include('../dataBaseConnect.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $read = "SELECT * FROM clientes WHERE id = $id";
  $resultado = mysqli_query($connection, $read);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $id = $row['id'];
    $name = $row['nombre'];
    $document = $row['documento'];
    $email = $row['correo'];
    $address = $row['direccion'];
    $phone = $row['telefono'];
  }
}

if (isset($_POST['guardar'])) {
  $id = $_GET['id'];
  $name = $_POST['nombre'];
  $document = $_POST['documento'];
  $email = $_POST['correo'];
  $address = $_POST['direccion'];
  $phone = $_POST['telefono'];

  $guardar = "UPDATE clientes SET nombre = '$name', documento ='$document', correo = '$email', direccion = '$address', telefono = '$phone' WHERE id = '$id' ";

  mysqli_query($connection, $guardar);
  header('Location:../../clientes.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lociones angelica</title>
    <link rel="stylesheet" href="../../css/clientes/actualizar/phonee.css">
</head>
<body>
    <header>
        <img src="../../img/locion.png" alt="">
        <p>lociones angel</p>
    </header>
    <nav>
        <a href="../../index.php">Inicio</a>
        <a href="../../clientes.php" class="pagina">Clientes</a>
        <a href="../../productos.php">Productos</a>
        <a href="../../proveedores.php">Proveedores</a>
    </nav>

    <h2>Clientes</h2>

<main>
        <div class="cont_principal">
            <form name="form" action="edit_clientes.php?id=<?= $_GET['id'] ?>" method="post">
                <h3>Actualizar</h3>
                <div class="input_item">
                    <label>Nombre</label>
                    <input type="text" name="nombre" value="<?php echo $name; ?>" >
                </div>
                <div class="input_item">
                    <label>Documento</label>
                    <input type="text" name="documento" value="<?php echo $document; ?>">
                </div>
                <div class="input_item">
                    <label>Direccion</label>
                    <input type="text" name="direccion" value="<?php echo $address; ?>" >
                </div>
                <div class="input_item">
                    <label>Correo</label>
                    <input type="text" name="correo" value="<?php echo $email; ?>">
                </div>
                <div class="input_item">
                    <label>Direccion</label>
                    <input type="text" name="direccion" value="<?php echo $address; ?>">
                </div>

                <div class="input_item">
                    <label>Telefono</label>
                    <input type="text" name="telefono" value="<?php echo $phone; ?>">
                </div>

                <div class="input_item">
                    <button name="guardar">Editar</button>
                </div>
            </form>
        </div>
    </main>

</body>