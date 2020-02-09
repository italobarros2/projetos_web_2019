<!--================ Start Home Banner Area =================-->
<section class="home_banner_area" id="home" style="background-image: none; padding-top: 150px; padding-bottom: 100px">
	<div class="banner_inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="fix-device banner_content">
						<h2>
							MBA EM GERENCIAMENTO DE PROJETOS  <br>
						</h2>
						<p>
							Invista na formação que é uma das que mais cresce no Brasil e no mundo.
							Potencialize seu futuro e conquiste resultados em sua carreira profissional.
							Gerenciar Projetos é essencial para o sucesso de qualquer empreendimento.
						</p>

						<div class="search_course_wrap">
							<h3 style="color:gold; font-size: 25px">Baixe agora </br>o guia completo do curso.</h3>
							<form action="<?=base_url('processo')?>" class="form_perso form_box justify-content-between w-100" style="padding: 0px" method="post">
								<ul style="list-style-type: none; padding: 0">
									<li style="border-bottom: 1px"><input type="text" required="" placeholder="Nome" class="form-control" name="name" onfocus="this.placeholder = ''"
											   onblur="this.placeholder = 'Nome'"></li>
									<li><input type="text" placeholder="E-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
											   required="" type="email" class="form-control" name="email" onfocus="this.placeholder = ''"
											   onblur="this.placeholder = 'E-mail'"></li>
									<li><input placeholder="Telefone" required="" pattern="[0-9.].{8,16}.[/\(([^)]+)\)/]" required="" OnKeyPress="formatar('###)#.####-####', this)" type="tel" class="form-control" name="tel" onfocus="this.placeholder = ''"
											   onblur="this.placeholder = 'telefone'"></li>
									<input type="hidden" value="1" name="curso">
								</ul>
								<button type="submit" id="contactButton1" class="btn search_course_btn" style="position: relative; float: right; bottom: 20px; left: -10px">Baixar</button>
								<script type="text/javascript">
                                    document.getElementById('contactButton1').addEventListener('click', function() {
                                        fbq('track', 'Contact');
                                    }, false);
								</script>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
</div>
<!--================ End Home Banner Area =================-->
<section style="background-color: #09111A">
	<div class="container">
		<div class="row" style="background-color: #09111A; margin-right: 0px">
			<div class="col-perso col-lg-4">
				<div class="info-block single_feature d-flex flex-row pb-30">
					<div class="icon">
						<span class="lnr lnr-screen"></span>
					</div>
					<div class="desc">
						<h4>Conhecimento e Habilidades</h4>
						<p>
							Com duração de 18 meses e com carga horária de 570h/a, o curso traz uma Matriz Curricular diferenciada voltada para o mercado de trabalho.
						</p>
					</div>
				</div>
			</div>
			<div class="col-perso col-lg-4" id="prob">
				<div class="info-block single_feature d-flex flex-row pb-30" style="height: 100%; background-color: #1b1e21">
					<div class="icon">
						<span class="fa fa-trophy"></span>
					</div>
					<div class="desc">
						<h4>Certificação Internacional</h4>
						<p>
							Aula com qualidade e com certificação de renome Mundial!
						</p>
					</div>
				</div>
			</div>
			<div class="col-perso col-lg-4">
				<div class="info-block single_feature d-flex flex-row pb-30" style="height: 100%; margin-bottom: 0px">
					<div class="icon">
						<span class="lnr lnr-store"></span>
					</div>
					<div class="desc">
						<div class="desc">
							<h4> Mercado de Trabalho</h4>
							<p>
								Gerenciar bem os projetos mostra-se como um diferencial competitivo, e por isto, vários setores estão buscando cada vez mais o gerenciamento de projetos.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<!--================ Start Fact Area =================-->
