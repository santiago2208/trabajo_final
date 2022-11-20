<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lociones angelica</title>
    <link rel="stylesheet" href="./css/clientes/style.css">
</head>
<body>
    <header>
        <img src="./img/locion.png" alt="">
        <p>lociones angel</p>
    </header>
    <nav>
        <a href="./index.php">Inicio</a>
        <a href="./clientes.php" class="pagina">Clientes</a>
        <a href="">Productos</a>
        <a href="">Proveedores</a>
    </nav>

    <h2>Clientes</h2>

    <main>

        <section class="formulario">
            <form id="formulario" method="post"  name="form" action="./clientes/create_clientes.php">
                <input type="text" placeholder="Nombre" name="nombre">
                <input type="text" placeholder="Documento" name="documento"> <!-- documento -->
                <input type="text" placeholder="Correo" name="correo" >   
                <input type="text" placeholder="Direccion" name="direccion" >     
                <input type="text" placeholder="Telefono" name="telefono" >
                <input type="submit" value="Agregar" class="boton" name="add">
            </form>
        </section>

        <section class="tabla">
            <table class="prueba">
                <tr >
                    <th>Nombre</th>
                    <th>Documento</th>
                    <th>Correo</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                </tr>
                <tbody>
                    <?php 
                        include './dataBaseConnect.php';
                        $read = "SELECT * FROM clientes";
                        $resultado = mysqli_query($connection,$read);
                        while ($row = mysqli_fetch_array($resultado)) {
                            ?>
                        
                    
                    <tr>
                        <td><?php echo $row['nombre']?></td>
                        <td><?php echo $row['documento']?></td>
                        <td><?php echo $row['correo']?></td>
                        <td><?php echo $row['direccion']?></td>
                        <td><?php echo $row['telefono']?></td>
                        <td> 
                        <a href="./actualizar.php?id=<?php echo $row['id'] ?>"><img src="./img/editar.png" alt="" class="editar"></a>

                        <a href="delete.php?id=<?php echo $row['id'] ?>"><img src="./img/eliminar.png" class="quitar"></img></a></td>
                        
                    </tr>
                    <?php } ?>
                    </tbody>
            </table>
        </section>


    </main>
</body>