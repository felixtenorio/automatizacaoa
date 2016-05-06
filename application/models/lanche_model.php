<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lanche_model extends CI_Model
{
	public function get_all()
	{
		return $this->db->get('cardapio');
	}
	
	public function create($id = NULL)
	{
		if($id != NULL)
		{
			
		}
	}
}