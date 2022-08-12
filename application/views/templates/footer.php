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

</head>

<body>
    <!-- PIE DE PAGINA <-->
    <footer>
        <div class='container'>
            <footer class='py-3 my-4'>
                <ul class='nav justify-content-center border-bottom pb-3 mb-3'>
                    <li class='nav-item'><a href='<?php echo base_url('');?>'
                            class='nav-link px-2 text-muted'>Inicio</a></li>
                    <li class='nav-item'><a href='<?php echo base_url('productos');?>'
                            class='nav-link px-2 text-muted'>Productos</a></li>
                    <li class='nav-item'><a href='<?php echo base_url('contacto');?>'
                            class='nav-link px-2 text-muted'>Contacto</a></li>
                </ul>
                <p class='text-center text-muted'>&copy;
                    2022 Interfaz Beta</p>
            </footer>
        </div>
    </footer>

</body>

</html>