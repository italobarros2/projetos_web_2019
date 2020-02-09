<?php
class admin_model extends CI_Model
{

	//Conectar ao banco de dados
	public function __construct()
	{
		$this->load->database();
	}

	public function validacao_user($user, $pass){
		$query = $this->db->get_where('sistema', array('user' => $user, 'password' => $pass));
		return $query->row();
	}

	public function consulta_leads($select = 4){
		if($select == 0){
			$query = $this->db->get_where('leads', array('curso' => $select));
			return $query->result();
		}else{
			if($select == 4){
				$query = $this->db->query('SELECT * FROM leads');
				return $query->result();
			}
			$query = $this->db->get_where('leads', array('curso' => $select));
			return $query->result();
		}
	}

	public function insere_usuario($name, $email, $tel, $curso){
		if($this->db->get_where('leads', array('email' => $email))->row()){
			$this->db->delete('leads', array('email'=>$email));
		}
		$data = array(
			'name'=>$name,
			'email' => $email,
			'tel' => $tel,
			'curso' => $curso
		);
		$this->db->insert('leads', $data);
	}

	public function consulta_cursos(){
		$query = $this->db->query('SELECT * FROM cursos');
		return $query->result();
	}

}
