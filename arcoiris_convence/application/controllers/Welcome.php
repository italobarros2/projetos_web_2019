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
		$data = array(
			'turmas' => $this->pages_model->consulta_turmas()
		);
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/principal', $data);
		$this->load->view('template/foot');
	}

	public function sucesso(){
		$this->load->view('template/head');
		$this->load->view('template/nav');
		$this->load->view('pages/sucesso');
		$this->load->view('template/foot');
	}

	public function enviaEmail($email = 'italoctb@gmail.com', $informacoes = null, $sub = 1){
		$config = array(
			'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
			'smtp_host' => 'arcoirissobral.com.br',
			'smtp_port' => 465,
			'smtp_user' => 'atendimento@arcoirissobral.com.br',
			'smtp_pass' => 'arcoirissobral',
			'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
			'mailtype' => 'html', //plaintext 'text' mails or 'html'

		);

		$this->email->initialize($config);

		$this->email->from($config['smtp_user'], 'Escola Arco-Íris');
		$this->email->to($email);
//			$this->email->cc('italobarroscontato@gmail.com');
		$this->email->subject('Aqui está o Guia de matricula');
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

	public function tratamento(){
		$name = $this->input->post('nome');
		$first = ' '.strstr($name, ' ', true);
		$email = $this->input->post('email');
		$tel = $this->input->post('tel');
		$curso = $this->input->post('turma');
		$data = array(
			'email' => $email,
			'nome' => $name,
			'tel' => $tel,
			'id_turma' => $curso
		);
		$mensagem = '<!DOCTYPE html>
<html lang="pt-br">
<body style="background-color: #fff4ca;height: 100%; padding-top: 20px; padding-bottom: 20px">

<div class="card" style="background-color: white;margin: 50px auto auto;height: auto;width: 715px;padding-top: 40px; border-style: ridge; border-width: 3px; padding-bottom: 40px; border-color: #a21c23c9">

	<section class="sec-logo" style="text-align: center;margin-bottom: 30px; margin-left: 20px">

		<img id="resp_logo" src="http://localhost/arcoiris_convence/static/img/arcoiris/logo.png"  style="height: 130px" alt="Pos-Educ">

	</section>

	<section class="sec-standard" style="background-color: #a21c23;padding-top: 20px;padding-bottom: 20px;color: #fff4ca;text-align: center;">

		<h1 style="font-family: Helvetica;">Ficamos felizes com o seu interesse em conhecer mais sobre nossa escola.</h1>

	</section>

	<section class="sec-body" style="padding-top: 50px; padding-left: 50px; padding-right: 50px; font-family: Helvetica;font-size: 18px;text-align: justify; color: rgba(5,5,5,0.86); line-height: 30px;">

		<p>Olá'.$first.', tudo bem? <p>
		<p>A Escola Arco-Íris é um ambiente para proporcionar o desenvolvimento integral da criança, em seus aspectos físicos, psicológicos, intelectual e social. Nossos pequenos estão virando “gente grande” e surge um misto de alegria e saudades por “saírem de casa”. Por isso, neste momento é essencial dar a eles uma experiência significativa, segura e acolhedora. </p>



	</section>

	<section class="sec-btn" style="font-family: Helvetica;font-size: 18px; text-align: justify;color: #484848;line-height: 30px;text-align: center;" >

		<p style="text-align: center; color: #a21c23; margin-top: 30px; margin-bottom: 50px"><b>Baixe agora o Guia de matrícula através do link abaixo. </b></p>


		<div style="margin-bottom: 30px; border-radius: 11px;border: 1px outset #a21c23;background-color: #a21c23;display: inline;padding-top: 15px;padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
			<a href="https://arcoirissobral.com.br/static/guia_matricula.pdf" style="text-decoration: none; color:#fff4ca; padding: 30px">BAIXAR GUIA DO CURSO</a>
		</div>
		<p style="color: rgba(16,16,16,0.65); font-size: 15px; margin-top: 30px">Disponível até o encerramento das inscrições<br>Espero que goste!<p>

		<p><a href="https://arcoirissobral.com.br" style="color: #484848;">www.arcoirissobral.com.br</a></p>
		<ul style="list-style-type: none; padding: 0; margin-top: 20px">
			<li style="display: inline-block; margin-right: 5px"><a href="tel:  +558836145210" style="text-decoration: none; color: rgba(16,16,16,0.65); font-size: 15px">(88) 3614-5210</a></li>
		</ul>

	</section>

</div>

</body>
</html>
';
		$this->pages_model->add_lead($data);
		$this->enviaEmail($email, $mensagem);
		redirect(base_url('sucesso'));
	}
}
