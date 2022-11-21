<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lociones angelica</title>
    <link rel="stylesheet" href="./css/clientes/styles.css">
</head>
<body>
    <header>
        <img src="./img/locion.png" alt="">
        <p>lociones angel</p>
    </header>
    <nav>
        <a href="./index.php">Inicio</a>
        <a href="./clientes.php" class="pagina">Clientes</a>
        <a href="./productos.php">Productos</a>
        <a href="">Proveedores</a>
    </nav>

    <h2>Productos</h2>

    <main>

        <section class="formulario">
            <form id="formulario" method="post"  name="form" action="./php/productos/create_clientes.php">
                <input type="text" placeholder="Referencia" name="referencia">
                <input type="text" placeholder="Cantidad" name="cantidad"> 
                <input type="text" placeholder="Valor" name="valor" >   
                <input type="text" placeholder="Nombre" name="nombre" >     
                <input type="submit" value="Agregar" class="boton" name="add">
            </form>
        </section>

        <section class="tabla">
            <table class="prueba">
                <tr >
                    <th>Referencia</th>
                    <th>Cantidd</th>    
                    <th>Valor</th>
                    <th>Nombre</th>
                    <th>acciones</th>
                </tr>
                <tbody>
                    <?php 
                        include './php/dataBaseConnect.php';
                        $read = "SELECT * FROM productos";
                        $resultado = mysqli_query($connection,$read);
                        while ($row = mysqli_fetch_array($resultado)) {
                            ?>
                        
                    
                    <tr>
                        <td><?php echo $row['referencia']?></td>
                        <td><?php echo $row['cantidad']?></td> 
                        <td><?php echo $row['valor']?></td>
                        <td><?php echo $row['nombre']?></td>
                        <td> 
                        <a href="./php/productos/edit_productos.php?id=<?php echo $row['id'] ?>"><img src="./img/editar.png" alt="" class="editar"></a>

                        <a href="./php/productos/delete_productos.php?id=<?php echo $row['id'] ?>"><img src="./img/eliminar.png" class="quitar"></img></a></td>
                        
                    </tr>
                    <?php } ?>
                    </tbody>
            </table>
        </section>


    </main>
</body>