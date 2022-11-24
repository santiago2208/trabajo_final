<?php include 'header.php' ?>
    <nav>
        <a href="./index.php">Inicio</a>
        <a href="./clientes.php">Clientes</a>
        <a href="./productos.php" class="pagina">Productos</a>
        <a href="./proveedores.php">Proveedores</a>
    </nav>

    <h2>Productos</h2>

    <main>

        <section class="formulario">
            <form id="formulario" method="post"  name="form" action="./php/productos/create_productos.php" id="formulario">
                
                <p id="referencia_alert"></p>
                <input type="text" id="referencia" placeholder="Referencia" name="referencia" required>
                
                <p id="cantidad_alert"></p>
                <input type="text" id="cantidad" placeholder="Cantidad" name="cantidad" required> 
                
                <p id="valor_alert"></p>
                <input type="text" id="valor" placeholder="Valor" name="valor" required>   
                
                <p id="nombre_alert"></p>
                <input type="text" id="nombre" placeholder="Nombre" name="nombre" required>     
                <input type="submit" value="Agregar" class="boton" name="add" required>
            </form>
        </section>

        <section class="tabla">
            <table class="prueba">
                <tr >
                    <th>Referencia</th>
                    <th>Cantidad</th>    
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

    <script src="./js/productos.js"></script>
</body>