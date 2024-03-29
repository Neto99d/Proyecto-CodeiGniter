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
    div.titulo {
        text-align: center;
    }
    </style>
</head>

<body>
    <!-- CABECERA <-->
    <header>
        <div class='container-fluid-full'>
            <nav class='navbar bg-light'>
                <div class='container-fluid'>
                    <!--Mi CUENTA<-->
                    <?php if ($this->session->tempdata('logged_in')):?>
                    <h4 id="userProfile">
                        <small><?php echo $this->session->tempdata('nombre'). " ";?><?php echo $this->session->tempdata('apellidos'). " ";?><svg
                                xmlns='http://www.w3.org/2000/svg' width='21' height='21' fill='currentColor'
                                class='bi bi-person-circle' viewBox='0 0 16 16'>
                                <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
                                <path fill-rule='evenodd'
                                    d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
                            </svg></small>
                    </h4>

                    <?php 
                                endif;?>
                    <div class="justify-content-center">
                        <h4 id="tituloWeb">El Trevol Shop</h4>
                    </div>

                    <div class='align-content-end'>

                        <ul class='nav-justified '>
                            <?php if ($this->session->tempdata('logged_in') && $this->session->tempdata('isAdmin') === '1'):?>
                            <small>ADMINISTRADOR  </small>
                            <?php 
                             endif;?>
                            <!--Mi Carrito<-->
                            <?php if (count($this->cart->contents()) <= 0):?>

                            <?php elseif (count($this->cart->contents()) > 0):?>

                            <a href='<?php echo base_url();?>carrito' data-bs-toggle='tooltip'
                                data-bs-placement='bottom' title='Mi carrito'> <svg xmlns='http://www.w3.org/2000/svg'
                                    width='24' height='24' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
                                    <path
                                        d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                                </svg></a>
                            <a>(<?php echo count($this->cart->contents());?>)</a>
                            <?php 
                                endif;?>

                            <!--Iniciar sesión<-->
                            <?php if (!$this->session->tempdata('logged_in')):?>
                            <a href='<?php echo base_url();?>login' data-bs-toggle='tooltip' data-bs-placement='bottom'
                                title='Iniciar sesión'> <svg xmlns='http://www.w3.org/2000/svg' width='25' height='25'
                                    fill='currentColor' class='bi bi-box-arrow-in-right' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd'
                                        d='M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z' />
                                    <path fill-rule='evenodd'
                                        d='M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z' />
                                </svg></a>
                            <?php 
                                endif;?>
                            <!--Cerrar sesión<-->
                            <?php if ($this->session->tempdata('logged_in')):?>
                            <a aria-disabled="" href='<?php echo base_url('user/logout');?>' data-bs-toggle='tooltip'
                                data-bs-placement='bottom' title='Cerrar sesión'> <svg xmlns='http://www.w3.org/2000/svg'
                                    width='25' height='25' fill='currentColor' class='bi bi-box-arrow-right'
                                    viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd'
                                        d='M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z' />
                                    <path fill-rule='evenodd'
                                        d='M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z' />
                                </svg></a>
                            <?php 
                                endif;?>
                        </ul>

                    </div>
                </div>
            </nav>
            <div class='header-bottom'>
                <nav class='navbar navbar-expand-lg bg-light'>
                    <div class='container-fluid'>
                        <button class='navbar-toggler' type='button' data-bs-toggle='collapse'
                            data-bs-target='#navbarTogglerDemo02' aria-controls='navbarTogglerDemo02'
                            aria-expanded='false' aria-label='Toggle navigation'>
                            <span class='navbar-toggler-icon'></span>
                        </button>
                        <div class='collapse navbar-collapse' id='navbarTogglerDemo02'>
                            <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                                <li class='nav-item'>
                                    <a href='<?php echo base_url();?>' class='btn btn-outline-success me-2'>Inicio</a>
                                </li>
                                <li class='nav-item dropdown'>
                                    <button class='btn btn-outline-success me-2 dropdown-toggle' id='navbarDropdown'
                                        type='button' data-bs-toggle='dropdown' aria-expanded='false'>Tienda</button>
                                    <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                        <li><a class='dropdown-item' href="<?php echo base_url('productos');?>"><svg
                                                    xmlns='http://www.w3.org/2000/svg' width='17' height='17'
                                                    fill='currentColor' class='bi bi-bag-fill' viewBox='0 0 16 16'>
                                                    <path
                                                        d='M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z' />
                                                </svg> Productos</a></li>
                                        <li><a class='dropdown-item' href='<?php echo base_url('carrito');?>'><svg
                                                    xmlns='http://www.w3.org/2000/svg' width='17' height='17'
                                                    fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
                                                    <path
                                                        d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                                                </svg> Carrito</a>
                                        </li>
                                        <li>
                                            <hr class='dropdown-divider'>
                                        </li>
                                        <li><a class='dropdown-item' href='<?php echo base_url();?>login'><svg
                                                    xmlns='http://www.w3.org/2000/svg' width='17' height='17'
                                                    fill='currentColor' class='bi bi-box-arrow-in-right'
                                                    viewBox='0 0 16 16'>
                                                    <path fill-rule='evenodd'
                                                        d='M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z' />
                                                    <path fill-rule='evenodd'
                                                        d='M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z' />
                                                </svg> Iniciar sesión/Registrarse</a></li>
                                    </ul>
                                </li>
                                <li class='nav-item'>
                                    <!--PESTAÑA ADMINISTRACION<-->
                                    <?php if ($this->session->tempdata('logged_in') && $this->session->tempdata('isAdmin') === '1'):?>

                                    <button class='btn btn-outline-success me-2' type='button'
                                        onclick="location.href='<?= base_url('administracion')?>'">Administración</button>

                                    <?php 
                                endif;?>
                                </li>
                                <li class='nav-item'>
                                    <a href="<?php echo base_url('contacto');?>"
                                        class='btn btn-outline-success me-2'>Contacto</a>
                                </li>
                            </ul>
                            <form class='d-flex' role='search'>
                                <input class='form-control me-2' type='search' placeholder='Buscar producto'
                                    aria-label='Search'>
                                <button class='btn btn-outline-success' type='submit'>Buscar</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>

        </div>

    </header>

</body>

</html>