<div class="fact_area_perso fact_area overlay" id="diferencials">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="main_title">
					<h2 style="line-height: 1">Qualidades que fazem sua formação ser ÚNICA</h2>
					<p>Oportunidades e Qualificações de uma Formação com alto nível de Excelência.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- single features -->
			<div class="col-lg-4 col-md-6">
				<div class="single_fact card-perso">
					<div class="f_icon">
						<img src="<?=base_url('static/img/f-icons/icon1.png')?>" alt="">
					</div>
					<h4 style="color: #DC666D">Professores que unem experiência acadêmica e de mercado</h4>
					<p>Aulas com profissionais qualificados e experientes, atuantes no mercado, gerando um impacto significativo no seu aprendizado.</p>
				</div>
			</div>
			<!-- single features -->

			<!-- single features -->
			<div class="col-lg-4 col-md-6">
				<div class="single_fact card-perso">
					<div class="f_icon">
						<img src="<?=base_url('static/img/f-icons/icon3.png')?>" alt="">
					</div>
					<h4 style="color:#08A0AD;">Aprenda Estratégias</h4>
					<p>Você adquire conhecimentos, desenvolve atitudes, habilidades e competências inerentes à função.</p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="single_fact card-perso">
					<div class="f_icon">
						<img src="<?=base_url('static/img/f-icons/icon2.png')?>" alt="">
					</div>
					<h4 style="color: #884BAB">Integração de conhecimento e prática profissional</h4>
					<p>Aulas com experiências reais em empresas locais.</p>
				</div>
			</div>

		</div>
		<div class="row justify-content-center" id="disciplines">
			<div class="col-lg-6">
				<div class="main_title">
					<h2 style="margin-top: 50px">Confira as Disciplinas</h2>
					<p>Disciplinas abordadas no curso</p>
				</div>
			</div>
			<table class="table" style="margin-bottom: 50px">
				<thead>
				<tr>
					<th scope="col">Nº</th>
					<th scope="col">DISCIPLINA</th>
					<th scope="col" style="text-align: center">CARGA HORARIA</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<th scope="row">01</th>
					<td>FUNDAMENTOS DE GERENCIAMENTO DE PROJETO</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">02</th>
					<td>GERENCIAMENTO AGIL DE PROJETOS COM SCRUM</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">03</th>
					<td>GERENCIAMENTO DE ESCOPO</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">04</th>
					<td>GERENCIAMENTO DO TEMPO DO PROJETO</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">05</th>
					<td>GERENCIAMENTO DE CUSTOS DO PROJETO</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">06</th>
					<td>GERENCIAMENTO DE RISCOS DO PROJETO</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">07</th>
					<td>GERENCIAMENTO DA QUALIDADE DO PROJETO</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">08</th>
					<td>GERENCIAMENTO DAS AQUISIÇÕES</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">09</th>
					<td>GERÊNCIA DA INTEGRAÇÃO E CONTROLE DAS MUDANÇAS</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">10</th>
					<td>GERENCIAMENTO DA COMUNICAÇÃO E DOS RECURSOS DO PROJETO </td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">11</th>
					<td>GERENCIAMENTO DAS PARTES INTERESSADAS</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">12</th>
					<td>ARQUITETURA DE NEGÓCIOS E PROCESSOS </td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">13</th>
					<td>FUNDAMENTOS DE BUSINESS PROCESS MANAGEMENT (BPM)</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">14</th>
					<td>MODELAGEM DE PROCESSOS DE NEGÓCIO COM MODELO
						E NOTAÇÃO DE PROCESSOS DE NEGÓCIO (BPMN) </td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">15</th>
					<td>PLANEJAMENTO ESTRATÉGICO EM PROJETOS</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">16</th>
					<td>METODOLOGIA DA PESQUISA CIENTÍFICA</td>
					<td style="text-align: center">30</td>
				</tr>
				<tr>
					<th scope="row">17</th>
					<td>ORIENTAÇÃO TCC (03 ENCONTROS)</td>
					<td style="text-align: center">90</td>
				</tr>
				<tr>
					<th scope="row">18</th>
					<td>TRABALHO DE CONCLUSÃO DE CURSO - TCC </td>
					<td style="text-align: center"</td>
				</tr>
				<tr>
					<td colspan="2" style="font-weight: bold; font-size: 20px">CARGA HORÁRIA TOTAL</td>
					<td style="text-align: center">570</td>
				</tr>
				</tbody>
			</table>
			<div class="row">
				<div id="g-circle">
					<svg width="39" height="39" style = "position: relative; top: 20px; left: 15px;"
						 viewBox="0 0 39 39" xmlns="http://www.w3.org/2000/svg">
						<g fill="none" fill-rule="evenodd">
							<path d="M.75 32.508a5.752 5.752 0 0 0 5.742 5.742H28.29c2.05 0 3.691-1.7 3.691-3.691V6.727h5.684c.352 0 .586-.235.586-.586V4.5c0-2.05-1.64-3.75-3.691-3.75H10.008C7.957.75 6.316 2.39 6.316 4.5v27.422h-4.98c-.352 0-.586.234-.586.586zM37.078 4.5v1.055H31.98V4.5a2.601 2.601 0 0 1 2.579-2.578c1.406 0 2.52 1.172 2.52 2.578zM7.43 4.5a2.601 2.601 0 0 1 2.578-2.578h21.797c-.645.644-.996 1.582-.996 2.578v30.059a2.5 2.5 0 0 1-2.52 2.52c-1.406 0-2.52-1.173-2.52-2.52v-2.051c0-.352-.234-.586-.585-.586H7.43V4.5zm-.586 28.594h17.695v1.465c0 .996.41 1.875.996 2.52H6.492c-2.344 0-4.219-1.759-4.512-3.985h4.864z" fill="#E1BE5A" fill-rule="nonzero"></path>
							<path d="M10.828 10.242h16.64c.352 0 .587-.234.587-.586 0-.351-.235-.586-.586-.586h-16.64c-.352 0-.587.235-.587.586 0 .352.235.586.586.586z" fill="#E1BE5A"></path>
							<path d="M28.055 22.723c0-.352-.235-.586-.586-.586h-16.64c-.352 0-.587.234-.587.586 0 .351.235.586.586.586h16.64a.587.587 0 0 0 .587-.586z" fill="#E1BE5A"></path>
							<path d="M10.828 14.578h16.64c.352 0 .587-.234.587-.586 0-.351-.235-.586-.586-.586h-16.64c-.352 0-.587.235-.587.586 0 .352.235.586.586.586z" fill="#E1BE5A"></path>
							<path d="M10.828 18.973h16.64c.352 0 .587-.235.587-.586 0-.352-.235-.586-.586-.586h-16.64c-.352 0-.587.234-.587.586 0 .351.235.586.586.586z" fill="#E1BE5A"></path>
							<path d="M10.828 5.906h16.64c.352 0 .587-.234.587-.586 0-.351-.235-.586-.586-.586h-16.64c-.352 0-.587.235-.587.586 0 .352.235.586.586.586z" fill="#E1BE5A"></path>
							<path d="M26.063 26.883a.587.587 0 0 0 .585-.586c0-.352-.234-.586-.585-.586-2.579 0-4.512.41-6.68 1.523 0-.058.117-.644-.469-.82-.234-.059-.41 0-.586.176-.176-.762-.058-1.23-.586-1.348a.59.59 0 0 0-.644.293l-1.465 2.578c-.352.645.644 1.23.996.586l.703-1.23c.117.468.234 1.113.879.996.644 1.348 1.816-1.64 7.852-1.582z" fill="#FFF"></path>
						</g>
					</svg>
				</div>
				<div id="g-button" style="">
					<a href="javascript:void()" onclick="openModal()" style="color: #FFD700; padding: 30px" data-toggle="modal" data-target="#exampleModalCenter">BAIXAR GUIA DO CURSO</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!--================ End Fact Area =================-->
