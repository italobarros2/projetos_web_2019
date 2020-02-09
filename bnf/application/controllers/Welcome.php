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
		$this->load->model('pages_model');
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

	public function sobre(){
		$this->load->view('template/head');
		$this->load->view('template/nav-2');
		$this->load->view('pages/sobre');
		$this->load->view('template/foot');
	}

	public function produtos(){
		$this->load->view('template/head');
		$this->load->view('template/nav-2');
		$this->load->view('pages/produtos');
		$this->load->view('template/foot');
	}

	public function negocio(){
		$this->load->view('template/head');
		$this->load->view('template/nav-3');
		$this->load->view('pages/vamos-fazer-negocio');
		$this->load->view('template/foot');
	}

	public function sucesso(){
		$this->load->view('template/head');
		$this->load->view('template/nav-3');
		$this->load->view('pages/sucesso');
		$this->load->view('template/foot');
	}

	public function contato(){
		$this->load->view('template/head');
		$this->load->view('template/nav-2');
		$this->load->view('pages/contato');
		$this->load->view('template/foot');
	}

	public function enviaEmail($email = 'italoctb@gmail.com', $informacoes = null, $sub = 1){
		$config = array(
			'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
			'smtp_host' => 'bnfacai.com.br',
			'smtp_port' => 465,
			'smtp_user' => 'site@bnfacai.com.br',
			'smtp_pass' => '321bnfacai',
			'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
			'mailtype' => 'html', //plaintext 'text' mails or 'html'

		);

		$this->email->initialize($config);

		$this->email->from($config['smtp_user'], 'Site BNF');
		$this->email->to($email);
//			$this->email->cc('italobarroscontato@gmail.com');
		$this->email->subject('Um novo contato!');
		if($sub != 1){
			$this->email->subject($sub);
		}
		$this->email->message($informacoes);
//		if ($this->email->send()) {
//			echo '<h3>Compra de Stand(s) realizada com sucesso, em breve você receberá um e-mail de confirmação. (2 dias úteis, após a confimação do pagamento)</h3>';
//			echo '<a href="'.base_url().'"><button>Voltar</button></a>';
//		} else {
//			show_error($this->email->print_debugger());
//		}
		$this->email->send();

	}

	public function processamento(){
		$nome = $this->input->post('nome');
		$tel = $this->input->post('tel');
		$email = $this->input->post('email');
		$motivo = $this->input->post('motivo');
		$mensagem = $this->input->post('mensagem');
		$data = array(
			'nome' => $nome,
			'tel' => $tel,
			'email' => $email,
			'motivo' => $motivo,
			'mensagem' => $mensagem,
		);
		$msg = '
			<!DOCTYPE html>
			<html lang="pt-br">
			<body style="background-color: #fff4ca;height: 100%; padding-top: 20px; padding-bottom: 20px">
				<h2>Novo Contato!</h2>
				<p>Nome: '.$nome.'</p>
				<p>E-mail: '.$email.'</p>
				<p>Telefone: '.$tel.'</p>
				<p>Motivo: '.$motivo.'</p>
				<p>Mensagem: '.$mensagem.'</p>
			</body>
			</html>
		';
		$this->enviaEmail("bnfacai@bnfacai.com.br", $msg);
		$this->pages_model->insere_lead($data);
		redirect(base_url('sucesso'));
	}
}
