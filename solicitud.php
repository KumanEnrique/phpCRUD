<?php include 'header.php'; ?>

    <div class="container">

        <div class="row d-flex justify-content-center">
            <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#modalInsertar">Insertar </button>
        </div>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover table-bordered" id="tabla">
                    <thead>
                        <th>Opción</th>
                        <th>Solicitud</th>
                        <th>Equipo</th>
                        <th>Departamento</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                    </thead>
                    <tbody>
                    <?php 
                        include 'config.php';
                        $query="SELECT * FROM solicitud";
                        mysqli_set_charset($conexion, "utf8");
                        if ($resultado=mysqli_query($conexion, $query))
                        {}
                        else {
                            echo "Error al ejecutar el script<br>".mysqli_error($conexion)."<br>";
                            echo "El script utilizado fue: $query<br>";
                        }
                        $resultado=$conexion->query($query);
                        while($col=$resultado->fetch_assoc()){
                    ?>
    			<tr>
                    <td><button class="btn btn-warning " data-toggle="modal" data-target="#modalEditar" >editar</button>
                        <a href="CRUD/eliminar_servicio.php?id=<?php echo $col['id']; ?>"><button class="btn btn-danger">Eliminar</button></a></td>
    				<td><?php echo $col['solicitud']; ?></td>
    				<td><?php echo $col['equipo']; ?></td>
    				<td><?php echo $col['departamento']; ?></td>
    				<td><?php echo $col['fecha']; ?></td>
                    <td><?php echo $col['estado']; ?></td>
                    <td class="d-none" name="id"><?php echo $col['id'] ?></td>
                </tr>	
                
                <!-- Modal -->
                        <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">

                                        <form action="./CRUD/editar_solicitud.php" method="post">
                                            <div class="form-group">
                                                <label for="id">ID</label>
                                                <input readonly="readonly" type="number" name="id" id="id">
                                            </div>
                                            <div class="form-group">
                                                <label for="solicitud">Solicitd</label>
                                                <input type="number" name="solicitud" id="solicitud">
                                            </div>
                                            <div class="form-group">
                                                <label for="departamento">Departamento</label>
                                                <input type="text" name="departamento" id="departamento">
                                            </div>
                                            <div class="form-group">
                                                <label for="estado">Estado</label>
                                                <input type="text" name="estado" id="estado">
                                            </div>
                                            <div class="form-group">
                                                <label for="equipo">Equipo</label>
                                                <input type="text" name="equipo" id="equipo">
                                            </div>
                                            <div class="form-group">
                                                <label for="fecha">Fecha</label>
                                                <input type="date" class="form-control" name="fecha" id="fecha">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-lg btn-block">guardar</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin Modal -->
                
    				<?php 
    				}?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <form action="./CRUD/insertar_solicitud.php" method="post">
                        <div class="form-group">
                            <label for="solicitud">Solicitd</label>
                            <input type="number" name="solicitud" >
                        </div>
                        <div class="form-group">
                            <label for="departamento">Departamento</label>
                            <input type="text" name="departamento" >
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" name="estado" >
                        </div>
                        <div class="form-group">
                            <label for="equipo">Equipo</label>
                            <input type="text" name="equipo" >
                        </div>
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="date" class="form-control" name="fecha" >
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block">guardar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- fin Modal -->
    
    <script src="js/editar_solicitud.js"></script>

<?php include 'footer.php'; ?>