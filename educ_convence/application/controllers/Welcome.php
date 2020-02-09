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
			'link' => "https://pos-educ.com.br/static/img/logo_educ_y_g.png",
			'details' => "",
			'cursos' => $this->pages_model->consulta_cursos()
		);
		$foot = array(
			'wpp' => "https://api.whatsapp.com/send?phone=5588992249386&text=Olá,%20quero%20mais%20informações%20sobre%20as%20atividades%20de%20pós-graduação%20da%20Educ,%20por%20favor."
		);
		$head = array(
			'fb_pixel'	=>  "<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '239322330325384');
        fbq('track', 'PageView');
							</script>
							<noscript><img height=\"1\" width=\"1\" style=\"display:none\"src=\"https://www.facebook.com/tr?id=239322330325384&ev=PageView&noscript=1\"/></noscript>"
		);
		$this->load->view('templates/header', $head);
		$this->load->view('templates/nav_home', $data);
		$this->load->view('pages/home');
		$this->load->view('templates/footer', $foot);
	}

	public function mba()
	{
		$data = array(
			'link' => "https://pos-educ.com.br/static/img/background.png",
			'details' => "mba_class",
			'cursos' => $this->pages_model->consulta_cursos()
		);
		$foot = array(
			'wpp' => "https://api.whatsapp.com/send?phone=5588992249386&text=Olá,%20quero%20mais%20informações%20do%20MBA%20em%20Gerenciamento%20de%20Projetos%20da%20Educ."
		);
		$head = array(
			'fb_pixel'	=>  "<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '239322330325384');
        fbq('track', 'PageView');
							</script>
							<noscript><img height=\"1\" width=\"1\" style=\"display:none\"src=\"https://www.facebook.com/tr?id=239322330325384&ev=PageView&noscript=1\"/></noscript>"
		);
		$this->load->view('templates/header', $head);
		$this->load->view('templates/nav', $data);
		$this->load->view('pages/mba');
		$this->load->view('templates/footer', $foot);
	}

	public function neuro(){
		$data = array(
			'link' => "https://pos-educ.com.br/static/img/background-pedagogy5.png",
			'details' => "neuro_class",
			'cursos' => $this->pages_model->consulta_cursos()
		);
		$foot = array(
			'wpp' => "https://api.whatsapp.com/send?phone=5588992249386&text=Olá,%20quero%20mais%20informações%20sobre%20a%20pós-graduação%20em%20Neuropsicopedagogia%20da%20Educ."
		);
		$head = array(
			'fb_pixel'	=>  "<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '239322330325384');
        fbq('track', 'PageView');
							</script>
							<noscript><img height=\"1\" width=\"1\" style=\"display:none\"src=\"https://www.facebook.com/tr?id=239322330325384&ev=PageView&noscript=1\"/></noscript>"
		);
		$this->load->view('templates/header', $head);
		$this->load->view('templates/nav', $data);
		$this->load->view('pages/neuro');
		$this->load->view('templates/footer', $foot);
	}

	public function music(){
		$data = array(
			'link' => "https://pos-educ.com.br/static/img/background-musictherapy.png",
			'details' => "music_class",
			'cursos' => $this->pages_model->consulta_cursos()
		);
		$foot = array(
			'wpp' => "https://api.whatsapp.com/send?phone=5588992249386&text=Olá,%20quero%20mais%20informações%20sobre%20a%20pós-graduação%20em%20Musicoterapia%20da%20Educ."
		);
		$head = array(
			'fb_pixel'	=>  "<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '239322330325384');
        fbq('track', 'PageView');
							</script>
							<noscript><img height=\"1\" width=\"1\" style=\"display:none\"src=\"https://www.facebook.com/tr?id=239322330325384&ev=PageView&noscript=1\"/></noscript>"
		);
		$this->load->view('templates/header', $head);
		$this->load->view('templates/nav', $data);
		$this->load->view('pages/music');
		$this->load->view('templates/footer', $foot);
	}

	public function sucesso(){
		$foot = array(
			'wpp' => "https://api.whatsapp.com/send?phone=5588992249386&text=Olá,%20quero%20mais%20informações%20sobre%20as%20atividades%20de%20pós-graduação%20da%20Educ,%20por%20favor."
		);
		if($this->session->userData('apto')){
			$head = array(
			'fb_pixel'	=>  "<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '239322330325384');
        fbq('track', 'CompleteRegistration');
							</script>
							<noscript><img height=\"1\" width=\"1\" style=\"display:none\"src=\"https://www.facebook.com/tr?id=239322330325384&ev=PageView&noscript=1\"/></noscript>"
		);
			$this->load->view('templates/header', $head);
			$this->load->view('templates/nav');
			$this->load->view('pages/download');
			$this->load->view('templates/footer', $foot);
		}else{
//			redirect(base_url(''));
			$head = array(
			'fb_pixel'	=>  "<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '239322330325384');
        fbq('track', 'CompleteRegistration');
							</script>
							<noscript><img height=\"1\" width=\"1\" style=\"display:none\"src=\"https://www.facebook.com/tr?id=239322330325384&ev=PageView&noscript=1\"/></noscript>"
		);
			$this->load->view('templates/header', $head);
//			$this->load->view('templates/nav');
			$this->load->view('pages/download');
			$this->load->view('templates/footer', $foot);
		}

	}

	public function sucesso_contato(){
		$foot = array(
			'wpp' => "https://api.whatsapp.com/send?phone=5588992249386&text=Olá,%20quero%20mais%20informações%20sobre%20as%20atividades%20de%20pós-graduação%20da%20Educ,%20por%20favor."
		);
		if($this->session->userData('apto')){
			$head = array(
			'fb_pixel'	=>  "<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '239322330325384');
        fbq('track', 'CompleteRegistration');
							</script>
							<noscript><img height=\"1\" width=\"1\" style=\"display:none\"src=\"https://www.facebook.com/tr?id=239322330325384&ev=PageView&noscript=1\"/></noscript>"
		);
			$this->load->view('templates/header', $head);
			$this->load->view('templates/nav');
			$this->load->view('pages/sucesso_contato');
			$this->load->view('templates/footer', $foot);
		}else{
//			redirect(base_url(''));
			$head = array(
			'fb_pixel'	=>  "<script>!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '239322330325384');
        fbq('track', 'CompleteRegistration');
							</script>
							<noscript><img height=\"1\" width=\"1\" style=\"display:none\"src=\"https://www.facebook.com/tr?id=239322330325384&ev=PageView&noscript=1\"/></noscript>"
		);
			$this->load->view('templates/header', $head);
//			$this->load->view('templates/nav');
			$this->load->view('pages/sucesso_contato');
			$this->load->view('templates/footer', $foot);
		}

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
		switch ($curso){
			case 4:
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

<div class="card" style="background-color: #001123;margin: auto;margin-top: 50px; height: auto;width: 715px;padding-top: 40px; border-style: ridge; border-width: 3px; padding-bottom: 40px;">

	<section class="sec-logo" style="text-align: center;margin-bottom: 30px;">

		<img id="resp_logo" src="https://pos-educ.com.br/static/img/logo_educ_y.png"  style="height: 130px" alt="Pos-Educ">

	</section>

	<section class="sec-standard" style="background-color: #161a4e;padding-top: 20px;padding-bottom: 20px;color: gold;text-align: center;">

		<h1 style="font-family: Helvetica;">Muito obrigado pelo interesse em nosso MBA em Gerenciamento de Projetos.</h1>

	</section>

	<section class="sec-body" style="padding-top: 50px; padding-left: 50px; padding-right: 50px; font-family: Helvetica;font-size: 18px;text-align: justify; color: #fff; line-height: 30px;">

		<p>Olá '.$first.', como vai?<p>
		<p>O MBA em Gerenciamento de Projetos da Educ permitirá ao profissional conhecer as
		áreas de conhecimento que caracterizam um projeto, os grupos de processos de gerenciamento de projetos e suas inter-relações.</p>



	</section>

	<section class="sec-btn" style="font-family: Helvetica;font-size: 18px; text-align: justify;color: #484848;line-height: 30px;text-align: center;" >

		<p style="text-align: center; color: gold; margin-top: 30px; margin-bottom: 50px"><b>Baixe agora o Guia do Curso através do link abaixo. </b></p>


		<div style="margin-bottom: 30px; border-radius: 0%;border: 1px outset #FFD700;background-color: #040d17;display: inline;padding-top: 15px;padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
			<a href="https://pos-educ.com.br/static/guia_mba.pdf" style="text-decoration: none; color: #FFD700; padding: 30px">BAIXAR GUIA DO CURSO</a>
		</div>
		<p style="color: #ffffffb8; font-size: 15px; margin-top: 30px">Disponível até o encerramento das inscrições<br>Espero que goste!<p>

		<p><a href="https://www.pos-educ.com.br" style="color: #484848;">www.pos-educ.com.br</a></p>
		<ul style="list-style-type: none; padding: 0; margin-top: 20px">
			<li style="display: inline-block; margin-right: 5px"><a href="tel: +558836132034" style="text-decoration: none; color: #ffffffb8; font-size: 15px">(88) 3613-2034</a></li>
			<li style="display: inline-block"><a href="tel: +5588992249386" style="text-decoration: none; color: #ffffffb8; font-size: 15px">(88) 9.9224-9386</a></li>
		</ul>

	</section>

</div>
</body>
</html>';
				break;
			case 2:
				$mensagem = '<html lang="pt-br">
<body style="background-color: #5d616f;height: 100%; padding-top: 20px; padding-bottom: 20px">

<div class="card" style="background-color: #001123;margin: auto;margin-top: 50px; height: auto;width: 715px;padding-top: 40px; border-style: ridge; border-width: 3px; padding-bottom: 40px;">

	<section class="sec-logo" style="text-align: center;margin-bottom: 30px;">

		<img id="resp_logo" src="https://pos-educ.com.br/static/img/logo_educ_y.png"  style="height: 130px" alt="Pos-Educ">

	</section>

	<section class="sec-standard" style="background-color: #161a4e;padding-top: 20px;padding-bottom: 20px;color: gold;text-align: center;">

		<h1 style="font-family: Helvetica;">Muito obrigado pelo interesse em nosso curso de Neuropsicopedagogia.</h1>

	</section>

	<section class="sec-body" style="padding-top: 50px; padding-left: 50px; padding-right: 50px; font-family: Helvetica;font-size: 18px;text-align: justify; color: #fff; line-height: 30px;">

		<p>Olá '.$first.', como vai?<p>
		<p>O curso de Neuropsicopedagogia busca conduzir de forma prática e aplicada, profissionais ligados à área da saúde e educação. É ideal para quem deseja se destacar em sua carreira e crescer no âmbito profissional e pessoal em instituições de ensino, empresas, clínicas e hospitais.</p>



	</section>

	<section class="sec-btn" style="font-family: Helvetica;font-size: 18px; text-align: justify;color: #484848;line-height: 30px;text-align: center;" >

		<p style="text-align: center; color: gold; margin-top: 30px; margin-bottom: 50px"><b>Baixe agora o Guia do Curso através do link abaixo. </b></p>


		<div style="margin-bottom: 30px; border-radius: 0%;border: 1px outset #FFD700;background-color: #040d17;display: inline;padding-top: 15px;padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
			<a href="https://pos-educ.com.br/static/guia_psico.pdf" style="text-decoration: none; color: #FFD700; padding: 30px">BAIXAR GUIA DO CURSO</a>
		</div>
		<p style="color: #ffffffb8; font-size: 15px; margin-top: 30px">Disponível até o encerramento das inscrições<br>Espero que goste!<p>

		<p><a href="https://www.pos-educ.com.br" style="color: #484848;">www.pos-educ.com.br</a></p>
		<ul style="list-style-type: none; padding: 0; margin-top: 20px">
			<li style="display: inline-block; margin-right: 5px"><a href="tel: +558836132034" style="text-decoration: none; color: #ffffffb8; font-size: 15px">(88) 3613-2034</a></li>
			<li style="display: inline-block"><a href="tel: +5588992249386" style="text-decoration: none; color: #ffffffb8; font-size: 15px">(88) 9.9224-9386</a></li>
		</ul>

	</section>

</div>
</body>
</html>';
				break;
			case 3:
				$mensagem = '<html lang="pt-br">
<body style="background-color: #5d616f;height: 100%; padding-top: 20px; padding-bottom: 20px">

<div class="card" style="background-color: #001123;margin: auto;margin-top: 50px; height: auto;width: 715px;padding-top: 40px; border-style: ridge; border-width: 3px; padding-bottom: 40px;">

	<section class="sec-logo" style="text-align: center;margin-bottom: 30px;">

		<img id="resp_logo" src="https://pos-educ.com.br/static/img/logo_educ_y.png"  style="height: 130px" alt="Pos-Educ">

	</section>

	<section class="sec-standard" style="background-color: #161a4e;padding-top: 20px;padding-bottom: 20px;color: gold;text-align: center;">

		<h1 style="font-family: Helvetica;">Muito Obrigado pelo interesse em nossa Pós-Graduação em Musicoterapia. </h1>

	</section>

	<section class="sec-body" style="padding-top: 50px; padding-left: 50px; padding-right: 50px; font-family: Helvetica;font-size: 18px;text-align: justify; color: #fff; line-height: 30px;">

		<p>Olá '.$first.', como vai?<p>
		<p>Pós-graduação em Musicoterapia utiliza a música e seus elementos - tom, som, ritmo e harmonia - para promover a melhora da condição de saúde, no tratamento de pacientes com dificuldade físicas, cognitivas e emocionais.</p>



	</section>

	<section class="sec-btn" style="font-family: Helvetica;font-size: 18px; text-align: justify;color: #484848;line-height: 30px;text-align: center;" >

		<p style="text-align: center; color: gold; margin-top: 30px; margin-bottom: 50px"><b>Baixe agora o Guia do Curso através do link abaixo. </b></p>


		<div style="margin-bottom: 30px; border-radius: 0%;border: 1px outset #FFD700;background-color: #040d17;display: inline;padding-top: 15px;padding-left: 10px; padding-right: 10px; padding-bottom: 10px;">
			<a href="https://pos-educ.com.br/static/guia_music.pdf" style="text-decoration: none; color: #FFD700; padding: 30px">BAIXAR GUIA DO CURSO</a>
		</div>
		<p style="color: #ffffffb8; font-size: 15px; margin-top: 30px">Disponível até o encerramento das inscrições<br>Espero que goste!<p>

		<p><a href="https://www.pos-educ.com.br" style="color: #484848;">www.pos-educ.com.br</a></p>
		<ul style="list-style-type: none; padding: 0; margin-top: 20px">
			<li style="display: inline-block; margin-right: 5px"><a href="tel: +558836132034" style="text-decoration: none; color: #ffffffb8; font-size: 15px">(88) 3613-2034</a></li>
			<li style="display: inline-block"><a href="tel: +5588992249386" style="text-decoration: none; color: #ffffffb8; font-size: 15px">(88) 9.9224-9386</a></li>
		</ul>

	</section>

</div>
</body>
</html>';
				break;
		}
		if ($curso == 4){
			$this->enviaEmail('diretoria@educce.com.br', $mensagem, "Um novo contato!");
			$this->admin_model->insere_usuario($name, $email, $tel, $curso);
			redirect(base_url('sucesso_contato'));
		}else{
			$this->enviaEmail($email, $mensagem);
			$this->admin_model->insere_usuario($name, $email, $tel, $curso);
			redirect(base_url('sucesso_contato'));
		}

	}
}
