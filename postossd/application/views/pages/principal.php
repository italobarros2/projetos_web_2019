<!-- Services -->

<div class="services" style="padding-top: 15px;">
	<div class="container">
		<div class="row" style="margin-top: 75px">

			<div class="col-xl-4 col-md-6 service_col">
				<div class="service text-center">
					<div class="service">
						<div class="img-content">
							<img src="<?=base_url('static/images/clube_de_amigos.png')?>">
						</div>
						<div class="service_title service_title_perso">Faça parte e junte pontos que valem prêmios.</div>
						<div class="service_button">
							<a href="<?=base_url("promocoes")?>" target="_blank"><button id="but_fix">Saiba mais</button></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Service -->
			<div class="col-xl-4 col-md-6 service_col">
				<div class="service text-center">
					<div class="service">
						<div class="img-content">
							<img src="<?=base_url('static/images/aditivando.png')?>">
						</div>
						<div class="service_title service_title_perso">Cada gota de gasolina aditivada se transforma em uma boa ação</div>
						<div class="service_button">
							<a href="<?=base_url("promocoes")?>" target="_blank"><button>Saiba mais</button></a>
						</div>
					</div>
				</div>
			</div>



			<div class="col-xl-4 col-md-6 service_col" style="padding-right: 0">
				<div class="service text-center">
					<div class="service">
						<div class="img-content">
							<img src="<?=base_url('static/images/qualidade.png')?>">
						</div>
						<div class="service_title service_title_perso">Participe e saiba tudo sobre o combustível que você usa no seu veículo</div>
						<div class="service_button">
							<a href="<?=base_url("promocoes")?>" target="_blank"><button>Saiba mais</button></a>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>

<!-- Services -->

<div class="promocoes" style="padding-top: 15px;">
	<div class="container">
		<div class="row" style="margin-top: 75px">

			<div class="col-xl-4 col-md-6 service_col">
				<div class="service text-center">
					<div class="service">
						<div class="img-content-promo">
							<a href="https://shellnacaixa.com.br/" target="_blank"><img src="<?=base_url('static/images/promocoes_03.png')?>"></a>
						</div>
					</div>
				</div>
			</div>

			<!-- Service -->
			<div class="col-xl-4 col-md-6 service_col">
				<div class="service text-center">
					<div class="service">
						<div class="img-content-promo">
							<a href="https://www.kmdevantagens.com.br/wps/portal/Applications/MarketPlace/como-funciona" target="_blank"><img src="<?=base_url('static/images/promocoes_05.png')?>"></a>
						</div>
					</div>
				</div>
			</div>



			<div class="col-xl-4 col-md-6 service_col" style="">
				<div class="service text-center">
					<div class="service">
						<div class="img-content-promo">
							<a href="https://portal.ipiranga/wps/portal/abasteceai/inicio" target="_blank"><img src="<?=base_url('static/images/promocoes_07.png')?>"></a>
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>


<!-- Newsletter -->

<div class="newsletter">
	<div class="parallax_background overlay parallax-window" data-parallax="scroll" data-image-src="<?=base_url('static/images/bg_parallax.png')?>" data-speed="0.5" data-position-y="-200px" style="background-repeat: no-repeat">
		<div class="overlay"></div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-5 offset-lg-1 col-sx-12">
				<div class="img-icon">
					<img src="<?=base_url('static/images/icon1.png')?>" alt="">
				</div>
				<div class="parallax_content">
					<h5><span style="font-family: Futura-B">Experiência</span> do<br> consumidor</h5>
					<a href="Javascript::void()"><button>Nos avalie</button></a>
				</div>
			</div>
			<div class="col-lg-5 col-sx-12 fix-it">
				<div class="img-icon">
					<img src="<?=base_url('static/images/icon2.png')?>" style="position: relative; bottom: 23px; height: 180px" alt="">
				</div>
				<div class="parallax_content">
					<h5><span style="font-family: Futura-B"><span>Newsletter</span></h5>
					<p>Receba tudo sobre <br>nossas promoções <br>e campanhas no seu e-mail.</p>
					<form action="" style="position: relative; top: 10px"><input type="email"><button style="font-size: 18px; padding: 2px 12px; border-radius: 30px; position: absolute; right:1px; top: 1px; border-bottom-left-radius: 0; border-top-left-radius: 0"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></button></form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="postos">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 title_comb" style="font-size: 28px; color: #2957a4">
				<b>POSTOS</b>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="owl-carousel car-postos owl-theme">
					<?php for($i = 1; $i<14; $i++){
						echo '<div class="item"><img src="'.base_url("static/images/sd_$i.png").'" alt="" style="height: 70px; width: auto"></div>';
					}?>

				</div>
			</div>
		</div>
	</div>

</div>

<div class="combustiveis" style="padding-top: 15px;">
	<div class="container">
	<div class="row">
		<div class="col-lg-12 title_comb" style="font-size: 28px; color: #ed3237">
			<b>SOBRE COMBUSTÍVEIS</b>
		</div>
	</div>
		<div class="row" style="margin-top: 75px">

			<div class="col-xl-3 col-md-6 service_col">
				<div class="service text-center">
					<div class="service card-comb">
						<div class="img-content-comb" style="background: #cacaca; padding: 80px 40px; border-radius: 30px">
							<b>Sobre os combustíveis.</b><br> Aguardar imagem.
						</div>
						<div class="content-comb">
							O petróleo bruto, extraído dos oceanos em plataformas marítimas, faz a sua primeira saindo do mar e sendo levado até os terminais aquaviários nos litorais.
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-6 service_col">
				<div class="service text-center">
					<div class="service card-comb">
						<div class="img-content-comb" style="background: #cacaca; padding: 80px 40px; border-radius: 30px">
							<b>Sobre os combustíveis.</b><br> Aguardar imagem.
						</div>
						<div class="content-comb">
							A segunda viagem é feita quando o petróleo é levado às refinarias, onde acontece o processo de refino, em que dá origem a subprodutos do petróleo, incluindo a gasolina e o óleo diesel.
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-6 service_col">
				<div class="service text-center">
					<div class="service card-comb">
						<div class="img-content-comb" style="background: #cacaca; padding: 80px 40px; border-radius: 30px">
							<b>Sobre os combustíveis.</b><br> Aguardar imagem.
						</div>
						<div class="content-comb">
							Após o processo do refino, os combustível e outros produtos derivados do petróleo são levados às distribuidoras.
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-3 col-md-6 service_col">
				<div class="service text-center">
					<div class="service card-comb">
						<div class="img-content-comb" style="background: #cacaca; padding: 80px 40px; border-radius: 30px">
							<b>Sobre os combustíveis.</b><br> Aguardar imagem.
						</div>
						<div class="content-comb">
							Por fim, em sua  última viagem, os combustíveis são levados aos postos de combustíveis de todo país para abastecer o seu veículo.
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>
</div>

</div>
