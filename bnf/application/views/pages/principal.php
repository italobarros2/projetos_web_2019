<!-- Services -->

<div class="services" style="padding-top: 15px; background: transparent">

<!--	<img src="--><?//=base_url('static/images/elemento1.png')?><!--" style="float: left" alt="">-->
<!--	<img src="--><?//=base_url('static/images/elemento2.png')?><!--" style="float: right" alt="">-->
	<div class="container">
		<div class="row" style="margin-top: 75px">
			<div class="col-xl-6 offset-1 col-md-6 service_col">
				<div class="service text-center">
					<div class="service">
						<div class="img-content">
							<img src="<?=base_url('static/images/BNFTIJELA.png')?>">
						</div>
					</div>
				</div>
			</div>

			<!-- Service -->
			<div class="col-xl-5 col-md-6 service_col">
				<div class="service text-center">
					<div class="service">
						<div class="service_title service_title_perso">BRAZIL <br> SOUL MADE</div>
						<p class="service_title service_content_perso">
							Feito da alma do Brasil. Estamos conectados com o jeito brasileiro de ser. Nosso povo e nossa terra alimentam nossas histórias.
							<br>
							<br>
							Desde o início de todo o processo ao momento em que você saboreia nossos produtos, somos 100% comprometidos com a qualidade do que produzimos. Isso é respeito à natureza, a todas as pessoas que fazem a BNF e à sua escolha de qualidade de vida!
							<br>
							<br>
						</p>
						<div class="service_title service_title_perso" style="color: #039f55; font-size: 16px; text-align: left; margin-top: 20px; margin-bottom: 20px">O MELHOR DO BRASIL É O AÇAÍ</div>
						<ul class="ul-top" style="text-align: left; padding-left: 15px">
							<li style="color: #924091; font-size: 14px; font-weight: 600; line-height: 18px">Um dos únicos frutos em todo
								<br> o planeta naturalmente livre de açúcares;</li>
							<li style="color: #924091; font-size: 14px; font-weight: 600; line-height: 18px">Alto teor de minerais e concentração
								<br> de gorduras saudáveis;</li>
							<li style="color: #924091; font-size: 14px; font-weight: 600; line-height: 18px">Alimento riquíssimo em antioxidantes.</li>
						</ul>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>

<div class="services" style="background: transparent; background-size: contain">
	<div class="fixed-bg-1"></div>
	<div class="fixed-bg-1 dir"></div>

	<div class="container">
		<div class="row">
			<div class="col-lg-12" style="text-align: center">
				<div class="select-opt-acai active" style="margin-right: 20px" onclick="select_itens(this)" id="cbtn-1">
					LINHA PREMIUM
				</div>
				<div class="select-opt-acai" id="cbtn-2" onclick="select_itens(this)">
					LINHA ESPECIAL
				</div>

			</div>
		</div>
		<div class="row cbtn-1-c" style="margin-top: 100px" id="cbtn-1-c">
			<div class="col-lg-3 offset-lg-2 products ml-20">
				<h4>AÇAI TRADICIONAL</h4>
				<a href="<?=base_url('produtos')?>">
					<img src="<?=base_url('static/images/acai_padrao.png')?>" alt="">
				</a>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-3 products">
				<h4>AÇAI & MEL</h4>
				<a href="<?=base_url('produtos')?>"><img src="<?=base_url('static/images/acai_padrao_r.png')?>" alt=""></a>
			</div>
			<div class="col-lg-3"></div>
		</div>
		<div class="row cbtn-1-c" style="margin-top: 100px" id="cbtn-1-c">
			<div class="col-lg-3 offset-lg-2 products ml-20">
				<h4>AÇAI CREMOSO</h4>
				<a href="<?=base_url('produtos')?>"><img src="<?=base_url('static/images/acai_padrao.png')?>" alt=""></a>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-3 products">
				<h4>CREME DE CUPUAÇU</h4>
				<a href="<?=base_url('produtos')?>"><img src="<?=base_url('static/images/cupuacu.png')?>" alt=""></a>
			</div>
			<div class="col-lg-3"></div>
		</div>
		<div class="row cbtn-1-c" style="margin-top: 100px">
			<div class="col-lg-3 offset-lg-2 products ml-20">
				<h4>CREME DE OREO</h4>
				<a href="<?=base_url('produtos')?>"><img src="<?=base_url('static/images/oreo.png')?>" alt=""></a>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-3 products">
			</div>
			<div class="col-lg-3"></div>
		</div>
		<div class="row cbtn-2-c" style="margin-top: 100px; display: none">
			<div class="col-lg-3 offset-lg-2 products ml-20">
				<h4>AÇAÍ PROTEIN & MEL</h4>
				<a href="<?=base_url('produtos')?>"><img src="<?=base_url('static/images/acai_padrao.png')?>" alt=""></a>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-3 products">
				<h4>NINHO COM NUTELLA</h4>
				<a href="<?=base_url('produtos')?>"><img src="<?=base_url('static/images/ninhocomnutella.png')?>" alt=""></a>
			</div>
			<div class="col-lg-3"></div>
		</div>
		<div class="row cbtn-2-c" style="margin-top: 100px; display: none"">
			<div class="col-lg-3 offset-lg-2 products ml-20">
				<h4>CREME DE NINHO</h4><br>
				<a href="<?=base_url('produtos')?>"><img src="<?=base_url('static/images/ninho.png')?>" alt=""></a>
			</div>
			<div class="col-lg-1"></div>
			<div class="col-lg-3 products">
				<h4>CREME DE CASTANHOCO</h4>
				<a href="<?=base_url('produtos')?>"><img src="<?=base_url('static/images/castanhoco.png')?>" alt=""></a>
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>

