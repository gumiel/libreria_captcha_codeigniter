<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->library('session');		
		
	}

	public function index()
	{
		
	}

	public function ingresar($mensaje='')
	{
		$data = array('mensaje'=>$mensaje);
		$this->load->view('login', $data, FALSE);
	}

	public function procesarIngreso()
	{
		$login    = $this->input->post('login');
		$password = $this->input->post('password');
		$captcha = $this->input->post('captcha');

		if($login == 'admin' && $password == '123' && $captcha == $this->session->userdata('captcha'))
		{
			echo "ESTA TODO BIEN";
			$this->session->set_userdata('captcha', 'asdasrehhgiuoivbcvsdz312123');

		}else{
			
			redirect('login/ingresar/error','refresh');
		}

	}

	public function crearCaptcha()
	{
		$this->load->library('Captcha_ci');		
		$this->captcha_ci->crear();
		$cadenaCaptchaCreado = $this->captcha_ci->obtenerString();

		$this->session->set_userdata('captcha', $cadenaCaptchaCreado);
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */