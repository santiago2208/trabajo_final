<?php include 'header.php' ?>
    <nav>
        <a href="./index.php">Inicio</a>
        <a href="./clientes.php" class="pagina">Clientes</a>
        <a href="./productos.php">Productos</a>
        <a href="./proveedores.php">Proveedores</a>
    </nav>

    <h2>Clientes</h2>

    <main>

        <section class="formulario">
            <form id="formulario" method="post"  name="form" action="./php/clientes/create_clientes.php">
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
                    <th>acciones</th>
                </tr>
                <tbody>
                    <?php 
                        include './php/dataBaseConnect.php';
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
                        <a href="./php/clientes/edit_clientes.php?id=<?php echo $row['id'] ?>"><img src="./img/editar.png" alt="" class="editar"></a>

                        <a href="./php/clientes/delete_clientes.php?id=<?php echo $row['id'] ?>"><img src="./img/eliminar.png" class="quitar"></img></a></td>
                        
                    </tr>
                    <?php } ?>
                    </tbody>
            </table>
        </section>


    </main>
</body>