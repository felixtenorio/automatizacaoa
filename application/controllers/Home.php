<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()
	{
		$dados = array(
			'projeto' => "Fries'n Rock",
			'titulo' => "Home",
			'menu' => array(
				0 => 'Home',
				1 => 'Porções',
				2 => 'Lanches',
				3 => 'Bebidas',
			),
		);
		$this->load->view('home', $dados);
	}
}