</div>

<div class="chamada_loja" style="background: url(<?=base_url('static/images/monte_bg.png')?>); background-size: contain">
	<div class="row">
		<div class="col-lg-4 offset-lg-2 monte-img">
			<img src="<?=base_url('static/images/lojinha.png')?>" style="position: relative; bottom: 50px" alt="">
		</div>
		<div class="col-lg-4 monte-img">
			<a href="https://api.whatsapp.com/send?phone=5588998395710" target="_blank"><img src="<?=base_url('static/images/monte.png')?>" style="position: relative; top: 50px; left: 20px;width: 90%" alt=""></a>
		</div>
		<div class="col-lg-2"></div>
	</div>
</div>

<div class="col-xl-10 offset-lg-1">
	<div class="newsletter-bnf">
		<h4>Receba dicas de como a sua loja de açaí pode <br> <span style="color: #009e53; font-weight: 800">tornar-se referência no segmento.</span></h4>
		<form action="<?=base_url('processamento')?>" class="nl-form" method="post">
			<div class="row">
				<div class="col-lg-5">
					<input type="text" class="form-control-perso-bnf" name="nome" required="required" class="nl-input" placeholder="Seu nome">
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-5">
					<input class="form-control-perso-bnf" required pattern="[0-9.].{8,16}.[/\(([^)]+)\)/]"  OnKeyPress="formatar('###)#.####-####', this)" name="tel" id="tel" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefone'" placeholder="Seu Whatsapp">
					<input type="hidden" name="email">
					<input type="hidden" name="mensagem">
					<input type="hidden" name="motivo">
					<input type="hidden" name="cidade">
				</div>
				<div class="col-lg-11" id="fix-btn-1" style="text-align: right">
					<button class="nl-form-sub">ENVIAR</button>
				</div>
			</div>

		</form>
	</div>
</div>

<div class="row">
	<div class="col-lg-10 offset-lg-1">
		<div class="testimonals">
			<h2>QUEM AMA A BNF <span>E O SABOR DO BRASIL</span></h2>
			<div class="row">
				<div class="owl-carousel car-postos owl-theme">

						<div class="item">

							<div class="comment">
								<p>
									“Iniciamos nossa parceria com a BNF em 2017 e desde então mantivemos. Isso se deve, sem dúvida, ao atendimento dedicado e ágil e ao zelo pelo alto padrão de qualidade dos produtos. Sem dúvida, esses fatores contribuem para o sucesso do nosso negócio.”
								</p>
								<h5>Hallyson Gonçalves <br>The Big Açaí</h5>
							</div>

						</div>
						<div class="item">

							<div class="comment">
								<p>
									“A BNF significa, em poucas palavras, uma amizade verdadeira, uma família que trabalha duro para entregar aos seus clientes produtos de altíssima qualidade”
								</p>
								<h5>Pedro Érico <br>Mundo Açaí</h5>
							</div>

						</div>

				</div>
			</div>
		</div>
	</div>
</div>

</div>
