    <?php include 'header.php' ?>
    <nav>
        <a href="./index.php">Inicio</a>
        <a href="./clientes.php">Clientes</a>
        <a href="./productos.php">Productos</a>
        <a href="./proveedores.php" class="pagina">Proveedores</a>
    </nav>

    <h2>Proveedores</h2>

    <main>

        <section class="formulario">
            <form id="formulario" method="post"  name="form" action="./php/proveedores/create_proveedores.php" id="formulario">
                <p id="nombre_alert"></p>    
                <input type="text" placeholder="Nombre" name="nombre_p" id="nombre" >

                <p id="direccion_alert"></p>
                <input type="text" placeholder="Direccion" name="direccion_p" id="direccion" > 

                <p id="telefono_alert"></p>
                <input type="text" placeholder="Telefono" name="telefono_p" id="telefono" >   

                <p id="nit_alert"></p>
                <input type="text" placeholder="Nit" name="nit_p" id="nit" > 

                <p id="email_alert"></p>
                <input type="email" placeholder="Correo" name="correo_p" id="correo" >     

                <p id="producto_alert"></p>
                <input type="text" placeholder="Producto" name="producto_p" id="producto" > 

                <p id="descripcion_alert"></p>
                <input type="textarea" placeholder="Descripcion" name="descripcion_p" id="descripcion" > 

                <input type="submit" value="Agregar" class="boton" name="add">
            </form>
        </section>

        <section class="tabla">
            <table class="prueba">
                <tr >
                    <th>Nombre</th>
                    <th>Direccion</th>    
                    <th>Telefono</th>
                    <th>Nit</th>
                    <th>Correo</th>
                    <th>Producto</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
                <tbody>
                    <?php 
                        include './php/dataBaseConnect.php';
                        $read = "SELECT * FROM proveedores";
                        $resultado = mysqli_query($connection,$read);
                        while ($row = mysqli_fetch_array($resultado)) {
                            ?>
                        

                    <tr>
                        <td><?php echo $row['nombre_p']?></td>
                        <td><?php echo $row['direccion_p']?></td> 
                        <td><?php echo $row['telefono_p']?></td>
                        <td><?php echo $row['nit_p']?></td>
                        <td><?php echo $row['correo_p']?></td>
                        <td><?php echo $row['producto_p']?></td>
                        <td><?php echo $row['descripcion_p']?></td>
                        <td> 
                        <a href="./php/proveedores/edit_proveedores.php?id=<?php echo $row['id'] ?>"><img src="./img/editar.png" alt="" class="editar"></a>

                        <a href="./php/proveedores/delete_proveedores.php?id=<?php echo $row['id'] ?>"><img src="./img/eliminar.png" class="quitar"></img></a></td>
                        
                    </tr>
                    <?php } ?>
                    </tbody>
            </table>
        </section>


    </main>

    <script src="./js/proveedores.js"></script>
</body>