<!-- Botão para acionar modal -->
<div class="register_form" style="display: none; background-color: #05111F; margin-top: 0" id="modal-form">
	<h3 style="color: white;">Guia completo do curso</h3>
	<p>Preencha com seus dados e receba o guia diretamente por e-mail</p>
	<form class="form_area" id="hide_form" action="<?=base_url('processo')?>" method="post">
		<div class="row">
			<div class="col-lg-6 offset-lg-3 form_group">
				<input name="name" placeholder="Nome" required="" type="text">
				<input name="email" placeholder="E-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" required="" type="email">
				<input name="tel" placeholder="Telefone" pattern="[0-9.].{8,16}.[/\(([^)]+)\)/]" required="" OnKeyPress="formatar('###)#.####-####', this)" type="tel">
				<input type="hidden" value="1" name="curso">
				<button class="primary-btn" id="contactButton2" style="box-shadow: none">Enviar</button>
				<script type="text/javascript">
                    document.getElementById('contactButton2').addEventListener('click', function() {
                        fbq('track', 'Contact');
                    }, false);
				</script>


			</div>

		</div>
	</form>
</div>

<!--================ Start Registration Area =================-->
<div class="registration_area_perso section_gap registration_area" id="contact">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-7">
				<div class="row clock_sec clockdiv" id="clockdiv">
					<div class="col-lg-12" style="margin-bottom: 25px">
						<h1>Nossos contatos</h1>
						<p>Rua Maria Cesarina Lopes Barreto, 574<br>Campo dos Velhos, Sobral, Ceará.</br></p>
						<a href="tel: +558836132034" style="text-decoration: none"><i class="fa fa-phone" style="margin-right: 10px" aria-hidden="true"></i>
							(88) 3613-2034</a>
						<br><a href="tel: +5588992249386" style="text-decoration: none"><i class="fa fa-mobile fa-3" style="margin-right: 10px; font-size: 22px; margin-top: 5px" aria-hidden="true"></i></i>
							(88) 9.9224-9386</a>
						<ul style="list-style-type: none; padding: 0; margin-top: 20px">
							<li style="display: inline-block; margin-right: 5px"><a href="https://pt-br.facebook.com/educce/"><img style="height: 30px" src="<?=base_url('static/img/fb-icon2.png')?>" alt="fb-icon"></a></li>
							<li style="display: inline-block"><a href="https://www.instagram.com/educsobraloficial/"><img style="height: 30px" src="<?=base_url('static/img/insta-icon3.png')?>" alt="fb-icon"></a></li>
						</ul>
					</div>
