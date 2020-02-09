<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
//		$this->load->view('template/nav');
		$this->load->view('pages/principal');
		$this->load->view('template/foot');
	}

	public function sucesso(){
		$this->load->view('template/head');
//		$this->load->view('template/nav');
		$this->load->view('pages/sucesso');
		$this->load->view('template/foot');
	}


	public function enviaEmail($email = 'italoctb@gmail.com', $informacoes = null, $sub = 1){
		$config = array(
			'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
			'smtp_host' => 'convence.com.br',
			'smtp_port' => 465,
			'smtp_user' => 'sistema-sites@convence.com.br',
			'smtp_pass' => 'convence123',
			'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
			'mailtype' => 'html', //plaintext 'text' mails or 'html'

		);

		$this->email->initialize($config);

		$this->email->from($config['smtp_user'], 'Site Hotel Plaza');
		$this->email->to($email);
//			$this->email->cc('italobarroscontato@gmail.com');
		$this->email->subject('Um novo contato!');
		if($sub != 1){
			$this->email->subject($sub);
		}
		$this->email->message($informacoes);
		if ($this->email->send()) {
			echo '<h3>Compra de Stand(s) realizada com sucesso, em breve você receberá um e-mail de confirmação. (2 dias úteis, após a confimação do pagamento)</h3>';
			echo '<a href="'.base_url().'"><button>Voltar</button></a>';
		} else {
			show_error($this->email->print_debugger());
		}
//		$this->email->send();

	}

	public function tratamento(){
		$name = $this->input->post('nome');
		$email = $this->input->post('email');
		$tel = $this->input->post('tel');
		$assunto = $this->input->post('assunto');
		$msg = $this->input->post('msg');
		$data = array(
			'nome' => $name,
			'email' => $email,
			'tel' => $tel,
		);
		$mensagem = '<!DOCTYPE html>
<html lang="pt-br">
<body style="background-color: #fff4ca;height: 100%; padding-top: 20px; padding-bottom: 20px">
	<h2>Novo Contato!</h2>
	<p>Nome: '.$name.'</p>
	<p>E-mail: '.$email.'</p>
	<p>Telefone: '.$tel.'</p>
	<p>Assunto: '.$assunto.'</p>
	<p>Mensagem: '.$msg.'</p>
</body>
</html>
';
		$this->pages_model->add_lead($data);
		$this->enviaEmail("sdplaza@gruposaodomingos.com.br", $mensagem);
		redirect(base_url('sucesso'));
	}
}