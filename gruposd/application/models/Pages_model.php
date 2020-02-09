<?php
class pages_model extends CI_Model
{

	//Conectar ao banco de dados
	public function __construct()
	{
		$this->load->database();
	}

	public function consulta_postos(){
		$query = $this->db->query('SELECT * FROM postos');
		return $query->result();
	}

	public function consulta_postos_promo(){
		$query = $this->db->query('SELECT * FROM postos NATURAL JOIN postos_has_promocoes NATURAL JOIN promocoes');
		return $query->result();
	}

	public function insere_lead($data){
		if($this->db->get_where('leads', array('email' => $data['email']))){
			$this->db->delete('leads', array('email' => $data['email']));
		}
		$this->db->insert('leads', $data);
	}

}
