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
		$this->load->model('admin_model');
		$this->load->model('pages_model');
	}

	public function index()
	{
		$this->load->view('pages/principal');
	}

	public function enviaEmail($email = 'italoctb@gmail.com', $informacoes = null, $sub = 1){
		$config = array(
			'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
			'smtp_host' => 'artsoldasobral.com.br',
			'smtp_port' => 465,
			'smtp_user' => 'atendimento@artsoldasobral.com.br',
			'smtp_pass' => 'ArtSoldaSobral',
			'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
			'mailtype' => 'html', //plaintext 'text' mails or 'html'

		);

		$this->email->initialize($config);

		$this->email->from($config['smtp_user'], 'Art Solda');
		$this->email->to($email);
//			$this->email->cc('italobarroscontato@gmail.com');
		$this->email->subject('Aqui está o nosso Portfolio');
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

	public function tratamento()
	{
		$name = $this->input->post('name');
		$first = strstr($name, ' ', true);
		$email = $this->input->post('email');
		$tel = $this->input->post('tel');
		$control = $this->input->post('control');
		switch ($control){
			case 2:
				$msg = $this->input->post('comment');
				$mensagem = '
				<html>
				<body>
				<h2>Novo contato</h2>
				<p>Nome: '.$name.'</p>
				<p>Email: '.$email.'</p>
				<p>Telefone: '.$tel.'</p>
				<p>Mensagem:<br><br>'.$msg.'</p>
				</body>
				</html>
				';
				break;
			case 1:
				$mensagem = '<html lang="pt-br">
<body style="background-color: #5d616f;height: 100%; padding-top: 20px; padding-bottom: 20px">

<div class="card" style="margin: auto;margin-top: 50px; height: 120%;width: 715px;padding-top: 40px; border-style: ridge; border-width: 3px; padding-bottom: 70px; background: url(\'https://artsoldasobral.com.br/static/img/textura.png\') no-repeat;background-size: cover;">
	<div style="height: 137.5%; width: inherit; position: absolute; z-index: 0; bottom: 0; background-color: #000000e0; top: 81px; left: 0px;right: 0; margin: 0 auto	"></div>

	<section class="sec-logo" style="text-align: center;margin-bottom: 30px; position: relative">

		<img id="resp_logo" src="https://artsoldasobral.com.br/static/img/art_logo.png"  style="height: 240px" alt="Arte Solda">

	</section>

<!--	<section class="sec-standard" style="background-color: white;padding-top: 20px;padding-bottom: 20px;color: #ff6600;text-align: center;">-->

<!--		<h1 style="font-family: Helvetica;">Muito obrigado pelo interesse em nosso MBA em Gerenciamento de Projetos.</h1>-->

<!--	</section>-->

	<section class="sec-body" style="position: relative; padding-top: 50px; padding-left: 50px; padding-right: 50px; font-family: Helvetica;font-size: 18px;text-align: justify; color: #ff6600; line-height: 30px;">

		<p>Olá '.$first. '<p>
		<p>Obrigado pelo interesse no nosso portfólio. Mais do que um arquivo com todos o melhor dos nossos trabalhos, este material é a prova do nosso comprometimento com o desejo de realização dos nosso parceiros e clientes.</p>



	</section>

	<section class="sec-btn" style="position: relative;font-family: Helvetica;font-size: 18px; text-align: justify;color: #484848;line-height: 30px;text-align: center;" >

		<p style="text-align: center; color: #ff6600; margin-top: 30px; margin-bottom: 50px"><b>Através deste link abaixo, você poderá fazer o download do material. </b></p>


		<div style="border-radius: 20px;padding: 8px 10px;border: black solid 1px;cursor: pointer;background-color: #ff6600;color: white;font-size: 16px; width: 30%; display: inline">
			<a href="https://artsoldasobral.com.br/static/portfolio_artsolda.pdf" style="text-decoration: none; color: white; padding: 30px">Clique aqui para baixar o nosso portfólio</a>
		</div>
		<p style="color: #ff6600; font-size: 15px; margin-top: 30px">Conhece alguém que poderia se interessar por esse material? Compartilhe!<p>

		<p><a href="https://www.artsoldasobral.com.br" style="color: rgba(255,255,255,0.37);">https://www.artsoldasobral.com.br</a></p>
		<ul style="list-style-type: none; padding: 0; margin-top: 20px">
			<li style="display: inline-block"><a href="tel: +5588999341483" style="text-decoration: none; color: #ffffffb8; font-size: 15px">(88) 9.9934-1483</a></li>
		</ul>

	</section>

</div>
</body>
</html>

';
				break;

		}
		if ($control == 2){
			$this->enviaEmail('artsoldasobral@gmail.com', $mensagem, "Um novo contato!");
			$this->admin_model->insere_usuario($name, $email, $tel, $control);
			redirect(base_url('sucesso'));
		}else{
			$this->enviaEmail($email, $mensagem);
			$this->admin_model->insere_usuario($name, $email, $tel, $control);
			redirect(base_url('sucesso'));
		}

	}

	public function sucesso(){
		$this->load->view('pages/sucesso');
	}
}
