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
   

</body>

</html>