<html lang="pt" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?=base_url('static/icone.png')?>">
<!--		 Author Meta -->
<!--		<meta name="author" content="colorlib">-->
		<!-- Meta Description -->
<!--		<meta name="description" content="">-->
		<!-- Meta Keyword -->
<!--		<meta name="keywords" content="">-->
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Art Solda</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700" rel="stylesheet">
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="<?=base_url('static/css/linearicons.css')?>">
		<link rel="stylesheet" href="<?=base_url('static/css/font-awesome.min.css')?>">
		<link rel="stylesheet" href="<?=base_url('static/css/bootstrap.css')?>">
		<link rel="stylesheet" href="<?=base_url('static/template/tough/css/open-iconic-bootstrap.min.css')?>">
		<link rel="stylesheet" href="<?=base_url('static/template/tough/css/animate.css')?>">

<!--		<link rel="stylesheet" href="--><?//=base_url('static/template/tough/css/aos.css')?><!--">-->
		<link rel="stylesheet" href="<?=base_url('static/css/magnific-popup.css')?>">
		<link rel="stylesheet" href="<?=base_url('static/css/nice-select.css')?>">
		<link rel="stylesheet" href="<?=base_url('static/css/animate.min.css')?>">
		<link rel="stylesheet" href="<?=base_url('static/css/owl.carousel.css')?>">

		<link rel="stylesheet" href="<?=base_url('static/template/tough/css/flaticon.css')?>">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="stylesheet" href="<?=base_url('static/template/tough/css/ionicons.min.css')?>">
		<link rel="stylesheet" href="<?=base_url('static/template/tough/css/icomoon.css')?>">
<!--		<link rel="stylesheet" href="--><?//=base_url('static/template/tough/css/style.css')?><!--">-->
		<link rel="stylesheet" href="<?=base_url('static/css/main.css')?>">
		<link rel="stylesheet" href="<?=base_url('static/css/perso.css')?>">
		<!-- Facebook Pixel Code -->
		<script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '693831224432320');
            fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
					   src="https://www.facebook.com/tr?id=693831224432320&ev=PageView&noscript=1"
			/></noscript>
		<!-- End Facebook Pixel Code -->
	</head>

	<body>
		<header id="header" id="home">
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
							<a href="tel:+55 88 9 9934 1483" target="_blank">+55 (88) 9.9934-1483</a>
							<a href="mailto:support@colorlib.com" target="_blank">artsoldasobral@gmail.com</a>
						</div>
						<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
							<ul>
								<li><a href="https://www.facebook.com/ART-SOLDA-Sobral-1617963951806754/?ref=br_rs" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://www.instagram.com/artsoldasobraloficial/?hl=pt-br" target="_blank"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container main-menu" style="padding-top: 0">
				<div class="row align-items-center justify-content-between d-flex">
					<div id="logo">
						<a href="#inicio"><img src="<?=base_url('static/img/art_logo.png')?>" height="80px" alt="" title="" /></a>
					</div><!-- #nav-menu-container -->
				</div>
			</div>
		</header><!-- #header -->

		<!-- start banner Area -->
		<section class="banner-area relative" id="inicio" style="background: url('https://artsoldasobral.com.br/static/img/bg_client4.png') no-repeat; background-size: cover ">
			<div class="overlay overlay-bg" style="background-color: #0000004d"></div>
			<div class="container">
				<div class="row fullscreen d-flex">
					<div class="banner-content col-xl-4 col-lg-10 offset-lg-1 col-md-10 offset-md-1 justify-content-center ">
						<form action="<?=base_url('processo')?>" method="post">
							<div class="row" id="card-form" style="">
								<div class="col-md-12">
									<h2 style=" margin-bottom: 30px; text-align: left; color: #ff8402; font-weight: 300">O que podemos fazer pelo seu projeto?<br><span style="font-weight: 100">Baixe nosso portfólio</span>
									</h2>
								</div>

								<div class="col-lg-12 portf_content-i">
									<input type="text" name="name" class="portf_input" placeholder="Seu nome">
								</div>
								<div class="col-lg-12 portf_content-i">
									<input name="email" placeholder="Seu e-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu e-mail'" class="portf_input" required="" type="email">
								</div>
								<div class="col-lg-12 portf_content-i" style="border-right: none;">
									<input name="tel" placeholder="Telefone" required="" pattern="[0-9.].{8,16}.[/\(([^)]+)\)/]" required="" OnKeyPress="formatar('###)#.####-####', this)" type="tel" class="portf_input">
								</div>
								<input type="hidden" value="1" name="control">
								<div class="col-lg-12 portf_content-i" style="border-right: none;">
									<button type="submit" class="portf_submit">Baixar Portfólio</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- End banner Area -->

		<!-- Start service Area -->
