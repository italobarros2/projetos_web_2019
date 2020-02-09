<!-- slider_area_start -->



<div class="slider_area">
	<div class="form-abs offset-lg-7 col-lg-5" style="padding: 100px; background: url(<?=base_url('static/img/arcoiris/bg.png')?>) -20px; position: absolute; z-index: 8; height: -webkit-fill-available; max-height: 900px">
		<div class="imgs">
			<img src="<?=base_url('static/img/arcoiris/arcoiris.png')?>" data-aos="fade-down" data-aos-duration="1000" alt="" style="right: 45px; top: 20px; height: 150px">
			<img src="<?=base_url('static/img/arcoiris/BONECO.png')?>" data-aos="fade-down" data-aos-duration="1000" alt="" style="right: 35px; bottom: 170px; height: 200px; ">
			<img src="<?=base_url('static/img/arcoiris/flors.png')?>" data-aos="fade-up" data-aos-duration="2000" alt="" style="bottom: 40px; right: 72px">
			<img src="<?=base_url('static/img/arcoiris/ABELHA.png')?>" data-aos="fade-left" data-aos-duration="1500" alt="" style="top: 10px;">
		</div>
		<div>
		
			<form action="<?=base_url('processo')?>" style="margin-top: 17px" method="post">
				<div class="row">
					<h2 style="font-size: 33px; font-weight: 700; color: white">Saiba tudo das informações de matricula e material escolar!</h2>
					<p class="no-pad" style="color: white; font-weight: bold; line-height: 22px;">Informe seus dados e aguarde <br>nossa conexão Arco-Íris</p>
					<div class="col-lg-12 no-pad">
						<input type="text" name="nome" class="form-imputs" required placeholder="Nome do responsável: ">
					</div>
					<div class="col-lg-12 no-pad">
						<input name="tel" pattern="[0-9.].{8,16}.[/\(([^)]+)\)/]"  class="form-imputs" required placeholder="Celular: " OnKeyPress="formatar('###)#.####-####', this)" type="tel">
					</div>
					<div class="col-lg-12 no-pad">
						<input type="email" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" class="form-imputs" placeholder="E-mail: ">
					</div>
					<div class="col-lg-12 no-pad">
						<select class="select-ano" style="width: 60%" data-size="3" name="turma">
							<option value="" disabled selected>Ano pretendido</option>
							<?php $i = 1; foreach ($turmas as $turma){
								echo '<option value="'.$i.'">'.$turma->nome_turma.'</option>';
								$i++;
							}?>
						</select>
					</div>
					<div class="col-lg-12 no-pad">
						<div style="width: 60%">
							<button type="submit" style="cursor:pointer;box-shadow: 0 5px #a49978; border: none; border-radius: 10px; color: #C42F59; padding: 8px 28px; background: #fff4ca; margin-top: 20px; font-weight: bold; float: right">BAIXE</button>
						</div>
					</div>
				</div>
			</form>
		</div>

	</div>
	<div class="slider_active owl-carousel">
		<div class="single_slider d-flex align-items-center justify-content-center slider_bg_1" style="background: url(<?=base_url('static/img/arcoiris/car_1.png')?>)0 -80px no-repeat; background-size: cover">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
					</div>
				</div>
			</div>
		</div>
		<div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2" style="background: url(<?=base_url('static/img/arcoiris/car_2.png')?>)0 -80px no-repeat; background-size: cover">>
			<div class="container">
				<div class="row">
					<div class="col-xl-12">

					</div>
				</div>
			</div>
		</div>
		<div class="single_slider d-flex align-items-center justify-content-center slider_bg_1" style="background: url(<?=base_url('static/img/arcoiris/car_3.png')?>) no-repeat; background-size: cover">>
			<div class="container">
				<div class="row">
					<div class="col-xl-12">

					</div>
				</div>
			</div>
		</div>
		<div class="single_slider  d-flex align-items-center justify-content-center slider_bg_2" style="background: url(<?=base_url('static/img/arcoiris/car_4.png')?>)no-repeat; background-size: cover">>
			<div class="container">
				<div class="row">
					<div class="col-xl-12">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- slider_area_end -->

