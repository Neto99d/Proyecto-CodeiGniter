<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <script src="<?= base_url().'assets/js/sweetalert2.min.js' ?>"></script>
    <script src="<?= base_url().'assets/Jquery/jquery-3.6.0.min.js'?>"></script>
    <script src="<?= base_url().'assets/js/bootstrap.bundle.min.js' ?>"></script>
    <link rel='stylesheet' href="<?= base_url().'assets/css/bootstrap.min.css'?>">
    <link rel='stylesheet' href="<?= base_url().'assets/css/sweetalert2.min.css'?>">
    <title>Interfaz Beta</title>
    <style>

    </style>
</head>

<body>
   
    <!-- CONTENIDO <-->
    <section class="pb-4 ">
        <section class="w-100 p-4 d-flex justify-content-center pb-4">
            <div class="bg-white justify-content-center border rounded-3">
                <div class="container justify-content-center" style="width: 26rem;">
                    <!-- Pills navs -->
                    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                        <li class="nav-item" role="presentation">
                            <br>
                            <a class="nav-link active" id="tab-login" data-mdb-toggle="pill"
                                href="<?php echo base_url();?>login" role="tab" aria-controls="pills-login"
                                aria-selected="true">Iniciar Sesión</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <br>
                            <a class="nav-link" id="tab-register" data-mdb-toggle="pill"
                                href="<?php echo base_url();?>register" role="tab" aria-controls="pills-register"
                                aria-selected="false">Registrarse</a>
                        </li>
                    </ul>
                    <!-- Pills navs -->

                    <!-- Pills content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                            aria-labelledby="tab-login">

                            <form action="<?php echo base_url('user/login');?>" method="POST">
                                <div class="text-center mb-3">
                                    <h5>Entre sus credenciales</h5>
                                </div>
                                <!-- Email input type="email" -->
                                <div class="form-outline mb-4">
                                    <input name="username" id="username" class="form-control" required />
                                    <label class="form-label" for="username">Correo o nombre de usuario</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="password" class="form-control"
                                        required />
                                    <label class="form-label" for="password">Contraseña</label>
                                </div>

                                <!-- 2 column grid layout 
                                <div class="row mb-4">
                                    <div class="col-md-6 d-flex justify-content-center">
                                         Checkbox -->
                                <!-- <div class="form-check mb-3 mb-md-0">
                                            <input class="form-check-input" type="checkbox" value="" id="loginCheck"
                                                checked />
                                            <label class="form-check-label" for="loginCheck"> Recordarme </label>
                                        </div>
                                    </div> -->

                                <!--   <div class="col-md-6 d-flex justify-content-center">
                                        Simple link 
                                        <a href="#!">Forgot password?</a>
                                    </div>-->
                        </div>

                        <!-- Submit button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block mb-4">Entrar</button>
                        </div>

                        <div class="text-center">
                            <p>¿Aún no tienes cuenta? <br>
                                <a href="<?php echo base_url();?>register">Registrarse</a>
                            </p>
                        </div>
                        </form>
                        <!--
                        <script>
                        <?php if (true) { ?>
                        
                        Swal.fire({
                            icon: 'success',
                            title: 'Exito',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        <?php }?>
                        </script> -->
                    </div>
                </div>
            </div>

        </section>



    </section>
   
</body>

</html>