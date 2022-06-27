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
    #prod {
        margin-top: 23px;
    }
    </style>
</head>

<body>
    <section>
        <div class='container-fluid-full'>
            <img src="<?php echo base_url('/assets/images/mensajeBeta.jpg');?>" class='rounded d-block w-100'
                width='1200' height='200'>
        </div>

        <div class='container-fluid'>
            <div class='row'>
                <!--CATEGORIAS<-->
                <div class='col-md-3'>
                    <div class='left-sidebar'>
                        <div class='container-fluid'>
                            <div class='container-fluid align-center'>
                                <br>
                                <h4>Categorías</h4>
                            </div>
                            <div class='card' style='width: 16rem;'>
                                <div class='accordion accordion-flush' id='accordionFlushExample'>
                                    <div class='accordion-item'>
                                        <?php foreach($catProd as $row): ?>
                                        <h2 class='accordion-header' id='flush-headingOne<?php echo $row->id ?>'>
                                            <button class='accordion-button collapsed' type='button'
                                                data-bs-toggle='collapse'
                                                data-bs-target='#flush-collapseOne<?php echo $row->id ?>'
                                                aria-expanded='false' aria-controls='flush-collapseOne'>
                                                <?php echo $row->nombre?> </button>
                                        </h2>
                                        <div id='flush-collapseOne<?php echo $row->id ?>'
                                            class='accordion-collapse collapse'
                                            aria-labelledby='flush-headingOne<?php echo $row->id ?>'
                                            data-bs-parent='#accordionFlushExample'>
                                            <div class='accordion-body'>
                                                <div class='bd-example'>
                                                    <div class='btn-group-vertical' role='group'
                                                        aria-label='Vertical button group'>
                                                        <?php foreach($row->productos as $r): ?>

                                                        <button type='button'
                                                            class='btn btn-primary'><?php echo $r->nombrep ?></button>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div id="prod" class="col-sm-5 offset-sm-2 col-md-9 offset-md-0">
                    <div class='features_items'>
                        <h4 class="title text-center">Productos</h4>

                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <?php foreach($productos as $row): ?>
                            <div class="col">
                                <div class='card h-100'>
                                    <img src='<?= base_url('assets\images\imagesProd/').$row->imagenProd?>'
                                        class='card-img-top rounded' width='100' height='200'>
                                    <div class='card-body'>
                                        <h5 class='card-title'><?php echo $row->nombre ?></h5>
                                        <p class='card-text'><?php echo $row->descripcion ?></p>
                                        <?php if ($row->disponible != 0 ):?>
                                        <a href="<?= base_url('carrito/AddCart_PageProd/').$row->id?>"
                                            class="btn btn-primary">Agregar
                                            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20'
                                                fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
                                                <path
                                                    d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                                            </svg>
                                        </a>
                                        <input class="rounded" type="number" id="cantidad" min="0" max="20"
                                            placeholder="Cant." onclick="updateCant(this, '<?php echo $row->id ?>')">
                                        <?php else: ?>
                                        <a href="<?= base_url('carrito/AddCart_PageProd/').$row->id?>"
                                            class="btn btn-primary disabled">Agregar
                                            <svg xmlns='http://www.w3.org/2000/svg' width='20' height='20'
                                                fill='currentColor' class='bi bi-cart' viewBox='0 0 16 16'>
                                                <path
                                                    d='M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z' />
                                            </svg>
                                        </a>
                                        <input class="rounded" disabled type="number" id="cantidad" min="0" max="20"
                                            placeholder="Cant." onclick="updateCant(this, '<?php echo $row->id ?>')">
                                        <?php endif;?>

                                        <br>
                                        <br>
                                        <small>Disponible: <?php echo $row->disponible ?></small>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <br>
                    </div>
                    <br>
                    <!--LA PAGINACION NO FUNCIONA<-->
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
    <script>
    // Una funcion que se encarga de obtener los valores del input y por metodo get llamar a la direccion del metodo que actualiza los datos y le pasa los parametros
    function updateCant(obj, id) {

        $.get("<?php echo base_url('carrito/cantProd/'); ?>", {
            id: id,
            cant: obj.value
        });
    }
    </script>
</body>

</html>