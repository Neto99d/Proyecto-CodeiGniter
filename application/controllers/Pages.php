<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model( 'Productos_model' );
        $this->load->library( 'cart' );
    }

    public function view( $page = 'index' ) {
        if ( ! is_file( APPPATH . 'views/pages/' . $page . '.php' ) ) {
            // No encuentra la pagina
            show_404();
        }

        // Pasando todos los datos necesarios a las vistas
        $datos = array();
        $datos[ 'productos' ] = $this->Productos_model->get_Producto();
        $datos[ 'catProd' ] = $this->Productos_model->get_CatgProd();
        $datos[ 'cartItems' ] = $this->cart->contents();

        // Cargando Vistas
        $this->load->view( 'templates/header' );
        $this->load->view( 'pages/'.$page, $datos );
        $this->load->view( 'templates/footer' );
    }
}

/* End of file Pages.php and path \application\controllers\Pages.php */
