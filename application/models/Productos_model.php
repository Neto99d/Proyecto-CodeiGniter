<?php
defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Productos_model extends CI_Model  {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library( 'cart' );
    }

    public function get_Catg() {
        return $this->db->get( 'categorias' )->result();
    }

    public function get_Producto() {
        return $this->db->get( 'productos' )->result();
    }

    public function get_CatgID( $id ) {
        return $this->db->where( 'id', $id )->get( 'categorias' )->result();
    }

    public function get_CatgProd() {

        $result = $this->get_Catg();
        foreach ( $result as $index=>$row ):
        $this->db->select( 'p.nombre as nombrep, p.id as idproducto, precio' )->from( 'productos p' )->where( 'p.categoria_id', $row->id );
        $result[ $index ]->productos = $this->db->get()->result();

        endforeach;

        return $result;
    }

    public function get_ProductoID( $id ) {

       
        
        $this->db->select('*')->from('productos')->where( 'id', $id )->limit(1);
        $result = $this->db->get();
        if ($result->num_rows() == 1) {
			return $result->row();
		}
		else{
			return false;
		}
        

    }

    

    

}

/* End of file Productos_model.php and path \application\models\Productos_model.php */
