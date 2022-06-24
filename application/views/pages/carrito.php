<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <script src="<?= base_url().'assets/Jquery/jquery-3.6.0.min.js'?>"></script>
    <script src="<?= base_url().'assets/js/bootstrap.bundle.min.js' ?>"></script>
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
            <h3>Mis Productos <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor'
                    class='bi bi-cart' viewBox='0 0 16 16'>
                    <path
                        d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                </svg></h3>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered justify-content-center">
                    <thead>
                        <tr>
                            <th width="5%" scope="col">No.</th>
                            <th width="25%" scope="col">Producto</th>
                            <th width="10%" scope="col">Precio</th>
                            <th width="22%" scope="col">Cantidad</th>
                            <th width="10%" scope="col">Total</th>
                            <th width="10%" scope="col">Eliminar</th>

                        </tr>
                    </thead>
                    <tbody>
                        <!--EJEMPLO<-->
                        <tr>
                            <th scope="row">1</th>
                            <td>Cosas</td>
                            <td>60</td>
                            <td>
                                <form>
                                    <input class="input-small" type="number" value="1">

                                    <a class="btn btn-outline-success" href="">Actualizar</a>
                            </td>
                            </form>
                            </td>
                            <td>@mdo</td>
                            <td><a class="btn btn-outline-danger" href="">Eliminar</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

    </section>
</body>

</html>