<?php
defined( 'BASEPATH' ) or exit( 'No direct script access allowed' );

/**
*
* Controller Carrito
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

class Carrito extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library( 'cart' );
        $this->load->model( 'Productos_model', 'prod' );
    }

    // Agregar al carrito desde la pagina principal
    public function AddCart( $id ) {

        $product = $this->prod->get_ProductoID( $id );

        $data = array(
            'id'      => $product->id,
            'qty'  => $product->cantPedida,
            'price'   => $product->precio,
            'name'     => $product->nombre

        );

        $this->cart->insert( $data );
        redirect( base_url(), 'refresh' );

    }

   // Agregar al carrito desde la pagina de productos
    public function AddCart_PageProd( $id ) {

        $product = $this->prod->get_ProductoID( $id );

        $data = array(
            'id'      => $product->id,
            'qty'  => $product->cantPedida,
            'price'   => $product->precio,
            'name'     => $product->nombre

        );

        $this->cart->insert( $data );

        redirect( base_url().'productos', 'refresh' );

    }

    // actualizar datos del carrito
    public function updateCart() {
        $rowid = $this->input->get( 'rowid' );
        $qty = $this->input->get( 'qty' );

        $data = array(
            'rowid' => $rowid,
            'qty'   => $qty
        );

        $this->cart->update( $data );
        redirect( base_url().'carrito' );
    }

    // Actualizar cantidad entrada por el usuario del producto seleccionado
    public function cantProd() {
        $id = $this->input->get( 'id' );
        $cant = $this->input->get( 'cant' );
        $product = $this->prod->get_ProductoID( $id );
        // actualizar disponibilidad de producto NO funciona bien del todo al dejar un producto en 0 y calcular da # negativo
        $result = ( intval( $product->disponible ) -  intval( $cant ) );
        
        $data = array(
            'cantPedida'   => $cant,
            'disponible'    => $result
        );
        $this->prod->updateProd( $id, $data );
    }

    // Eliminar del carrito
    public function deleteCart( $data, $id, $cant ) {
        $product = $this->prod->get_ProductoID( $id );
        // actualizar disponibilidad de producto NO funciona bien del todo al dejar un producto en 0 y calcular da # negativo
        $result = intval( $product->disponible ) + intval( $cant );
        
        $datoP = array(
            'disponible'    => $result,
            'cantPedida'  => 0
        );
        $this->prod->updateProd( $id, $datoP );
        $this->cart->remove( $data );
        redirect( base_url().'carrito' );
    }

    // Vaciar carrito
    public function vaciarCarrito() {
        $this->cart->destroy();
        redirect( base_url());
    }
}

/* End of file Carrito.php */
/* Location: ./application/controllers/Carrito.php */