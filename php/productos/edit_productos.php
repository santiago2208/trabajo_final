<?php 
include('../dataBaseConnect.php');
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $read = "SELECT * FROM productos WHERE id = $id";
  $resultado = mysqli_query($connection, $read);
  if (mysqli_num_rows($resultado) == 1) {
    $row = mysqli_fetch_array($resultado);
    $id = $row['id'];
    $referencia = $row['referencia'];
    $cantidad = $row['cantidad'];
    $valor = $row['valor'];
    $nombre = $row['nombre'];
  }
}


if (isset($_POST['guardar'])) {
  $id = $_GET['id'];
  $referencia = $_POST['referencia'];
  $cantidad = $_POST['cantidad'];
  $valor = $_POST['valor'];
  $nombre = $_POST['nombre'];

  $guardar = "UPDATE productos SET referencia = '$referencia', cantidad ='$cantidad', valor = '$valor', nombre = '$nombre' WHERE id = '$id' ";

  mysqli_query($connection, $guardar);
  header('Location:../../productos.php');
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
        <img src="../../img/locion.png" alt="icono">
        <p>lociones angel</p>
    </header>
    <nav>
        <a href="../../index.php">Inicio</a>
        <a href="../../clientes.php" >Clientes</a>
        <a href="../../productos.php" class="pagina">Productos</a>
        <a href="../../proveedores.php">Proveedores</a>
    </nav>

    <h2>Productos</h2>

<main>
        <div class="cont_principal">
            <form name="form" action="edit_productos.php?id=<?= $_GET['id'] ?>" method="post">
                <h3>Actualizar</h3>
                <div class="input_item">
                    <label>Referencia</label>
                    <input type="text" name="referencia" value="<?php echo $referencia; ?>" >
                </div>
                <div class="input_item">
                    <label>Cantidad</label>
                    <input type="text" name="cantidad" value="<?php echo $cantidad; ?>"> 
                </div>
                <div class="input_item">
                    <label>Valor</label>
                    <input type="text" name="valor" value="<?php echo $valor; ?>" >  
                </div>
                <div class="input_item">
                    <label>Nombre</label>
                    <input type="text" name="nombre" value="<?php echo $nombre; ?>">
                </div>
                <div class="input_item">
                    <button name="guardar">Editar</button>
                </div>
            </form>
        </div>
    </main>

</body>

