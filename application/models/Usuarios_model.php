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
		$this->db->where("username", $username);
		$this->db->where("password", $password);

		$resultados = $this->db->get("usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}


}