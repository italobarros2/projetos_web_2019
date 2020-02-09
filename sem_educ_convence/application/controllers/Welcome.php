<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->model('admin_model');
		$this->load->model('pages_model');
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/nav');
		$this->load->view('pages/principal');
		$this->load->view('templates/footer');
	}
	public function enviaEmail($email = 'italoctb@gmail.com', $informacoes = null, $sub = 1){
		$config = array(
			'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
			'smtp_host' => 'pos-educ.com.br',
			'smtp_port' => 465,
			'smtp_user' => 'sac@pos-educ.com.br',
			'smtp_pass' => 'pos-educ123',
			'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
			'mailtype' => 'html', //plaintext 'text' mails or 'html'

		);

		$this->email->initialize($config);

		$this->email->from($config['smtp_user'], 'Pós-Educ');
		$this->email->to($email);
//			$this->email->cc('italobarroscontato@gmail.com');
		$this->email->subject('Aqui está o Guia do Curso');
		if($sub != 1){
			$this->email->subject($sub);
		}
		$this->email->message($informacoes);
		/*if ($this->email->send()) {
			echo '<h3>Compra de Stand(s) realizada com sucesso, em breve você receberá um e-mail de confirmação. (2 dias úteis, após a confimação do pagamento)</h3>';
			echo '<a href="'.base_url().'"><button>Voltar</button></a>';
		} else {
			show_error($this->email->print_debugger());
		}*/
		$this->email->send();

	}
	public function tratamento()
	{
		$name = $this->input->post('name');
		$first = strstr($name, ' ', true);
		$email = $this->input->post('email');
		$tel = $this->input->post('tel');
		$curso = $this->input->post('curso');
		switch ($curso) {
			case 4:
				$msg = $this->input->post('comment');
				$mensagem = '
				<html>
				<body>
				<h2>Novo contato</h2>
				<p>Nome: ' . $name . '</p>
				<p>Email: ' . $email . '</p>
				<p>Telefone: ' . $tel . '</p>
				<p>Mensagem:<br><br>' . $msg . '</p>
				</body>
				</html>
				';
				break;
		}
		if ($curso == 4){
			$this->enviaEmail('diretoria@educce.com.br', $mensagem, "Um novo contato!");
			$this->admin_model->insere_usuario($name, $email, $tel, $curso);
			redirect(base_url('sucesso_contato'));
		}else{
			$this->admin_model->insere_usuario($name, $email, $tel, $curso);
			redirect('https://www.acadus.com.br/acadus_iol/web/aluno.php/login/eventos/token/10');
		}

	}
}
