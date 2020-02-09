<?php
class pages_model extends CI_Model
{

	//Conectar ao banco de dados
	public function __construct()
	{
		$this->load->database();
	}


	public function consulta_cursos(){
		$query = $this->db->query('SELECT * FROM cursos');
		return $query->result();
	}

}
