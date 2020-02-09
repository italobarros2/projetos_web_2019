<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('email');
//		$this->load->model('admin_model');
//		$this->load->model('pages_model');
	}

	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('template/nav-1');
		$this->load->view('pages/principal');
		$this->load->view('template/foot');
	}

	public function postos(){
		$data = array(
			'postos' => $this->pages_model->consulta_postos(),
			'postos_promo' => $this->pages_model->consulta_postos_promo()
		);
		$this->load->view('template/head');
		$this->load->view('template/nav-2');
		$this->load->view('pages/postos', $data);
		$this->load->view('template/foot');
	}

	public function promocoes(){
		$this->load->view('template/head');
		$this->load->view('template/nav-2');
		$this->load->view('pages/promos');
		$this->load->view('template/foot');
	}

	public function historia(){
		$this->load->view('template/head');
		$this->load->view('template/nav-2');
		$this->load->view('pages/historia');
		$this->load->view('template/foot');
	}

	public function processamento(){
		$email = $this->input->post('email');
		$data = array(
			'id' => '',
			'email' => $email
		);
		$this->pages_model->insere_lead($data);
	}
}
