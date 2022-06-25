<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
		$this->load->library('session');	
	}

    
 // md5($_POST['password'])
 // Crear usuario
	public function create(){
		extract($_POST);
        if ($this->Usuarios_model->save($nombre, $apellidos, $username, $email, $telefono, $direccion, $password)) {
			redirect(base_url()."login");
		}
		else{
			redirect(base_url()."register");
		}
	}

    public function login(){
        extract($_POST);
		$res = $this->Usuarios_model->login($username, $password);
		if ($res != NULL) {
			$data  = array(
				'id' => $res->id, 
				'nombre' => $res->nombre,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($data);
			
			redirect(base_url());
			
		}
		else if (!$this->session->has_userdata("id")) {
				# Poner un mensaje de inicio de sesión NO FUNCIONA
				$this->session->keep_flashdata('mensaje', 'Error');
				$this->session->mark_as_flash('mensaje');
				
				# Y redireccionar al login
				redirect(base_url()."login");
			
			// redirect(base_url()."login");
		}
	}

    public function is_logueado() // PENDIENTE DE PROBAR
	{
		if (!$this->session->has_userdata("id")) {
			# Poner un mensaje de inicio de sesión
			$this->session->set_flashdata('mensaje', 'Error');
			# Y redireccionar al login
			redirect(base_url()."login", 'refresh');
		    return false;
		// redirect(base_url()."login");
		}
		else {
			return true;
		}

	}

	public function logout(){
            
		session_unset();
		session_destroy();
		redirect(base_url(), 'refresh');
	}
}