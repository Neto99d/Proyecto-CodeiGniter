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
    <!-- CABECERA <-->
    <header>
        <div class='container-fluid-full'>
            <nav class='navbar bg-light'>
                <div class='container-fluid'>
                    <a class='navbar-brand' href='http://localhost/Proyecto-CodeiGniter/'>Interfaz Beta</a>
                    <div class='align-content-end'>

                        <ul class='nav-justified'>
                            <!--Mi CUENTA<-->
                            <a href='#' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Mi Cuenta'><svg
                                    xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='currentColor'
                                    class='bi bi-person-circle' viewBox='0 0 16 16'>
                                    <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z' />
                                    <path fill-rule='evenodd'
                                        d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z' />
                                </svg></a>
                            <!--Mi Carrito<-->
                            <a href="<?php echo base_url();?>index.php/carrito" data-bs-toggle='tooltip'
                                data-bs-placement='bottom' title='Mi carrito'><svg xmlns='http://www.w3.org/2000/svg'
                                    width='24' height='24' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
                                    <path
                                        d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                                </svg></a>
                            <!--Iniciar sesión<-->
                            <a href="<?php echo base_url();?>index.php/login" data-bs-toggle='tooltip'
                                data-bs-placement='bottom' title='Iniciar sesión'><svg
                                    xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor'
                                    class='bi bi-box-arrow-in-right' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd'
                                        d='M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z' />
                                    <path fill-rule='evenodd'
                                        d='M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z' />
                                </svg></a>
                            <!--Cerrar sesión<-->
                            <a href='' data-bs-toggle='tooltip' data-bs-placement='bottom' title='Cerrar sesión'><svg
                                    xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor'
                                    class='bi bi-box-arrow-right' viewBox='0 0 16 16'>
                                    <path fill-rule='evenodd'
                                        d='M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z' />
                                    <path fill-rule='evenodd'
                                        d='M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z' />
                                </svg></a>
                        </ul>

                    </div>
                </div>
            </nav>
            <div class='header-bottom'>
                <nav class='navbar navbar-expand-lg bg-light'>
                    <div class='container-fluid'>
                        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
                            <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                                <li class='nav-item'>
                                    <a href="" class='btn btn-outline-success me-2'>Inicio</a>
                                </li>
                                <li class='nav-item dropdown'>
                                    <button class='btn btn-outline-success me-2 dropdown-toggle' id='navbarDropdown'
                                        type='button' data-bs-toggle='dropdown' aria-expanded='false'>Tienda</button>
                                    <ul class='dropdown-menu' aria-labelledby='navbarDropdown'>
                                        <li><a class='dropdown-item'
                                                href="<?php echo base_url('index.php/productos');?>"><svg
                                                    xmlns='http://www.w3.org/2000/svg' width='17' height='17'
                                                    fill='currentColor' class='bi bi-bag-fill' viewBox='0 0 16 16'>
                                                    <path
                                                        d='M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z' />
                                                </svg> Productos</a></li>
                                        <li><a class='dropdown-item'
                                                href='<?php echo base_url('index.php/carrito');?>'><svg
                                                    xmlns='http://www.w3.org/2000/svg' width='17' height='17'
                                                    fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
                                                    <path
                                                        d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                                                </svg> Carrito</a></li>
                                        <li>
                                            <hr class='dropdown-divider'>
                                        </li>
                                        <li><a class='dropdown-item' href="<?php echo base_url();?>index.php/login"><svg
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
                                <!-- <li class='nav-item'>
                                    <button class='btn btn-outline-success me-2' type='button'>Administración</button>
                                </li><-->
                                <li class='nav-item'>
                                    <a href="" class='btn btn-outline-success me-2' data-bs-toggle='tooltip'
                                        data-bs-placement='bottom'
                                        title="Un análisis de mercado para usted, lo que facilita la búsqueda de mejores productos y precios.">Recomendaciones</a>
                                </li>
                                <li class='nav-item'>
                                    <a href="<?php echo base_url('index.php/contacto');?>"
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
    <!-- CONTENIDO <-->
    <section>
        <!-- CARRUSEL DE IMAGENES <-->
        <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="assets/images/R.jfif" class="rounded d-block w-100" alt="..." width="1200" height="470">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="assets/images/R (1).jfif" class="rounded d-block w-100" alt="..." width="1200"
                        height="470">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="assets/images/R (3).jfif" class="rounded d-block w-100" alt="..." width="1200"
                        height="470">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- LO MAS VENDIDO <-->
        <div class='container-fluid'>
            <br>
            <br>
            <h3> Lo más vendido</h3>
            <br>
            <div class='container-fluid'>
                <div class='row row-cols-1 row-cols-md-3 g-4'>
                    <div class='col'>
                        <div class='card'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Detalles</h5>
                                <p class='card-text'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque
                                    quaerat ut nesciunt recusandae delectus facere molestiae possimus.</p>
                                <a href=''>Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='card'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Detalles</h5>
                                <p class='card-text'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque
                                    quaerat ut nesciunt recusandae delectus facere molestiae possimus.</p>
                                <a href=''>Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='card'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Detalles</h5>
                                <p class='card-text'>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque
                                    quaerat ut nesciunt recusandae delectus facere molestiae possimus.</p>
                                <a href=''>Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='card'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Card title</h5>
                                <p class='card-text'>This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <a href=''>Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='card'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Card title</h5>
                                <p class='card-text'>This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <a href=''>Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='card'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Card title</h5>
                                <p class='card-text'>This is a longer card with supporting text below as a natural
                                    lead-in
                                    to additional content. This content is a little bit longer.</p>
                                <a href=''>Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ofertas del día <-->
        <div class='container-fluid'>
            <br>
            <br>
            <h3>Ofertas del día</h3>
            <br>
            <div class='container-fluid'>
                <div class='row row-cols-1 row-cols-md-3 g-4'>
                    <div class='col'>
                        <div class='card h-100'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Producto</h5>
                                <p class='card-text'>This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='card h-100'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Producto</h5>
                                <p class='card-text'>This is a short card.</p>
                            </div>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='card h-100'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Producto</h5>
                                <p class='card-text'>This is a longer card with supporting text below as a natural
                                    lead-in to additional content.</p>
                            </div>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='card h-100'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Producto</h5>
                                <p class='card-text'>This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                Producto
                            </div>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='card h-100'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Producto</h5>
                                <p class='card-text'>This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                Producto
                            </div>
                        </div>
                    </div>
                    <div class='col'>
                        <div class='card h-100'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'>Producto</h5>
                                <p class='card-text'>This is a longer card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                                Producto
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- PIE DE PAGINA <-->
    <footer>
        <div class='container'>
            <footer class='py-3 my-4'>
                <ul class='nav justify-content-center border-bottom pb-3 mb-3'>
                    <li class='nav-item'><a href='<?php echo base_url('index.php');?>'
                            class='nav-link px-2 text-muted'>Inicio</a></li>
                    <li class='nav-item'><a href='<?php echo base_url('index.php/productos');?>'
                            class='nav-link px-2 text-muted'>Productos</a></li>
                    <li class='nav-item'><a href='<?php echo base_url('index.php/contacto');?>'
                            class='nav-link px-2 text-muted'>Contacto</a></li>
                </ul>
                <p class='text-center text-muted'>&copy;
                    2022 Interfaz Beta</p>
            </footer>
        </div>
    </footer>

</body>

</html>