<!-- offers_area_start -->
<div class="offers_area" style="padding-top: 100px; padding-bottom: 80px">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="imgs">
					<img src="<?=base_url('static/img/arcoiris/SOL.png')?>" alt="" data-aos="fade-down" data-aos-duration="1000" style="right:150px; bottom: 60px; height: 150px;">
					<img src="<?=base_url('static/img/arcoiris/PASSARINHO.png')?>" alt="" data-aos="fade-right" data-aos-duration="2000" style="bottom: 100px; z-index: -1; height: 100px;">
					<img src="<?=base_url('static/img/arcoiris/NUVENS.png')?>" alt="" data-aos="fade-down" data-aos-duration="1000" style="top: 220px; right: 400px; height: 100px">
				</div>
				<div style="margin-bottom: 50px">
					<h3 style="font-size: 46px; line-height: 40px; color: #515151; margin-top: 20px; font-family: cursive; font-weight: bold">Escola <span style="color: purple">A</span><span style="color: darkviolet">r</span><span style="color: #0066cb">c</span><span style="color: #18D2E9">o</span>-<span style="color:#69CA3C;">Í</span><span style="color: #F4F400;">r</span><span style="color: #F38E34">i</span><span style="color: #F5120B">s</span><br>
						<span style="font-size: 25px; font-family: cursive;">Porque todo começo precisa ser bem feito</span>
					</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p style="font-weight: 500">Ser um espaço educativo, criativo e democrático que promova o desenvolvimento integral de crianças, através do ensino crítico dos conhecimentos historicamente produzidos pela humanidade,
					baseado na valorização do pensamento da criança, incentivando a formação de pessoas participativas e cooperativas.</p>
			</div>
		</div>
	</div>
</div>
<!-- offers_area_end -->

<!-- video_area_start -->
<div class="video_area video_bg overlay" style="padding: 0; background: url(<?=base_url('static/img/arcoiris/parallax.png')?>)" data-stellar-background-ratio="0.5" data-stellar-horizontal-offset="-1200" data-stellar-vertical-offset="2000">
	<div class="video_area_inner text-center" style="padding: 150px">

	</div>
</div>
<!-- video_area_end -->

