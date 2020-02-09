<?php
class pages_model extends CI_Model
{

	//Conectar ao banco de dados
	public function __construct()
	{
		$this->load->database();
	}

	public function add_lead($data){
		$this->db->insert('leads', $data);
	}

}
