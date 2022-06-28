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

    
 // cambiar $password por md5($_POST['password'])  // esto es para encriptar contraseña, no se uso porque hay problemas al desencriptar y comparar la contraseña entrada con la de la BD y verificar

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

	// Loggin
    public function login(){
        extract($_POST); // Extrae los datos del formulario
		$res = $this->Usuarios_model->login($username, $password); // llama a la funcion que comprueba usuario y contraseña
		if ($res != NULL) {
			$data  = array(
				'id' => $res->id, 
				'nombre' => $res->nombre,
				'apellidos' => $res->apellidos,
				'direccion' => $res->direccion,
				'telefono' => $res->telefono,
				'correo' => $res->email,
				'isAdmin' => $res->isAdmin,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($data); // guarda los datos de usuario en la sesion

			// para cargar en la vista datos de usuario que inicio sesion
			$tempdata = array('nombre' => $data['nombre'],'apellidos' => $res->apellidos, 'direccion' => $res->direccion,
			'telefono' => $res->telefono, 'isAdmin' => strval($res->isAdmin) ,
			'correo' => $res->email,'logged_in' => TRUE);
			$this->session->set_tempdata($tempdata, null, 90000); // esta info durara 25h (90000 segundos, despues de ese tiempo se borran los datos) , a traves de ella se muestra el nombre de usuario en la interfaz al iniciar sesion por el tiempo

			redirect(base_url());
			
		}
		else if (!$this->session->has_userdata("id")) {
				# Poner un mensaje en la parte de inicio de sesión 
				$this->session->mark_as_flash('mensaje');
				$this->session->set_flashdata('mensaje', 'Error de usuario o contraseña');
				
				
				# Y redireccionar al login
				redirect(base_url()."login");
			
			// redirect(base_url()."login");
		}
	}

	// Cerrar sesion
	public function logout(){
            
		session_unset();
		session_destroy();
		redirect(base_url(), 'refresh');
	}
}