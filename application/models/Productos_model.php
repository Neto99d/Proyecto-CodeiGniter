<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Productos_model extends CI_Model 
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function get_Catg()
    {
        return $this->db->get('categorias')->result();
    }    
    
    public function get_Producto()
    {
        return $this->db->get('productos')->result();
    }  

    public function get_CatgID($id)
    {
        return $this->db->where('id', $id)->get('categorias')->result();
    }
        
    public function get_CatgProd()
    {
        $this->db->select('c.nombre as nombrec, p.nombre as nombrep')->from('categorias c')->join('productos p', 'p.categoria_id=c.id')->group_by('c.id')->order_by('p.categoria_id','ASC');
        $result = $this->db->get(); 
        return $result->result_array();
    }
    
    public function get_ProductoID($id)
    {
        return $this->db->where('id', $id)->get('productos')->result();
    }
      
                        
}


/* End of file Productos_model.php and path \application\models\Productos_model.php */