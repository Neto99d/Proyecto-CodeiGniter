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
    #error {
        color: red;
    }
    </style>
</head>

<body>

    <section>
        <div class="container-fluid text-center">
            <br>
            <h4>Insertar nuevos productos</h4>
            <br>
            <br><br>
            <h4>Proporcione los datos del producto</h4>
            <h5 id="error"><small><?php echo $this->session->flashdata('mensaje');?></small></h5>
            <div class='container justify-content-center border rounded-3' style='width: 26rem; '>
                <form action="<?php echo base_url('productos/crearProd');?>" method="POST">
                    <div>
                        <br>
                        <label class='form-label' for="nombre">Nombre</label>
                        <input class='form-control' required name="nombre" type="text" maxlength="30">
                    </div>
                    <div>
                        <br>
                        <label class='form-label' for="descripcion">Descripción</label>
                        <textarea class='form-control' required name="descripcion" rows="3" cols="25" type="text"
                            maxlength="100"></textarea>
                    </div>
                    <div>
                        <br>
                        <label class='form-label' for="precio">Precio $</label>
                        <input class='form-control' required name="precio" type="number">
                    </div>
                    <div>
                        <br>
                        <label class='form-label' for="disponible">Cantidad disponible</label>
                        <input class='form-control' required name="disponible" type="number">
                    </div>
                    <div>
                        <br>
                        <label class='form-label' for="peso">Unidad de Pesaje</label>
                        <input class='form-control' name="peso" placeholder="Si la tiene. Ejemplo: Lb, Oz, tonelada o T" type="text"
                            maxlength="15">
                    </div>
                    <div>
                        <br>
                        <label class='form-label' for="fecha">Fecha</label>
                        <input class='form-control' required name="fecha" type="date">
                    </div>
                    <div>
                        <br>
                        <label class='form-label' for="imagenProd">Imagen</label>
                        <input class='form-control' name="imagenProd" placeholder="Opcional. Ejemplo: nombre.jpg"
                            type="text">
                        <br>
                        <br>


                        <label class='form-label' for="categoria_id">Categoria</label>
                        <select class='form-control' name="categoria_id" id="categoria_id">
                            <?php foreach ($catProd as $item):?>
                            <option value="<?php echo $item->nombre?>"><?php echo $item->nombre?></option>
                            <?php endforeach; ?>
                        </select>
                        <br>

                        <button class="btn btn-outline-success" type="submit">Insertar</button>
                        <br>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>

</html>