<!--		<section class="service-area section-gap" id="apresentacao">-->
<!--			<div class="container">-->
<!--				<div class="row justify-content-center">-->
<!--					<div class="col-md-12 pb-50 header-text text-center">-->
<!--						<h1 class="mb-10"><span style="font-weight: 500">O que a sua imaginação mandar.</span><br>Se impressiona você, a gente faz.</h1>-->
<!--						<p class="p-site">-->
<!--							Conheça mais sobre os trabalhos, profissionais e parceiros que construíram a história de grandes realizações por trás da Art Solda.-->
<!--						</p>-->
<!--					</div>-->
<!--				</div>-->
<!--				<div class="row art-solda-content">-->
<!--					<div class="col-lg-6 video-content">-->
<!--						<div class="about">-->
<!--							<video controls width="100%" height="220px">-->
<!--								<source src="--><?//=base_url('static/video.mp4')?><!--" type="video/mp4">-->
<!--							</video>-->
<!--						</div>-->
<!--					</div>-->
<!--					<div class="col-lg-6 video-content">-->
<!--						<div class="about">-->
<!--							<video controls width="100%" height="220px">-->
<!--								<source src="--><?//=base_url('static/video.mp4')?><!--" type="video/mp4">-->
<!--							</video>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--				-->
<!--			</div>-->
<!--		</section>-->
		<!-- End service Area -->

		<!-- Start gallery Area -->
		<section class="gallery-area pb-120 animated fadeIn" style="margin-top: 100px" id="galeria">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-md-12 pb-40 header-text text-center">
						<h1 class="pb-10">Nossos trabalhos podem impressionar você</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 img-content" data-aos="fade-zoom-in" data-aos-easing="linear" data-aos-duration="400">
						<div class="single-gallery">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="<?=base_url('static/img/ft5.jpeg')?>" alt="">
									<div class="content-details fadeIn-bottom">
										<h3 class="content-title mx-auto"></h3>
										<a href="#contato" class="primary-btn text-uppercase mt-20">Entre em contato</a>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 img-content" data-aos="fade-zoom-in" data-aos-easing="linear" data-aos-duration="600">
						<div class="single-gallery">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="<?=base_url('static/img/ft1.jpeg')?>" alt="">
									<div class="content-details fadeIn-bottom">
										<h3 class="content-title mx-auto"></h3>
										<a href="#contato" class="primary-btn text-uppercase mt-20">Entre em contato</a>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 img-content" data-aos="fade-zoom-in" data-aos-easing="linear" data-aos-duration="400">
						<div class="single-gallery">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="<?=base_url('static/img/ft6.jpg')?>" alt="">
									<div class="content-details fadeIn-bottom">
										<h3 class="content-title mx-auto"></h3>
										<a href="#contato" class="primary-btn text-uppercase mt-20">Entre em contato</a>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-8 img-content" data-aos="fade-zoom-in" data-aos-easing="linear" data-aos-duration="600">
						<div class="single-gallery">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="<?=base_url('static/img/ft3.jpeg')?>"  alt="">
									<div class="content-details fadeIn-bottom">
										<h3 class="content-title mx-auto"></h3>
										<a href="#contato" class="primary-btn text-uppercase mt-20">Entre em contato</a>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-8 img-content" data-aos="fade-zoom-in" data-aos-easing="linear" data-aos-duration="400">
						<div class="single-gallery">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="<?=base_url('static/img/ft12.jpg')?>" alt="">
									<div class="content-details fadeIn-bottom">
										<h3 class="content-title mx-auto"></h3>
										<a href="#contato" class="primary-btn text-uppercase mt-20">Entre em contato</a>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 img-content" data-aos="fade-zoom-in" data-aos-easing="linear" data-aos-duration="600">
						<div class="single-gallery">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="<?=base_url('static/img/ft5x.png')?>" style="" alt="">
									<div class="content-details fadeIn-bottom">
										<h3 class="content-title mx-auto"></h3>
										<a href="#contato" class="primary-btn text-uppercase mt-20">Entre em contato</a>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 img-content" data-aos="fade-zoom-in" data-aos-easing="linear" data-aos-duration="400">
						<div class="single-gallery">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="<?=base_url('static/img/ft7.jpg')?>" alt="">
									<div class="content-details fadeIn-bottom">
										<h3 class="content-title mx-auto"></h3>
										<a href="#contato" class="primary-btn text-uppercase mt-20">Entre em contato</a>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-8 img-content" data-aos="fade-zoom-in" data-aos-easing="linear" data-aos-duration="600">
						<div class="single-gallery">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="<?=base_url('static/img/ft8.jpg')?>"  alt="">
									<div class="content-details fadeIn-bottom">
										<h3 class="content-title mx-auto"></h3>
										<a href="#contato" class="primary-btn text-uppercase mt-20">Entre em contato</a>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-8 img-content" data-aos="fade-zoom-in" data-aos-easing="linear" data-aos-duration="400">
						<div class="single-gallery">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="<?=base_url('static/img/ft10.jpg')?>" style="" alt="">
									<div class="content-details fadeIn-bottom">
										<h3 class="content-title mx-auto"></h3>
										<a href="#contato" class="primary-btn text-uppercase mt-20">Entre em contato</a>
									</div>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 img-content" data-aos="fade-zoom-in" data-aos-easing="linear" data-aos-duration="600">
						<div class="single-gallery">
							<div class="content">
								<a href="#" target="_blank">
									<div class="content-overlay"></div>
									<img class="content-image img-fluid d-block mx-auto" src="<?=base_url('static/img/ft11.jpeg')?>" style="" alt="">
									<div class="content-details fadeIn-bottom">
										<h3 class="content-title mx-auto"></h3>
										<a href="#contato" class="primary-btn text-uppercase mt-20">Entre em contato</a>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="row" style="background: #FF8402; padding: 20px; border-radius: 11px; margin-top: 100px">
					<div class="col-lg-12">
						<form action="<?=base_url('processo')?>" method="post">
							<div class="row" style="">
								<div class="col-md-12">
									<h2 style=" margin-bottom: 30px; color: black; font-weight: 300">O que podemos fazer pelo seu projeto?
										<br>Baixe o nosso portfólio<br><span style="font-weight: 200; font-size: 18px"></span></h2>
								</div>

								<div class="col-lg-3 portf_content">
									<input type="text" name="name" class="portf_input" placeholder="Seu nome">
								</div>
								<div class="col-lg-3 portf_content">
									<input name="email" placeholder="Seu e-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu e-mail'" class="portf_input" required="" type="email">
								</div>
								<div class="col-lg-3 portf_content" style="border-right: none;">
									<input name="tel" placeholder="Telefone" required="" pattern="[0-9.].{8,16}.[/\(([^)]+)\)/]" required="" OnKeyPress="formatar('###)#.####-####', this)" type="tel" class="portf_input">
								</div>
								<input type="hidden" value="1" name="control">
								<div class="col-lg-3 portf_content" style="border-right: none;">
									<button type="submit" class="portf_submit">Baixar Portfólio</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
		<!-- End gallery Area -->



		<!-- Start testimonial Area -->
		<section class="testimonial-area pt-120" style="margin-bottom: 100px" id="depoimentos">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="menu-content pb-70 col-lg-8">
						<div class="title text-center">
							<h1 class="mb-10">Quem já se surpreendeu com a <br>Art <span style="color: #FF8402">Solda</span></h1>
						</div>
					</div>
				</div>
				<div class="row art-solda-content" style="background-color: #0000000a">
					<div class="active-testimonial-carusel">
						<div class="single-testimonial item flex-row">
							<div class="thumb img" style="text-align: center">
								<img class="img-fluid" src="<?=base_url('static/img/depo1.png')?>" alt="" style="height: 70px; width: 70px">
							</div><br>
							<div class="desc">
								<p>
									"Somos parceiros de longas datas! É incrível a evolução da equipe da Art Solda no mercado de Sobral e região. Nos identificamos bastante nos conceitos e valores, pois percebemos nos seus trabalhos uma busca constante por idéias inovadoras! E esse também é o perfil dos projetos desenvolvidos pela STUDIO.INOVE ARQUITETURA."
								</p>
								<h4 mt-30 id="mgp">STUDIO.INOVE ARQUITETURA</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
							</div>
						</div>
						<div class="single-testimonial item flex-row">
							<div class="thumb img" style="text-align: center">
								<img class="img-fluid" src="<?=base_url('static/img/depo2.png')?>" alt="" style="height: 70px; width: 70px">
							</div><br>
							<div class="desc">
								<p>
									Trabalhar com a ART Solda me da uma grande sensação de segurança. Além da garantia de que meus projetos serão executados com todo detalhamento especificado, sempre sou surpreendido com a inovação de quem domina a art da serralheria e solda. E o mais importante é ouvir do cliente que não se arrepende do investinento feito, e tantas vezes a Art Solda é a empresa que define o brilho final do projeto. Obrigado pela liberdade de criação que vcs me dão! Com vocês minha imaginação não encontra barreiras!!!!
								</p>
								<h4 style="margin-top: 85px" id="john">Jonhatan Cavalcante</h4>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End testimonial Area -->
		<section class="contact-page-area section-gap" id="contato">
			<div class="container">
				<div class="row">

					<div class="map-wrap" style="width:100%; height: 445px; border: 2px solid #000000f0" id="map"></div>
					<div class="col-12" style="background: #000000f0; padding: 100px 20px" id="div-prob">
						<div class="title text-center" style="width: 100%; margin-bottom: 70px; display: block">
							<h1 class="mb-10" style="color: #FF8402; font-weight: 400">Contato</h1>
							<p class="p-site" style="color: white; font-weight: 300">
								Solicite um contato ou orçamento preenchendo o formulário abaixo <br>ou entre em contato diretamente através do e-mail ou telefones que seguem.						</p>
						</div>
						<div id="flex-box-form">
							<div class="col-lg-4 d-flex flex-column address-wrap">
								<div class="single-contact-address d-flex flex-row">
									<div class="icon">
										<span class="lnr lnr-home"></span>
									</div>
									<div class="contact-details">
										<h5>Sobral, Ceará</h5>
										<p>
											R. Dep. João Frederico Ferreira Gomes, 1130.
										</p>
									</div>
								</div>
								<div class="single-contact-address d-flex flex-row">
									<div class="icon">
										<span class="lnr lnr-phone-handset"></span>
									</div>
									<div class="contact-details">
										<h5>+55 (88) 9.9934-1483</h5>
										<p>Segunda a Sexta - 7:30 às 18:00</p>
										<p>Sábado - 7:30 às 12:00</p>
									</div>
								</div>
								<div class="single-contact-address d-flex flex-row">
									<div class="icon">
										<span class="lnr lnr-envelope"></span>
									</div>
									<div class="contact-details">
										<h5>artsoldasobral@gmail.com</h5>
										<p>Em breve entraremos em contato.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-8">
								<form action="<?=base_url('processo')?>" method="post" class="contact-form text-right">
									<div class="row">
										<div class="col-lg-6 form-group contact">
											<input name="name" placeholder="Seu nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="portf_input" required="" type="text">

											<input name="email" placeholder="Seu e-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Seu e-mail'" class="portf_input" required="" type="email">

											<input name="tel" placeholder="Telefone" required="" pattern="[0-9.].{8,16}.[/\(([^)]+)\)/]" required="" OnKeyPress="formatar('###)#.####-####', this)" type="tel" class="portf_input">

										</div>
										<div class="col-lg-6 form-group">
											<textarea class="common-textarea form-control" name="comment" placeholder="Mensagem" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										</div>
										<input type="hidden" value="2" name="control">
										<div class="col-lg-12" id="center">
											<div class="alert-msg" style="text-align: left;"></div>
											<button class="portf_submit" style=" width: 25%; font-size: 14px">Enviar mensagem</button>
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<!-- start footer Area -->
		<footer class="ftco-footer ftco-bg-dark ftco-section" style="background: #000000f0;">
			<div class="container">
				<div class="row mb-5 justify-content-center">
					<div class="col-md-5 text-center">
						<div class="ftco-footer-widget mb-3">
							<ul class="ftco-footer-social list-unstyled">
								<a href="https://www.facebook.com/ART-SOLDA-Sobral-1617963951806754/?ref=br_rs"><li style="padding: 15px 20px; border-radius: 100%; background-color: #1b1e21; font-size: 25px; text-align: center; color: #FF8402"><i class="fa fa-facebook"></i></li></a>
								<a href="https://www.instagram.com/artsoldasobraloficial/?hl=pt-br"><li style="padding: 15px 20px; border-radius: 100%; background-color: #1b1e21; font-size: 25px; text-align: center; color: #FF8402"><i class="fa fa-instagram"></i></li></a>
							</ul>
						</div>
						<div class="ftco-footer-widget">
							<h2 class="mb-3" style="color: #FF8402">Entre em contato</h2>
							<p class="email"><a href="mailto:atendimento@artsoldasobral.com">artsoldasobral@gmail.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<a href="https://api.whatsapp.com/send?phone=5588999341483&text=Olá,%20quero%20mais%20informações%20sobre%20os%20serviços%20da%20ArtSoda.%20Por%20favor." class="float" target="_blank">
			<i class="fa fa-whatsapp my-float"></i>
		</a>
		<!-- End footer Area -->

		<script src="<?=base_url('static/js/vendor/jquery-2.2.4.min.js')?>"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="<?=base_url('static/js/vendor/bootstrap.min.js')?>"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT_fG4Wqffzs8RroYTxtaQx0mdi6RRMqY&callback=initMap" type="text/javascript"></script>
		<script src="<?=base_url('static/js/easing.min.js')?>"></script>
		<script src="<?=base_url('static/js/hoverIntent.js')?>"></script>
		<script src="<?=base_url('static/js/superfish.min.js')?>"></script>
		<script src="<?=base_url('static/js/jquery.ajaxchimp.min.js')?>"></script>
		<script src="<?=base_url('static/js/jquery.magnific-popup.min.js')?>"></script>
		<script src="<?=base_url('static/js/owl.carousel.min.js')?>"></script>
		<script src="<?=base_url('static/js/jquery.nice-select.min.js')?>"></script>
		<script src="<?=base_url('static/js/mail-script.js')?>"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
			AOS.init();
		</script>
		<script src="<?=base_url('static/js/main.js')?>"></script>
		<script>
			$('a[href^="#"]').on('click', function(e) {
				e.preventDefault();
				var id = $(this).attr('href'),
					targetOffset = $(id).offset().top;

				$('html, body').animate({
					scrollTop: targetOffset - 100
				}, 1000);
			});
		</script>
		<script>
            //------- Google Map  js --------//

            if (document.getElementById("map")) {
                google.maps.event.addDomListener(window, 'load', init);

                function init() {
                    var mapOptions = {
                        zoom: 16,
                        center: new google.maps.LatLng(-3.6787194,-40.3605513), // New York
                        styles: [{
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#e9e9e9"
                            }, {
                                "lightness": 17
                            }]
                        }, {
                            "featureType": "landscape",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#f5f5f5"
                            }, {
                                "lightness": 20
                            }]
                        }, {
                            "featureType": "road.highway",
                            "elementType": "geometry.fill",
                            "stylers": [{
                                "color": "#ffffff"
                            }, {
                                "lightness": 17
                            }]
                        }, {
                            "featureType": "road.highway",
                            "elementType": "geometry.stroke",
                            "stylers": [{
                                "color": "#ffffff"
                            }, {
                                "lightness": 29
                            }, {
                                "weight": 0.2
                            }]
                        }, {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#ffffff"
                            }, {
                                "lightness": 18
                            }]
                        }, {
                            "featureType": "road.local",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#ffffff"
                            }, {
                                "lightness": 16
                            }]
                        }, {
                            "featureType": "poi",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#f5f5f5"
                            }, {
                                "lightness": 21
                            }]
                        }, {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#dedede"
                            }, {
                                "lightness": 21
                            }]
                        }, {
                            "elementType": "labels.text.stroke",
                            "stylers": [{
                                "visibility": "on"
                            }, {
                                "color": "#ffffff"
                            }, {
                                "lightness": 16
                            }]
                        }, {
                            "elementType": "labels.text.fill",
                            "stylers": [{
                                "saturation": 36
                            }, {
                                "color": "#333333"
                            }, {
                                "lightness": 40
                            }]
                        }, {
                            "elementType": "labels.icon",
                            "stylers": [{
                                "visibility": "off"
                            }]
                        }, {
                            "featureType": "transit",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#f2f2f2"
                            }, {
                                "lightness": 19
                            }]
                        }, {
                            "featureType": "administrative",
                            "elementType": "geometry.fill",
                            "stylers": [{
                                "color": "#fefefe"
                            }, {
                                "lightness": 20
                            }]
                        }, {
                            "featureType": "administrative",
                            "elementType": "geometry.stroke",
                            "stylers": [{
                                "color": "#fefefe"
                            }, {
                                "lightness": 17
                            }, {
                                "weight": 1.2
                            }]
                        }]
                    };
                    var mapElement = document.getElementById('map');
                    var map = new google.maps.Map(mapElement, mapOptions);
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(-3.6787194,-40.3605513),
                        map: map,
                        title: 'Art Solda Sobral'
                    });
                }
            }
		</script>
		<script>
            function formatar(mascara, documento){
                var i = documento.value.length;
                var saida = mascara.substring(0,1);
                var texto = mascara.substring(i);
                if(i == 0){
                    documento.value += "(";
                }else{
                    if(i > 14) {
                        documento.value = documento.value.substring(0, i-1);
                    }else{
                        if (texto.substring(0,1) != saida){
                            documento.value += texto.substring(0,1);
                        }
                    }
                }

            }
		</script>
	</body>
</html>
