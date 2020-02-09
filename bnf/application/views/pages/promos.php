<div class="postos_general" style="background: url(<?=base_url('static/images/bg_promo.png')?>) no-repeat; background-size: contain">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="promo-sd">
					<div class="col-lg-12 promo-title" style="padding-top: 300px;">
						<div class="row">
							<div class="col-lg-4 posto_img">
								<img src="<?=base_url('static/images/clube_de_amigos.png')?>" alt="">
							</div>
							<div class="col-lg-8">
								<h1>JUNTE PONTOS QUE VALEM PRÊMIOS.</h1>
								<p>O clube de Amigos SD é o programa de fidelidade dos <br>Postos São Domingos que dá prêmios para você.</p>
							</div>
							<br>
							<div class="promo-badge posto_badge template_yellow">
								COMO PARTICIPAR:
							</div>
						</div>
					</div>
					<div class="steps-promo">
						<div class="row">
							<div class="col-lg-4">
								<div class="step-card h-fx">
									<h3>1. Cadastre-se <br>com nossos frentistas</h3>
									<p>Na hora de abastecer, cadastre-se com seu CPF e entre para o nosso Clube de Amigos SD. </p>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="r-arrow">
									<img src="<?=base_url('static/images/right-narrow.png')?>" alt="">
								</div>
								<div class="step-card h-fx">
									<h3>2. Abasteça e junte pontos</h3>
									<p>Abasteça, realize troca de óleo ou compre nas lojas de conveniência do nossos postos e ganhe pontos. </p>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="r-arrow">
									<img src="<?=base_url('static/images/right-narrow.png')?>" alt="">
								</div>
								<div class="step-card h-fx">
									<h3>3. Troque seu pontos por prêmios e serviços</h3>
									<p>Resgate seus prêmios ou troque seus pontos por serviços nos postos participantes.</p>
								</div>
							</div>
						</div>

					</div>
					<div class="gift-galery row">
						<?php for($i = 1; $i < 7; $i++){
							echo '<div class="col-lg-2">
									<div class="gift-price" style="background: url('.base_url("static/images/g$i.png").') no-repeat; background-size: contain">
										<div class="overlay"></div>
									</div>
								</div>';
						}?>

					</div>
					<div class="row d-narrow">
						<div class="col-lg-12">
							<img src="<?=base_url('static/images/d-narrow.png')?>" alt="">
						</div>
					</div>
				</div>

				<div class="row separator"></div>

				<div class="promo-sd" style="margin-bottom: 40px">
					<div class="col-lg-12 promo-title">
						<div class="row">
							<div class="col-lg-4 posto_img">
								<img src="<?=base_url('static/images/aditivando.png')?>" alt="">
							</div>
							<div class="col-lg-8">
								<h1>ABASTEÇA E DOE AMOR.</h1>
								<p>Cada gota de gasolina aditivada que você abastece <br>transforma-se em uma boa ação.
								</p>
							</div>
							<br>
							<div class="posto_badge template_yellow" style="margin-bottom: 30px; font-size: 20px">
								SAIBA COMO PARTICIPAR DESTA BOA AÇÃO.
							</div>
						</div>
					</div>
					<div class="steps-promo">
						<div class="row">
							<div class="col-lg-4"">
								<div class="step-card h-min">
									<h3 style="margin-bottom: 0">Abasteça com aditivada <br>
										e doe amor.</h3>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="r-arrow h-min">
									<img src="<?=base_url('static/images/right-narrow.png')?>" alt="">
								</div>
								<div class="step-card h-min">
									<h3  style="margin-bottom: 0">Cada gota transforma-se <br>
										em uma boa ação.
									</h3>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="r-arrow h-min">
									<img src="<?=base_url('static/images/right-narrow.png')?>" alt="">
								</div>
								<div class="step-card h-min">
									<h3 style="margin-bottom: 0">Seu abastecimento <br>
										ajuda quem precisa.
									</h3>
								</div>
							</div>
						</div>

					</div>

					<div class="info-promo-box template_red">
						<div class="col-lg-6">
							<h1>Você é responsável por algum projeto social em Sobral?</h1>
							<p>Fale conosco para saber mais sobre o Aditivando e como nós podemos ajudar o seu projeto futuramente.</p>
							<div class="promo-box posto_badge template_yellow">
								Clique aqui e mande sua mensagem via Whatsapp
							</div>
						</div>
						<div class="col-lg-5 pt2">
							<h3>Veja os projetos que já foram beneficiados pelo Aditivando Solidariedade.</h3>
							<ul>
								<li><span style="color: #ffde3d">Outubro</span> Rua do Bem</li>
								<li><span style="color: #ffde3d">Novembro</span> Casa Bom Samaritano</li>
								<li><span style="color: #ffde3d">Dezembro</span> Mãos Que Acolhem</li>
							</ul>
						</div>
					</div>

					<div class="solid-galery">
						<div class="owl-carousel car-postos owl-theme">
							<?php for($i = 1; $i<14; $i++){
								echo '<div class="item"><img src="'.base_url("static/images/sd_$i.png").'" alt="" style="height: 70px; width: auto"></div>';
							}?>

						</div>
					</div>

				</div>

				<div class="row separator">
				</div>

				<div class="promo-sd">
					<div class="col-lg-12 promo-title">
						<div class="row">
							<div class="col-lg-4 posto_img">
								<img src="<?=base_url('static/images/qualidade.png')?>" alt="">
							</div>
							<div class="col-lg-8">
								<h1>SAIBA TUDO SOBRE O COMBUSTÍVEL QUE ABASTECE O SEU VEÍCULO.</h1>
								<p>Testes de combustível nas pistas de abastecimento para você tornar-se <br> um especialista e tirar todas as dúvidas sobre o combustível que <br> abastece seu veículo!
								</p>
							</div>
							<br>
							<div class="promo-badge posto_badge template_yellow">
								SAIBA COMO FUNCIONA:
							</div>
						</div>
						<div class="steps-promo">
							<div class="row">
								<div class="col-lg-4">
									<div class="step-card h-fx-min">
										<br>
										<h3>Testes de combustível</h3>
										<br>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="r-arrow h-fx-min">
										<img src="<?=base_url('static/images/right-narrow.png')?>" alt="">
									</div>
									<div class="step-card h-fx-min">
										<h3>Quiz interativo e palestras educacionais sobre combustível
										</h3>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="r-arrow h-fx-min">
										<img src="<?=base_url('static/images/right-narrow.png')?>" alt="">
									</div>
									<div class="step-card h-fx-min">
										<h3>Prêmios e pontuação extra no Clube de Amigos SD
										</h3>
									</div>
								</div>
							</div>
						</div>

						<div class="info-promo-box template_blue">
							<div class="col-lg-6">
								<h1>Confira nossa programação.</h1>
								<p>No momento, esta campanha não está sendo realizada <br>em nenhum dos postos. Em breve, divulgaremos <br>a nova programação.</p>
							</div>
							<div class="col-lg-5 pt2">
								<h3>Acesse o Quiz com Amigos,<br> concorra a prêmios
									e ganhe<br> pontos extras no<br> Clube de Amigos SD.
								</h3>
								<a href="http://www.quiz.gruposaodomingos.com.br/?fbclid=IwAR1Qc6Xy9pZPT45WSc2M_094tnq1UhbXl2K5NVGnHAzfpugs9qdZuyT9SYM"><div class="promo-box posto_badge template_red">
									Quiz com Amigos
								</div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