<!-- about_area_start -->
<div class="about_area" style="padding-top: 100px; padding-bottom: 80px">
	<div class="container">
		<div class="row">
			<div class="col-xl-7 col-lg-7">
				<div class="about_thumb2 d-flex">
					<div class="img_1">
						<img src="<?=base_url('static/img/arcoiris/infantil.png')?>" alt="">
					</div>
				</div>
			</div>
			<div class="col-xl-5 col-lg-5">
				<div class="about_info">
					<div class="section_title mb-20px">
						<h3 style="font-family: cursive; font-weight: bolder; color: #C42F59">Berçário</h3>
					</div>
					<p style="font-weight: 500">A novidade para 2020 é que agora recebemos crianças a partir de 6 meses. Um espaço com segurança, confiança e autonomia para ajudar os pequenos a descobrir o mundo por meio das experiências diárias. Um ambiente rico em carinho, acolhimento e amor. </p>
					<div class="imgs">
						<img src="<?=base_url('static/img/arcoiris/SOL2.png')?>" alt="" style="right:30px; bottom: 60px; height: 160px;" data-aos="zoom-in" data-aos-duration="1500">
						<img src="<?=base_url('static/img/arcoiris/CASA.png')?>" alt="" style="z-index: -1; height: 140px; bottom: 0" data-aos="zoom-in" data-aos-duration="500">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="about_area" style="padding-top: 100px; padding-bottom: 80px">
	<div class="container">
		<div class="row">
			<div class="col-xl-5 col-lg-5">
				<div class="about_info">
					<div class="section_title mb-20px">
						<h3 style="font-family: cursive; font-weight: bolder; color: #C42F59">Educação Infantil</h3>
					</div>
					<p style="font-weight: 500">É o início da relação das crianças com o mundo. É a fase de construção de suas identidades, investigação e das manifestações de afeto, da expressão criativa e solidariedade. A Educação Infantil marca o começo de uma aprendizagem significativa que ecoará por todos os anos de suas vidas.</p>
					<div class="imgs">
						<img src="<?=base_url('static/img/arcoiris/GATO.png')?>" alt="" style="z-index: -1; height: 115px; bottom: 0; right: 20px" data-aos="zoom-in" data-aos-duration="500">
						<img src="<?=base_url('static/img/arcoiris/PATO.png')?>" alt="" style="bottom:15px; height: 140px;" data-aos="zoom-in" data-aos-duration="1500">
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-7">
				<div class="about_thumb2 d-flex">
					<div class="img_1">
						<img src="<?=base_url('static/img/arcoiris/infantil.png')?>" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="about_area" style="padding-top: 100px; padding-bottom: 80px">
	<div class="container">
		<div class="row">
			<div class="col-xl-7 col-lg-7">
				<div class="about_thumb2 d-flex">
					<div class="img_1">
						<img src="<?=base_url('static/img/arcoiris/fundamental.png')?>" alt="">
					</div>
				</div>
			</div>
			<div class="col-xl-5 col-lg-5">
				<div class="about_info">
					<div class="section_title mb-20px">
						<h3 style="font-family: cursive; font-weight: bolder; color: #C42F59">Ensino Fundamental</h3>
					</div>
					<p style="font-weight: 500">O momento é explorar diferentes culturas e linguagens, ampliando a bagagem intelectual, cultural, social e política.</p>
					<p style="font-weight: 500">Nosso ponto de partida é para que os alunos mostrem sua voz em todo o processo de desenvolvimento, repercutindo em sua relação com a sociedade e ao mundo.</p>
					<div class="imgs">
						<img src="<?=base_url('static/img/arcoiris/SOL3.png')?>" alt="" style="right:20px; bottom: 60px; height: 150px; z-index: -1; bottom: 0" data-aos="zoom-in" data-aos-duration="1500">
						<img src="<?=base_url('static/img/arcoiris/BRABULETA.png')?>" alt="" style="z-index: -1; height: 110px; bottom: 0" data-aos="zoom-in" data-aos-duration="500">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="offers_area" style="padding-top: 100px; padding-bottom: 80px">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class=" mb-100">
					<h3 style="font-size: 46px; line-height: 40px; color: #1F1F1F; margin-top: 20px; font-family: 'Arial Black'; text-align: center; font-family: cursive; color: #C42F59; font-weight: bold">Conheça nossos projetos permanentes a escola
					</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<!-- instragram_area_start -->
				<div class="instragram_area">
					<div class="single_instagram" style="width: 33.3%; height: 290px">
						<img src="<?=base_url('static/img/arcoiris/crescer.png')?>" height="100%" alt="">
						<div class="ovrelay">
							<a href="javascript:void();" style="cursor: initial">
								<h1 style="color: wheat; font-size: 24px; font-family: cursive; background: #000000a1">Comer, Comer,<br>
									é o melhor para poder crescer </h1>
								<p style="text-align: justify; padding: 10px; background: #000000a1;color: wheat;">A alimentação é uma extensão do projeto pedagógico da Escola Arco-Íris. Toda alimentação é preparada na escola, com rigor de higiene e carinho, priorizando uma composição equilibrada e natural.</p>
							</a>
						</div>
					</div>
					<div class="single_instagram" style="width: 33.3%; height: 290px">
						<img src="<?=base_url('static/img/arcoiris/ler.png')?>" height="100%" alt="">
						<div class="ovrelay">
							<a href="javascript:void();" style="cursor: initial">
								<h1 style="color: wheat; font-size: 24px; font-family: cursive; background: #000000a1">Sabor das Letras</h1>
								<p style="text-align: justify; padding: 10px; background: #000000a1;color: wheat;">Um projeto que permite ao aluno conhecer de forma completa vida e obras dos autores. Um instrumento responsável por mobilizar habilidades como a leitura e escrita. A proposta é estimular a formação de sujeitos críticos que interpretem o mundo e sejam capazes de fazer inter-relações para modificá-los.</p>
							</a>
						</div>
					</div>
					<div class="single_instagram" style="width: 33.3%; height: 290px">
						<img src="<?=base_url('static/img/arcoiris/legal.png')?>" height="100%" alt="">
						<div class="ovrelay">
							<a href="javascript:void();" style="cursor: initial">
								<h1 style="color: wheat; font-size: 24px; font-family: cursive; background: #000000a1">O legal é ser diferente</h1>
								<p style="text-align: justify; padding: 10px; background: #000000a1;color: wheat;">O foco é ensinar a importância do respeito que se deve ter com as diferenças dos colegas no ambiente escolar e na sociedade.</p>
							</a>
						</div>
					</div>

				</div>
				<!-- instragram_area_end -->
			</div>

		</div>
	</div>
</div>
<!-- about_area_end -->

