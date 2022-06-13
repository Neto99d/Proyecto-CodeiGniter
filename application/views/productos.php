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
    .col-sm-5 {
        margin-top: 23px;
    }
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
                            <a href='<?php echo base_url();?>index.php/carrito' data-bs-toggle='tooltip'
                                data-bs-placement='bottom' title='Mi carrito'><svg xmlns='http://www.w3.org/2000/svg'
                                    width='24' height='24' fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
                                    <path
                                        d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                                </svg></a>
                            <!--Iniciar sesión<-->
                            <a href='<?php echo base_url();?>index.php/login' data-bs-toggle='tooltip'
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
                        <button class='navbar-toggler' type='button' data-bs-toggle='collapse'
                            data-bs-target='#navbarTogglerDemo02' aria-controls='navbarTogglerDemo02'
                            aria-expanded='false' aria-label='Toggle navigation'>
                            <span class='navbar-toggler-icon'></span>
                        </button>
                        <div class='collapse navbar-collapse' id='navbarTogglerDemo02'>
                            <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
                                <li class='nav-item'>
                                    <a href="<?php echo base_url('index.php');?>"
                                        class='btn btn-outline-success me-2'>Inicio</a>
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
                                        <li><a class='dropdown-item' href='<?php echo base_url();?>index.php/login'><svg
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
                                <!-- <li class = 'nav-item'>
<button class = 'btn btn-outline-success me-2' type = 'button'>Administración</button>
</li><-->
                                <li class='nav-item'>
                                    <a href='' class='btn btn-outline-success me-2' data-bs-toggle='tooltip'
                                        data-bs-placement='bottom'
                                        title='Un análisis de mercado para usted, lo que facilita la búsqueda de mejores productos y precios.'>Recomendaciones</a>
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
    <section>
        <div class='container-fluid-full'>
            <img src="<?php echo base_url('/assets/images/mensajeBeta.jpg');?>" class="rounded d-block w-100"
                width="1200" height="200">
        </div>

        <div class="container-fluid">
            <div class="row">
                <!--CATEGORIAS<-->
                <div class="col-md-3">
                    <div class='left-sidebar'>
                        <div class='container-fluid'>
                            <div class="container-fluid align-center">
                                <br>
                                <h4>Categorías</h4>
                            </div>
                            <div class='card' style='width: 16rem;'>
                                <div class='accordion accordion-flush' id='accordionFlushExample'>
                                    <div class='accordion-item'>
                                        <h2 class='accordion-header' id='flush-headingOne'>
                                            <button class='accordion-button collapsed' type='button'
                                                data-bs-toggle='collapse' data-bs-target='#flush-collapseOne'
                                                aria-expanded='false' aria-controls='flush-collapseOne'>
                                                Alimentos
                                            </button>
                                        </h2>
                                        <div id='flush-collapseOne' class='accordion-collapse collapse'
                                            aria-labelledby='flush-headingOne' data-bs-parent='#accordionFlushExample'>
                                            <div class='accordion-body'>
                                                <div class="bd-example">
                                                    <div class="btn-group-vertical" role="group"
                                                        aria-label="Vertical button group">
                                                        <button type="button" class="btn btn-primary">Frutas</button>
                                                        <button type="button" class="btn btn-primary">Vegetales</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Accordion Item #2
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is
                                                intended to
                                                demonstrate the <code>.accordion-flush</code> class. This is the second
                                                item's
                                                accordion body. Let's imagine this being filled with some actual
                                                content.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                Accordion Item #3
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                            aria-labelledby="flush-headingThree"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">Placeholder content for this accordion, which is
                                                intended to
                                                demonstrate the <code>.accordion-flush</code> class. This is the third
                                                item's
                                                accordion body. Nothing more exciting happening here in terms of
                                                content,
                                                but just
                                                filling up the space to make it look, at least at first glance, a bit
                                                more
                                                representative of how this would look in a real-world application.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--PRODUCTOS<-->
                <div class="col-sm-5 offset-sm-2 col-md-9 offset-md-0">
                    <div class='features_items'>
                        <h4 class="title text-center">Productos</h4>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a short card.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural
                                            lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card h-100">
                                    <img src="..." class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural
                                            lead-in to additional content. This content is a little bit longer.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
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