<?php
Class User extends CI_Model
{
	public function login($username, $password)
	{
		$this->db->select('id, usuario, senha');
		$this->db->from('usuario');
		$this->db->where('usuario', $username);
		$this->db->where('senha', md5($password));
		$this->db->limit(1);
		
		$query = $this->db->get();
		
		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}