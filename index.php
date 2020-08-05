<?php
include_once '/bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT id, nombre, pais, edad FROM personas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">

    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">
    <link rel="stylesheet" href="datatables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">

</head>
<body>
    <header>
        <h3 class="text-center text-light">Tutorial</h3>
        <h4 class="text-center text-light">Crud con <span class="badge badge-danger">DATATABLES</span></h4>
    </header>
    
    <!--contenedor con el boton Nuevo-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <button id="btnNuevo" type="button" class="btn btn-success">Nuevo</button>
            </div>
        </div>
    </div>
    <!--fin del contenedor del boton nuevo-->

    <!--contenedor con la tabla personas-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" 
                    style="width: 100%;">
                        <thead class="text-center">
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Pais</th>
                                <th>Edad</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data as $dat) {
                                ?>
                                <tr>
                                    <td><?php echo $dat['id'] ?></td>
                                    <td><?php echo $dat['nombre'] ?></td>
                                    <td><?php echo $dat['pais'] ?></td>
                                    <td><?php echo $dat['edad'] ?></td>
                                    <td></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--fin del contenedor de la tabla personas-->

    <!--modal para el crud-->
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                        <form id="formPersonas">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="nombre" class="col-form-label">Nombre:</label>
                                    <input type="text" id="nombre" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="pais" class="col-form-label">Pais:</label>
                                    <input type="text" id="pais" class="form-control">
                                    </div>
                                <div class="form-group">
                                    <label for="edad" class="col-form-label">Edad:</label>
                                    <input type="number" id="edad" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                            </div>
                        </form>
            </div>
        </div>
    </div>
    <!--fin del modal para el crud-->



    <!--jQuery, popper.js, Bootstrap Js -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="poppers/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!--DATATABLES JS  -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>
    <script type="text/javascript" src="main.js"></script>

</body>
</html>