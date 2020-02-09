<?php
class pages_model extends CI_Model
{

	//Conectar ao banco de dados
	public function __construct()
	{
		$this->load->database();
	}

	public function add_lead($data){
		if($this->db->get_where('leads', array('email' => $data['email']))->row()){
			$this->db->delete('leads', array('email'=>$data['email']));
		}
		$this->db->insert('leads', $data);
	}

	public function consulta_turmas(){
		$query = $this->db->query('SELECT * FROM turmas');
		return $query->result();
	}
}
