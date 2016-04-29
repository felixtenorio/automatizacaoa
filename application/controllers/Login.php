<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$dados = array(
			'projeto' => "Fries'n Rock",
			'titulo' => "Lanches",
			'menu' => array(
				0 => 'Home',
				1 => 'Lanches',
				2 => 'Bebidas',
			),
		);
		
		$this->load->helper(array('form'));
		$this->load->view('login_view',$dados);
	}
	
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('login', 'refresh');
	}
}
