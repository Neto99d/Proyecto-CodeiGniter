<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
*
* Controller Productos
*
* This controller for ...
*
* @package   CodeIgniter
* @category  Controller CI
* @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
* @author    Raul Guerrero <r.g.c@me.com>
* @link      https://github.com/setdjod/myci-extension/
* @param     ...
* @return    ...
*
*/

class Productos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model( 'ManageProd_model', 'prod' );
        $this->load->library('session');
    }

    public function crearProd() {
        extract( $_POST );
        $data  = array(
            'nombre'     => $nombre,
            'descripcion' => $descripcion,
            'precio'=> $precio,
            'disponible'=> $disponible,
            'imagenProd'=> 'Imagen-no-disp.png',
            'peso'=> $peso,
            'fecha'=> $fecha,
            'categoria_id'=> $categoria_id,

        );
        if ( !$this->prod->insert( $data ) ) {
            $this->session->mark_as_flash( 'mensaje' );
            $this->session->set_flashdata( 'mensaje', 'Error al insertar' );
            redirect( base_url( 'manageProd' ) );
        } else {
            $this->session->mark_as_flash( 'mensaje' );
            $this->session->set_flashdata( 'mensaje', 'Insertado con Éxito' );
            redirect( base_url( 'manageProd' ) );
        }

    }

    public function updateProd( $id ) {
        extract( $_POST );
        $data  = array(
            'nombre'     => $nombre,
            'descripcion' => $descripcion,
            'precio'=> $precio,
            'disponible'=> $disponible,
            'imagenProd'=> $imagenProd,
            'peso'=> $peso,
            'fecha'=> $fecha,
            'categoria_id'=> $categoria_id,

        );
        $this->prod->update( $data, $id );
        redirect( base_url( 'administracion' ) );
    }

    public function deleteProd( $id ) {
        $this->prod->delete( $id );
        redirect( base_url( 'administracion' ) );
    }

    public function cantTProd() {
        $this->prod->cantProductos();
    }

}

/* End of file Productos.php */
/* Location: ./application/controllers/Productos.php */