<!--					<div class="col clockinner1 clockinner">-->
<!--						<h1 class="days">10</h1></br>-->
<!--						<span class="smalltext">Dias</span>-->
<!--					</div>-->
<!--					<div class="col clockinner clockinner1">-->
<!--						<h1 class="hours">23</h1></br>-->
<!--						<span class="smalltext">Horas</span>-->
<!--					</div>-->
<!--					<div class="col clockinner clockinner1">-->
<!--						<h1 class="minutes">47</h1></br>-->
<!--						<span class="smalltext">Minutos</span>-->
<!--					</div>-->
<!--					<div class="col clockinner clockinner1">-->
<!--						<h1 class="seconds">59</h1></br>-->
<!--						<span class="smalltext">Segundos</span>-->
<!--					</div>-->
				</div>
			</div>
			<div class="col-lg-4 offset-lg-1">
				<div class="register_form">
					<h3 style="margin-bottom: 10px">Guia completo do curso</h3>
					<p>Preencha seus dados e receba o guia diretamente por e-mail</p>
					<form class="form_area" id="" action="<?=base_url('processo')?>" method="post">
						<div class="row">
							<div class="col-lg-12 form_group">
								<input name="name" placeholder="Nome" required="" type="text">
								<input name="email" placeholder="E-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
									   required="" type="email">
								<input name="tel" placeholder="Telefone" required="" pattern="[0-9.].{8,16}.[/\(([^)]+)\)/]" required="" OnKeyPress="formatar('###)#.####-####', this)" type="tel">
								<input type="hidden" value="1" name="curso">
							</div>
							<div class="col-lg-12 text-center">
								<button class="primary-btn" id="contactButton3">Enviar</button>
								<script type="text/javascript">
                                    document.getElementById('contactButton3').addEventListener('click', function() {
                                        fbq('track', 'Contact');
                                    }, false);
								</script>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!--================ End Registration Area =================-->
