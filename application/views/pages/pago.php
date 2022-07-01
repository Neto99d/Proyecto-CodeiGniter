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
    #info {
        color: red;
    }
    </style>
</head>

<body>

    <section>
        <div id="contact-page" class="container">
            <div class="bg">
                <div class="row">
                    <div class="col-sm-12">
                        <br>
                        <br>
                        <h2 class="title text-center">Pago</h2>
                        <br>
                        <h5 id="info" class="title text-center"><small><?php echo $this->session->flashdata('mensaje');?></small></h5>
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <div class="contact-form">
                            <h2 class="title text-center">Ponga sus datos para ejecutar la compra <br> </h2>
                            <h6 class="title text-center"><small class="text-center">(Ya rellenamos algunos campos por
                                    usted con su información de registro)</small> </h6>

                            <br>
                            <div class='container justify-content-center border rounded-3' style='width: 26rem; '>
                                <form action="<?php echo base_url('carrito/vaciarCarrito');?>" id="main-contact-form"
                                    class="contact-form row" name="contact-form" method="post">
                                    <div class='text-center mb-3'>
                                        <div class="form-group ">
                                            <div class='form-check d-flex justify-content-center mb-4'>
                                                <input class='form-check-input me-2' type='checkbox' value=''
                                                    id='registerCheck' aria-describedby='registerCheckHelpText' />
                                                <label class='form-check-label' for='registerCheck'>
                                                    Entrega a domicilio ($100)
                                                </label>

                                            </div>

                                            <!--   <input class='form-check-input me-2' type='checkbox' value='' id='registerCheck'
                                            required aria-describedby='registerCheckHelpText' />
                                       
                                        <label class='form-check-label' for='registerCheck'>
                                            Pagar sus productos en efectivo
                                        </label> -->

                                        </div>
                                        <!-- Name input -->
                                        <br>
                                        <div class='form-outline mb-4'>
                                            <input type='text' name="nombre" id='nombre'
                                                class='form-control text-center' required maxlength="40"
                                                value="<?php echo $this->session->tempdata('nombre')?>" />
                                            <label class='form-label' for='nombre'>Nombre</label>
                                        </div>

                                        <div class='form-outline mb-4'>
                                            <input type='text' name="apellidos" id='apellidos'
                                                class='form-control text-center' required maxlength="30"
                                                value="<?php echo $this->session->tempdata('apellidos')?>" />
                                            <label class='form-label' for='apellidos'>Apellidos</label>
                                        </div>

                                        <!-- Email input -->
                                        <!-- <div class='form-outline mb-4'>
                                        <input type='email' name="email" id='email' class='form-control text-center'
                                            required maxlength="50"
                                            value="<?php echo $this->session->tempdata('correo')?>" />
                                        <label class='form-label' for='email'>Correo</label>
                                    </div>  -->

                                      <!--  <div class='form-outline mb-4'>
                                            <input type='tel' name="telefono" id='telefono'
                                                class='form-control text-center' maxlength="8" placeholder="Opcional" />
                                            <label class='form-label' for='telefono'>Teléfono</label>
                                        </div> -->
                                        <div class='form-outline mb-4'>
                                            <input type='text' name="ciudad" id='ciudad'
                                                class='form-control text-center' required maxlength="50" />
                                            <label class='form-label' for='ciudad'>Ciudad</label>
                                        </div>
                                        <div class='form-outline mb-4'>
                                            <input type='tel' name="codigoPostal" id='codigoPostal'
                                                class='form-control text-center' maxlength="5" required />
                                            <label class='form-label' for='codigoPostal'>Código Postal</label>
                                        </div>
                                        <div class='form-outline mb-4'>
                                            <input type='text' name="direccion" id='direccion'
                                                class='form-control text-center ' required maxlength="60"
                                                value="<?php echo $this->session->tempdata('direccion')?>" />
                                            <label class='form-label' for='direccion'>Dirección</label>
                                        </div>
                                        <!--
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-primary pull-right"
                                            onclick="location.href='<?= base_url('carrito/vaciarCarrito')?>', alert('Gracias, buen día, espere sus productos')">Enviar</button>
                                    </div> <-->
                                    </div>
                                    <br>
                                    <div class="text-center">

                                        <button type="submit" class="btn btn-primary pull-right" id="btnPagar">Pagar
                                            con Transfermóvil</button>
                                        <br>
                                        <br>
                                        <small>O puede antes de pagar</small>
                                        <br>
                                        <br>

                                    </div>
                                </form>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary pull-right" id="btnPagar"
                                        onclick="location.href='<?= base_url('productos')?>'">Seguir comprando</button>
                                        <br>
                                        <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="contact-info">
                            <h2 class="title text-center">Resumen de Compra</h2>
                            <br>
                            <address class="text-center">
                                <p>Cantidad de productos: <?php echo count($this->cart->contents());?></p>
                                <p>Productos</p>
                                <?php foreach ($cartItems as $i => $items): ?>
                                <p><?php echo $items['name']; ?> :(<?php echo $items['qty']; ?>): Coste:
                                    $<?php echo $items['price']; ?> </p>
                                <?php endforeach; ?>
                                <br>
                                <p>Importe total: $<?php echo $this->cart->format_number($this->cart->total()); ?></p>
                            </address>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>