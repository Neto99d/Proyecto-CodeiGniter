<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href="<?= base_url().'assets/DataTables/datatables.min.css'?>">
    <link rel='stylesheet' href="<?= base_url().'assets/DataTables/DataTables-1.12.1/css/jquery.dataTables.min.css'?>">
    <link rel='stylesheet' href="<?= base_url().'assets/css/bootstrap.min.css'?>">
    <title>Interfaz Beta</title>
    <style>

    </style>
</head>

<body>

    <section>
        <!--Tabla de Carrito<-->
        <div class="container-fluid">
            <br>
            <h3>Productos Almacenados</h3>
            <br>
            <button class="btn btn-outline-success"
                onclick="location.href='<?= base_url('manageProd')?>'">Insertar</button>
            <br>
            <br>
            <div class="table-responsive">
                <table id="example" class="table  table-hover  table-bordered justify-content-center "
                    style="width:100%">
                    <thead>
                        <tr>
                            <th width="5%" scope="col">No.</th>
                            <th width="25%" scope="col">Producto</th>
                            <th width="10%" scope="col">Precio $</th>
                            <th width="22%" scope="col">Descripcion</th>
                            <th width="10%" scope="col">Cantidad</th>
                            <th width="10%" scope="col">Pesaje</th>
                            <th width="10%" scope="col">Fecha</th>
                            <th width="10%" scope="col">Imagen</th>
							<th width="15%" scope="col">Categorías</th>
                            <th width="10%" scope="col">Operaciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $temp = 1 ?>
                        <?php if (count($productos) <= 0):?>

                        <h4>No hay productos</h4>
                        <?php endif; ?>
                        <!--EJEMPLO<-->
                        <?php foreach ($productos as $items): ?>
                        <tr>

                            <th scope="row"><?php echo $temp++ ?></th>
                            <form action="<?php echo base_url('productos/updateProd/').$items->id;?>" method="POST">
                                <td>

                                    <input name="nombre" type="text" value="<?php echo $items->nombre; ?>"
                                        maxlength="30">
                                </td>
                                <td>
                                    <input name="precio" type="text" value="<?php echo $items->precio; ?>">
                                </td>
                                <td>
                                    <textarea rows="2" cols="15" name="descripcion" type="text"
                                        maxlength="100"><?php echo $items->descripcion; ?></textarea>
                                </td>
                                <td>
                                    <input name="disponible" type="text" value="<?php echo $items->disponible; ?>">
                                </td>
                                <td>
                                    <input name="peso" type="text" value="<?php echo $items->peso; ?>" maxlength="15">
                                </td>
                                <td>
                                    <input name="fecha" type="date" value="<?php echo $items->fecha; ?>" maxlength="4">
                                </td>
                                </td>
                                <td>
                                    <input name="imagenProd" type="text" value="<?php echo $items->imagenProd; ?>"
                                        maxlength="50">
                                </td>
                                </td>
                                </td>
                                <td>
                                    <input class='form-control' type="text" name="categoria_id" id="categoria_id" maxlength="45"
                                        value="<?php echo $items->categoria_id;?>">

                                </td>
                                </td>
                                <td>
                                    <button class="btn btn-outline-success" type="submit">Actualizar</button>
                            </form>
                            <button class="btn btn-outline-danger"
                                onclick="location.href='<?= base_url('productos/deleteProd/').$items->id?>'">Eliminar</button>
                            </td>

                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>

                        <tr>
                            <th width="5%" scope="col">No.</th>
                            <th width="25%" scope="col">Producto</th>
                            <th width="10%" scope="col">Precio</th>
                            <th width="22%" scope="col">Descripcion</th>
                            <th width="10%" scope="col">Cantidad</th>
                            <th width="10%" scope="col">Pesaje</th>
                            <th width="10%" scope="col">Fecha</th>
                            <th width="10%" scope="col">Operaciones</th>

                        </tr>

                    </tfoot>
                </table>
                <br>
            </div>

        </div>
    </section>
    <script src="<?= base_url().'assets/Jquery/jquery-3.6.0.min.js'?>"></script>
    <script src="<?= base_url().'assets/js/bootstrap.min.js' ?>"></script>
    <script src="<?= base_url().'assets/DataTables/datatables.min.js' ?>"></script>
    <script src="<?= base_url().'assets/DataTables/DataTables-1.12.1/js/jquery.dataTables.min.js' ?>"></script>
    <script>
    /*$(document).ready(function() {
        $('#example').DataTable();

    });*/
    </script>
</body>

</html>
