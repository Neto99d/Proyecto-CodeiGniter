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
    <section class='pb-4 '>
        <section class='w-100 p-4 d-flex justify-content-center pb-4'>
            <div class='bg-white justify-content-center border rounded-3'>
                <div class='container justify-content-center' style='width: 26rem;'>
                    <!-- Pills navs -->
                    <ul class='nav nav-pills nav-justified mb-3' id='ex1' role='tablist'>
                        <li class='nav-item' role='presentation'>
                            <br>
                            <a class='nav-link' id='tab-login' data-mdb-toggle='pill'
                                href='<?php echo base_url();?>login' role='tab' aria-controls='pills-login'
                                aria-selected='false'>Iniciar Sesión</a>
                        </li>
                        <li class='nav-item' role='presentation'>
                            <br>
                            <a class='nav-link active' id='tab-register' data-mdb-toggle='pill'
                                href='<?php echo base_url();?>register' role='tab' aria-controls='pills-register'
                                aria-selected='true'>Registrarse</a>
                        </li>
                    </ul>
                    <!-- Pills navs -->
                    <div class='tab-pane fade show active' id='pills-register' role='tabpanel'
                        aria-labelledby='tab-register'>
                        <form action="<?php echo base_url('user/create');?>" method="POST">
                            <div class='text-center mb-3'>
                                <h5>Proporcione sus datos</h5>
                                <br>
                            </div>

                            <!-- Name input -->
                            <div class='form-outline mb-4'>
                                <input type='text' name="nombre" id='nombre' class='form-control' required />
                                <label class='form-label' for='nombre'>Nombre</label>
                            </div>

                            <div class='form-outline mb-4'>
                                <input type='text' name="apellidos" id='apellidos' class='form-control' required />
                                <label class='form-label' for='apellidos'>Apellidos</label>
                            </div>

                            <!-- Username input -->
                            <div class='form-outline mb-4'>
                                <input type='text' name="username" id='username' class='form-control' required />
                                <label class='form-label' for='username'>Nombre de usuario</label>
                            </div>

                            <!-- Email input -->
                            <div class='form-outline mb-4'>
                                <input type='email' name="email" id='email' class='form-control' required />
                                <label class='form-label' for='email'>Correo</label>
                            </div>

                            <div class='form-outline mb-4'>
                                <input type='tel' name="telefono" id='telefono' class='form-control' maxlength="8" required />
                                <label class='form-label' for='telefono'>Teléfono</label>
                            </div>

                            <div class='form-outline mb-4'>
                                <input type='text' name="direccion" id='direccion' class='form-control' required />
                                <label class='form-label' for='direccion'>Dirección</label>
                            </div>

                            <!-- Password input -->
                            <div class='form-outline mb-4'>
                                <input type='password' name="password" id='password' class='form-control' minlength="4" required />
                                <label class='form-label' for='password'>Contraseña</label>
                            </div>

                            <!-- Repeat Password input -->
                            <div class='form-outline mb-4'>
                                <input type='password' id='repeatpassword' name="repeatpassword" class='form-control'
                                    required />
                                <label class='form-label' for='repeatpassword'>Repita su contraseña</label>
                            </div>

                            <!-- Checkbox -->
                            <div class='form-check d-flex justify-content-center mb-4'>
                                <input class='form-check-input me-2' type='checkbox' value='' id='registerCheck'
                                    required aria-describedby='registerCheckHelpText' />
                                <label class='form-check-label' for='registerCheck'>
                                    Estoy de acuerdo con los términos y condiciones
                                </label>
                            </div>

                            <!-- Submit button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block mb-4">Registrar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->
            </div>
            </div>
        </section>

    </section>
    
</body>

</html>