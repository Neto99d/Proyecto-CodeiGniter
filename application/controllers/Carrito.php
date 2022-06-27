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

    public function cantProd() {
        $id = $this->input->get( 'id' );
        $cant = $this->input->get( 'cant' );
        $product = $this->prod->get_ProductoID( $id );
        $result = $product->disponible - $cant;   // actualizar disponibilidad de producto
        $data = array(
            'cantPedida'   => $cant,
            'disponible'    => $result
        );
        $this->prod->updateProd( $id, $data );
    }

    public function deleteCart( $data, $id, $cant ) {
      $product = $this->prod->get_ProductoID( $id );
      $result = $product->disponible + $cant;   // actualizar disponibilidad de producto
      $datoP = array(
          'disponible'    => $result,
          'cantPedida'  => 0
      );
      $this->prod->updateProd( $id, $datoP );
        $this->cart->remove( $data );
        redirect( base_url().'carrito' );
    }
}

/* End of file Carrito.php */
/* Location: ./application/controllers/Carrito.php */