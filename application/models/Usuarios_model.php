<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function __construct(){
        parent::__construct();
        $this->load->database();
    }

   
	 public function save($nombre, $apellidos, $username, $email, $telefono, $direccion, $password){
		$data  = array(
			'nombre' => $nombre, 
			'apellidos' => $apellidos, 
			'username' => $username,
			'email' => $email,
			'telefono' => $telefono, 
			'direccion' => $direccion, 
			'password' => $password , 
		);
		return $this->db->insert('clientes', $data);
	} 

	public function login($username, $password){
		
		$this->db->select('*');
		$this->db->from('clientes');
		$this->db->where('username', $username);
		$this->db->or_where('email', $username);
		$this->db->where('password', $password);
		$this->db->limit(1);
		$resultados = $this->db->get();
		if ($resultados->num_rows() == 1) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}


}