<!-- features_room_startt -->
<div class="features_room">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="imgs">
					<img src="<?=base_url('static/img/arcoiris/arvore_b.png')?>" alt="" style="right:20px; height: 150px; z-index: -1;" data-aos="fade-up" data-aos-duration="1000">
					<img src="<?=base_url('static/img/arcoiris/flors_2.png')?>" alt="" style="z-index: -1; height: 65px; bottom: 0; right: 170px;" data-aos="fade-up" data-aos-duration="1000">
				</div>
				<div class="section_title text-center mb-100">
					<h3 style="font-size: 46px; line-height: 40px; color: #C42F59; margin-top: 20px; font-family: cursive; font-weight: bold; text-align: left">Período Integral - Tarde em Cores</h3>
				</div>
				<div class="imgs">
					<img src="<?=base_url('static/img/arcoiris/CARRO.png')?>" alt="" style="right:400px; height: 80px; z-index: -1; top: 230px;" data-aos="fade-right" data-aos-duration="3000">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12" style="margin-bottom: 50px">
				<p style="font-weight: 500">Os nossos alunos vão além de suas fronteiras de aprendizagem. O Período Integral é dedicado para a participação de atividades físicas e artísticas, orientação de tarefas, tudo sob o olhar e cuidados de nossos professores. Um espaço para questionar o mundo por meio de projetos e ainda sobra tempo para descansar e se divertir em um espaço acolhedor.</p>
			</div>
		</div>
	</div>
	<div class="rooms_here">
		<div class="single_rooms" style="background: none">
			<div class="room_thumb">
				<img src="<?=base_url('static/img/arcoiris/garoto.png')?>" alt="">
			</div>
		</div>
		<div class="single_rooms" style="background: none">
			<div class="room_thumb">
				<img src="<?=base_url('static/img/arcoiris/leitura.png')?>" alt="">
			</div>
		</div>
		<div class="single_rooms" style="background: none">
			<div class="room_thumb">
				<img src="<?=base_url('static/img/arcoiris/brincando.png')?>" alt="">
			</div>
		</div>
		<div class="single_rooms" style="background: none">
			<div class="room_thumb">
				<img src="<?=base_url('static/img/arcoiris/musica.png')?>" alt="">
			</div>
		</div>
	</div>
</div>
<!-- features_room_end -->

<!-- footer -->
<footer class="footer">
	<div class="footer_top" style="padding-bottom: 80px">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-md-6 col-lg-4">
					<div class="footer_widget">
						<h3 class="footer_title">
							Entre em contato
						</h3>
						<p class="footer_text"><i class="fa fa-map-marker" style="margin-right: 10px" aria-hidden="true"></i>R. Dep. João Frederico Ferreira Gomes, 250<br>Junco, Sobral, Ceará.</br></p>
						<a class="footer_text" href="tel: +558836145210" style="text-decoration: none; color: #BABABA"><i class="fa fa-phone" style="margin-right: 10px" aria-hidden="true"></i>
								(88) 3614-5210</a>
					</div>
				</div>
				<div class="col-xl-6 col-md-6 col-lg-6 offset-lg-2">
					<div class="footer_widget">
						<div class="map-wrap" style="width:100%; height: 250px; border: 2px solid #000000f0" id="map"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copy-right_text">
		<div class="container">
			<div class="footer_border" style="padding-bottom: 15px"></div>
			<div class="row">
				<div class="col-lg-4 offset-lg-4">
					<div class="socail_links" style="text-align: center">
						<h3 style="margin-bottom: 15px; color: #BABABA;">Nossas redes sociais</h3>
						<ul>
							<li>
								<a href="https://www.facebook.com/arcoirissobral/">
									<i class="fa fa-facebook-square"></i>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/arcoirissobral/">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- link that opens popup -->

<!-- form itself end-->
<form id="test-form" class="white-popup-block mfp-hide">
	<div class="popup_box ">
		<div class="popup_inner">
			<h3>Check Availability</h3>
			<form action="#">
				<div class="row">
					<div class="col-xl-6">
						<input id="datepicker" placeholder="Check in date">
					</div>
					<div class="col-xl-6">
						<input id="datepicker2" placeholder="Check out date">
					</div>
					<div class="col-xl-6">
						<select class="form-select wide" id="default-select" class="">
							<option data-display="Adult">1</option>
							<option value="1">2</option>
							<option value="2">3</option>
							<option value="3">4</option>
						</select>
					</div>
					<div class="col-xl-6">
						<select class="form-select wide" id="default-select" class="">
							<option data-display="Children">1</option>
							<option value="1">2</option>
							<option value="2">3</option>
							<option value="3">4</option>
						</select>
					</div>
					<div class="col-xl-12">
						<select class="form-select wide" id="default-select" class="">
							<option data-display="Room type">Room type</option>
							<option value="1">Laxaries Rooms</option>
							<option value="2">Deluxe Room</option>
							<option value="3">Signature Room</option>
							<option value="4">Couple Room</option>
						</select>
					</div>
					<div class="col-xl-12">
						<button type="submit" class="boxed-btn3">Check Availability</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</form>
