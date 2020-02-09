<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('admin_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
	}

	public function index()
	{
		redirect(base_url('login'));
	}

	public function login()
	{
		$this->session->unset_userdata('user');
		$this->load->view('admin/pages/admin-login');
	}

	public function autenticate()
	{
		$user =$this->input->post('username');
		$pass =$this->input->post('password');
		$res = $this->admin_model->validacao_user($user, $pass);
		if($res){
			$this->session->set_userdata('user', $user);
			redirect(base_url('engine_convence/dashboard'));
		}else{
			redirect(base_url('engine_convence/userNotFound'));
		}
	}

	public function home(){
		$check_login = $this->session->userdata('user');
		if($check_login){
			$data = array(
				'queries' => $this->admin_model->consulta_leads()
			);
			$data_cursos = array(
				'cursos' => $this->admin_model->consulta_cursos(),
				'control1' => "active",
				'controla1' => "show",
				'control11' => "active",
				'control12' => "",
				'control2' => "",
				'controla2' => "",
				'control21' => 0,
				'control3' => "",
				'controla3' => "",
				'control31' => "",
			);
			$this->load->view('admin/templates/admin-header');
			$this->load->view('admin/templates/admin-nav');
			$this->load->view('admin/templates/admin-leftnav', $data_cursos);
			$this->load->view('admin/templates/admin-headsection');
			$this->load->view('admin/pages/home', $data);
			$this->load->view('admin/templates/admin-footer');
		}else{
			redirect(base_url('engine_convence/login'));
		}
	}

	public function contatos(){
		$check_login = $this->session->userdata('user');
		if($check_login){
			$data = array(
				'queries' => $this->admin_model->consulta_leads(0)
			);
			$data_cursos = array(
				'cursos' => $this->admin_model->consulta_cursos(),
				'control1' => "active",
				'controla1' => "show",
				'control11' => "",
				'control12' => "active",
				'control2' => "",
				'controla2' => "",
				'control21' => 0,
				'control3' => "",
				'controla3' => "",
				'control31' => "",
			);
			$this->load->view('admin/templates/admin-header');
			$this->load->view('admin/templates/admin-nav');
			$this->load->view('admin/templates/admin-leftnav', $data_cursos);
			$this->load->view('admin/templates/admin-headsection');
			$this->load->view('admin/pages/home', $data);
			$this->load->view('admin/templates/admin-footer');
		}else{
			redirect(base_url('engine_convence/login'));
		}
	}

	public function seminarios(){
		$check_login = $this->session->userdata('user');
		if($check_login){
			$data = array(
				'queries' => $this->admin_model->consulta_leads(5)
			);
			$data_cursos = array(
				'cursos' => $this->admin_model->consulta_cursos(),
				'control1' => "",
				'controla1' => "",
				'control11' => "",
				'control12' => "",
				'control2' => "",
				'controla2' => "",
				'control21' => 0,
				'control3' => "active",
				'controla3' => "show",
				'control31' => "active",
			);
			$this->load->view('admin/templates/admin-header');
			$this->load->view('admin/templates/admin-nav');
			$this->load->view('admin/templates/admin-leftnav', $data_cursos);
			$this->load->view('admin/templates/admin-headsection');
			$this->load->view('admin/pages/home', $data);
			$this->load->view('admin/templates/admin-footer');
		}else{
			redirect(base_url('engine_convence/login'));
		}
	}

	public function curso_selected($select){
		$check_login = $this->session->userdata('user');
		if($check_login){
			$data_cursos = array(
				'cursos' => $this->admin_model->consulta_cursos(),
				'control1' => "",
				'controla1' => "",
				'control11' => "",
				'control12' => "",
				'control2' => "active",
				'controla2' => "show",
				'control3' => "",
				'controla3' => "",
				'control31' => "",
			);
			switch ($select){
				case "mbagerenciamento":
					$data = array(
						'queries' => $this->admin_model->consulta_leads(1)
					);
					$data_cursos['control21']=1;
					break;
				case "neuropsicopedagogia":
					$data = array(
						'queries' => $this->admin_model->consulta_leads(2)
					);
					$data_cursos['control21']=2;
					break;
				case "musicoterapia":
					$data = array(
						'queries' => $this->admin_model->consulta_leads(3)
					);
					$data_cursos['control21']=3;
					break;
			}
			$this->load->view('admin/templates/admin-header');
			$this->load->view('admin/templates/admin-nav');
			$this->load->view('admin/templates/admin-leftnav', $data_cursos);
			$this->load->view('admin/templates/admin-headsection');
			$this->load->view('admin/pages/home', $data);
			$this->load->view('admin/templates/admin-footer');
		}else{
			redirect(base_url('engine_convence/login'));
		}
	}

	public function redirect(){
		redirect(base_url('engine_convence/login'));
	}

	public function direct(){
		$emails = $this->input->post('emails');
		foreach ($emails as $email){
			if($email != ''){
				echo $email.'</br>';
			}
		}
	}
}
