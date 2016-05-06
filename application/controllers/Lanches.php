<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lanches extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('lanche_model');
		$this->load->library('table');
	}
	 
	public function index()
	{	
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data = $session_data['username'];
			$dados = array(
				'projeto' => "Fries'n Rock",
				'titulo' => "Lanches",
				'usuario' => $data,
				'menu' => array(
					0 => 'Home',
					1 => 'Lanches',
					2 => 'Bebidas',
				),
			);
			$this->load->view('lanchesa', $dados);
		}
		else
		{
			$dados = array(
				'projeto' => "Fries'n Rock",
				'titulo' => "Lanches",
				'menu' => array(
					0 => 'Home',
					1 => 'Lanches',
					2 => 'Bebidas',
				),
				'funcao' => "retrieve",
			);
			$this->load->view('lanches', $dados);
		}	
	}
	
	public function retrieve()
	{
		$dados = array(
			'projeto' => "Fries'n Rock",
			'titulo' => "Lanches",
			'menu' => array(
				0 => 'Home',
				1 => 'Lanches',
				2 => 'Bebidas',
			),
			'lanches' => $this->lanche_model->get_all()->result(),
		);
		$this->load->view('lanches', $dados);
	}
	
	public function create()
	{
		$pedidos = $this->input->post('pedidos');
		
		$dados = array(
			'projeto' => "Fries'n Rock",
			'titulo' => "Lanches",
			'menu' => array(
				0 => 'Home',
				1 => 'Lanches',
				2 => 'Bebidas',
			),
		);
		
		$this->session->set_flashdata('pedidos', 'Pedido realizado com sucesso, aguarde até recebe-lo');
		redirect('lanches/retrieve', 'refresh');
	}
}