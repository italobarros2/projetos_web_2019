<div class="postos_general" style="background: url(<?=base_url('static/images/postos_bg.png')?>) no-repeat; background-size: contain">
	<div class="title_page_postos">
		<div class="row">
			<div class="col-lg-12">
				Postos
			</div>
		</div>
	</div>

	<?php foreach ($postos as $posto){
		echo '
	<div class="content_page_postos">
		<div class="row">
			<div class="col-lg-10 offset-lg-1">
				<div class="col-lg-3 posto_img">
					<img src="';echo base_url('static/images/'.$posto->posto_foto.'.png').'" alt="">
				</div>
				<div class="col-lg-9 postos_card">
					<div class="postos_card_data">
						<h5>'.$posto->nome_posto.'<br>'.$posto->posto_bandeira.',<br>'.$posto->posto_endereco.'</h5>
					</div>
					<div class="postos_card_content">
						'.$posto->posto_descricao.'
					</div>
					<div class="postos_badges">
						<div class="col-lg-11">
							<div class="posto_badge template_red">
								Promoções ativas:
							</div>
							'; foreach ($postos_promo as $promo){
								if($promo->id_posto == $posto->id_posto){
									echo '<div class="posto_badge template_blue">
											'.$promo->nome_promo.'
										</div>';
								}
							}echo'


							<br>
							<div class="posto_badge template_yellow">
								Contato: <a style="color: #2957a4" href="tel: +55 '.$posto->posto_contato.'">'.$posto->posto_contato.'</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>';
	}?>

</div>
