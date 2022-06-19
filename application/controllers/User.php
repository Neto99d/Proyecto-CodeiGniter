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
	}

 // md5($_POST['password'])
	public function create(){
		extract($_POST);
        if ($this->Usuarios_model->save($nombre, $apellidos, $username, $email, $telefono, $direccion, $password)) {
			redirect(base_url()."login");
		}
		else{
			redirect(base_url()."register");
		}
	}

    /*public function login(){
        $username = $this->input->post("username");
		$password = $this->input->post("password");
		$res = $this->Usuarios_model->login($username, $password);

		if (!$res) {
			//$this->session->set_flashdata("error","El usuario y/o contraseña son incorrectos");
			redirect(base_url()."login");
		}
		else{
			$data  = array(
				'id' => $res->id, 
				'nombre' => $res->nombre,
				'login' => TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url());
		}
	}*/

	/*public function logout(){
            redirect(base_url());
        
		$this->session->sess_destroy();
		redirect(base_url());
	}*/
}