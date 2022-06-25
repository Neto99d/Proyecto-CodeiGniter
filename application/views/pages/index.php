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
    @media (max-width: 600px) {
        .carousel-item {
            height: 280px;
        }
    }
    </style>
</head>

<body>
    <!-- CONTENIDO <-->
    <section>
        <!-- CARRUSEL DE IMAGENES <-->
        <div id='carouselExampleDark' class='carousel carousel-dark slide' data-bs-ride='carousel'>
            <div class='carousel-indicators'>
                <button type='button' data-bs-target='#carouselExampleDark' data-bs-slide-to='0' class='active'
                    aria-current='true' aria-label='Slide 1'></button>
                <button type='button' data-bs-target='#carouselExampleDark' data-bs-slide-to='1'
                    aria-label='Slide 2'></button>
                <button type='button' data-bs-target='#carouselExampleDark' data-bs-slide-to='2'
                    aria-label='Slide 3'></button>
            </div>
            <div class='carousel-inner'>
                <div class='carousel-item active' data-bs-interval='5000'>
                    <img src='assets/images/R.jfif' class='rounded d-block w-100' alt='First slide' width='1200'
                        height='470'>
                    <div class='carousel-caption d-none d-md-block'>
                        

                    </div>
                </div>
                <div class='carousel-item' data-bs-interval='5000'>
                    <img src='assets/images/R (1).jfif' class='rounded d-block w-100' alt='Second slide' width='1200'
                        height='470'>
                    <div class='carousel-caption d-none d-md-block'>
                        <h3>Variedad de productos.</h3>
                    </div>
                </div>
                <div class='carousel-item' data-bs-interval='5000'>
                    <img src='assets/images/R (3).jfif' class='rounded d-block w-100' alt='Third slide' width='1200'
                        height='470'>
                    <div class='carousel-caption d-none d-md-block'>
                       

                    </div>
                </div>
            </div>
            <button class='carousel-control-prev' type='button' data-bs-target='#carouselExampleDark'
                data-bs-slide='prev'>
                <span class='carousel-control-prev-icon' aria-hidden='true'></span>
                <span class='visually-hidden'>Previous</span>
            </button>
            <button class='carousel-control-next' type='button' data-bs-target='#carouselExampleDark'
                data-bs-slide='next'>
                <span class='carousel-control-next-icon' aria-hidden='true'></span>
                <span class='visually-hidden'>Next</span>
            </button>
        </div>
        <!-- LO MAS VENDIDO <-->
        <div class='container-fluid'>
            <br>
            <br>
            <h3> Lo más vendido</h3>
            <br>
            <div class='container-fluid'>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach($productos as $row): ?>
                    <div class="col">
                        <div class='card h-100'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'><?php echo $row->nombre ?></h5>
                                <p class='card-text'><?php echo $row->descripcion ?></p>
                                <a href="#" class="btn btn-primary">Agregar <svg xmlns='http://www.w3.org/2000/svg'
                                        width='20' height='20' fill='currentColor' class='bi bi-cart'
                                        viewBox='0 0 16 16'>
                                        <path
                                            d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
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
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach($productos as $row): ?>
                    <div class="col">
                        <div class='card h-100'>
                            <img src='...' class='card-img-top' alt='...'>
                            <div class='card-body'>
                                <h5 class='card-title'><?php echo $row->nombre ?></h5>
                                
                                <p class='card-text'><?php echo $row->descripcion?></p>
                                <a href="<?= base_url('carrito/AddCart/').$row->id?>" class="btn btn-primary">Agregar <svg xmlns='http://www.w3.org/2000/svg'
                                        width='20' height='20' fill='currentColor' class='bi bi-cart'
                                        viewBox='0 0 16 16'>
                                        <path
                                            d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                                    </svg></a>
                                    
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        </div>

    </section>

</body>

</html>