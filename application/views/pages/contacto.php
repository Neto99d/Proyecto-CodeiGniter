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
    
   
    <section>
    <div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">
	    		<div class="col-sm-12">   
                    <br>
                    <br> 			   			
					<h2 class="title text-center">Contáctenos</h2> 
                    <br>
                    <br> 	    				
				</div>			 		
			</div>    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<h2 class="title text-center">Envíe su comentario</h2>
                        <br>
	    					    				<div class="status alert alert-success" style="display: none"></div>
				    	<form action="" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="contact_name" class="form-control" required="required" placeholder="Nombre">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="contact_email" class="form-control" required="required" placeholder="Correo">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="text" name="contact_subject" class="form-control" required="required" placeholder="Asunto">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="contact_message" id="message" required="required" class="form-control" rows="8" placeholder="Escriba aquí su mensaje"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" class="btn btn-primary pull-right" value="Enviar">
				            </div>
				        </form>
	    			</div>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">Información de Contacto</h2>
                        <br>
	    				<address class="text-center">
	    					<p>Comercio electrónico</p>
							<p>Centro: Universidad de Oriente</p>
							<p>Ciudad: Santiago de Cuba</p>
							<p>Móvil: +53 55627892</p>
							<p>Correo: neto@uo.edu.cu</p>
	    				</address>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
    </section>
    
</body>

</html>