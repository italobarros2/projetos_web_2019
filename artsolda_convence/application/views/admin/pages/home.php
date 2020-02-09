<table class="table table-striped" id="tbl">
	<thead>
	<tr>
		<th scope="col">CheckBox</th>
		<th scope="col">Nome</th>
		<th scope="col">E-mail</th>
		<th scope="col">Numero</th>
		<th scope="col">Data de inscrição</th>
	</tr>
	</thead>
	<tbody>
	<?php $i = 1; foreach ($queries as $query){

		echo '<tr>
				<td scope="row"><input class="form-check-input" onclick="makeForm(this)" type="checkbox" id="defaultCheck'.$i.'" value="'.$i.'"  style="position: relative; left: 40px"></td>
			  	<td>'.$query->nome.'</td>
			  	<td>'.$query->email.'</td>
			  	<td>'.$query->tel.'</td>
			  	<td>'.$query->data.'</td>
			   </tr>'; $i++;
	}?>
	</tbody>
</table>

<section style="display: none" id="sec-2">
	<div class="row">
		<div class="col-md-3" style="background: url('http://localhost/educ_convence/static/img/e-templates/temp1.png') no-repeat; background-size:cover; background-position-x: center; background-position-y: center; padding-top: 290px; cursor: pointer;" onclick="selectTemp(this)">
			<input type="hidden" value="1" id="temp-1">
		</div>
	</div>
</section>

<section style="display: none" id="sec-3">
	<div class="row">
		<div class="col-md-4">
			<h3>Personalize o e-mail</h3>
			<input type="text" style="display: block; width: 100%; margin-bottom: 50px; border: none; border-bottom: 2px groove gainsboro; background: #EFEFF6; outline: 0;" placeholder="Digite o primeiro contato">
			<input type="text" style="display: inline-block; width: 40%; margin-bottom: 50px; border: none; border-bottom: 2px groove gainsboro; background: #EFEFF6; outline: 0;" placeholder="Olá"><span style="margin-right: 10px; margin-left: 10px">, fulano.</span> <input type="text" style="display: inline-block; width: 37%; margin-bottom: 50px; border: none; border-bottom: 2px groove gainsboro; background: #EFEFF6; outline: 0;" placeholder="tudo bem?"><br>
			<textarea  cols="30" rows="3" style="display: block; width: 100%; margin-bottom: 50px; border: 2px groove gainsboro; background: #f8f8f88f; outline: 0;" placeholder="Digite o primeiro paragrafo"></textarea>
			<textarea  cols="30" rows="3" style="display: block; width: 100%; margin-bottom: 50px; border: 2px groove gainsboro; background: #f8f8f88f; outline: 0;" placeholder="Digite o segundo paragrafo"></textarea>
			<input type="text" style="display: block; width: 100%; margin-bottom: 50px; border: none; border-bottom: 2px groove gainsboro; background: #EFEFF6; outline: 0;" placeholder="Digite a chamada para o clique no botão">
			<input type="text" style="display: block; width: 100%; margin-bottom: 50px; border: none; border-bottom: 2px groove gainsboro; background: #EFEFF6; outline: 0;" placeholder="Digite o botão">
			<input type="text" style="display: block; width: 100%; margin-bottom: 50px; border: none; border-bottom: 2px groove gainsboro; background: #EFEFF6; outline: 0;" placeholder="Digite o link do botão">
			<input type="text" style="display: block; width: 100%; margin-bottom: 50px; border: none; border-bottom: 2px groove gainsboro; background: #EFEFF6; outline: 0;" placeholder="Digite o primeiro comentário">
			<input type="text" style="display: block; width: 100%; margin-bottom: 50px; border: none; border-bottom: 2px groove gainsboro; background: #EFEFF6; outline: 0;" placeholder="Digite o segundo comentário">
			<input type="text" style="display: block; width: 100%; margin-bottom: 50px; border: none; border-bottom: 2px groove gainsboro; background: #EFEFF6; outline: 0;" placeholder="site">
			<input type="text" style="display: block; width: 100%; margin-bottom: 50px; border: none; border-bottom: 2px groove gainsboro; background: #EFEFF6; outline: 0;" placeholder="telefone 1 (escreva no formato)">
			<input type="text" style="display: block; width: 100%; margin-bottom: 50px; border: none; border-bottom: 2px groove gainsboro; background: #EFEFF6; outline: 0;" placeholder="telefone 2 (escreva no formato)">
		</div>
		<div class="col-md-8" style="padding-left: 200px">
			<div style="background-color: #5d616f;height: auto;padding: 20px;width: 100%;border: 3px dotted gainsboro;">
				<div style="background-color: #001123;/* margin: 50px auto auto; */height: auto;margin-left: auto;width: 100%;margin-right: auto;padding-top: 20px;border-style: ridge;border-width: 3px;padding-bottom: 20px;">
					<section class="sec-logo" style="text-align: center;margin-bottom: 15px;">

						<img id="resp_logo" src="https://pos-educ.com.br/static/img/logo_educ_y.png" style="height: 60px;" alt="Pos-Educ">

					</section>
					<section class="sec-standard" style="background-color: #161a4e;color: gold;text-align: center;padding: 15px 3% 1px;">

						<h1 style="font-family: Helvetica;font-size: 18px; color: gold">_________________________________________</h1>

					</section>

					<section class="sec-body" style="padding-top: 20px;padding-left: 20px;padding-right: 20px;font-family: Helvetica;font-size: 18px;text-align: justify;color: #fff;line-height: 30px;">

						<p style="font-size: 12px;">____fulano, _________</p>
						<p style="font-size: 12px;">____________________________________________________________<br>____________________________________________________________</p>
						<p style="font-size: 12px;">____________________________________________________________<br>____________________________________________________________</p>



					</section>

					<section class="sec-btn" style="font-family: Helvetica;font-size: 18px; text-align: justify;color: #484848;line-height: 30px;text-align: center;">

						<p style="text-align: center;font-size: 12px;color: gold;margin-top: 10px;margin-bottom: 15px;"><b>__________________________________________________ </b></p>


						<div style="margin-bottom: 30px;border-radius: 0%;border: 1px outset #FFD700;background-color: #040d17;display: inline;padding-top: 3px;padding-left: 1px;padding-right: 1px;padding-bottom: 5px;">
							<a href="https://pos-educ.com.br/static/guia_music.pdf" style="text-decoration: none;color: #FFD700;padding: 5px;font-size: 12px;">_______________</a>
						</div>
						<p style="color: #ffffffb8; font-size: 12px; margin-top: 5px; margin-bottom: 5px">_______________<br>_______________</p>

						<p style="margin-bottom: 0px; margin-top: 0px"><a href="https://www.pos-educ.com.br" style="color: #484848; font-size: 12px;">www.site.com.br</a></p>
						<ul style="list-style-type: none;padding: 0;margin-top: 5px;margin-bottom: 0px;">
							<li style="display: inline-block; margin-right: 5px"><a href="tel: +558836132034" style="text-decoration: none;color: #ffffffb8;font-size: 10px;">(**) *.****-****</a></li>
							<li style="display: inline-block"><a href="tel: +5588992249386" style="text-decoration: none;color: #ffffffb8;font-size: 10px;">(**) *.****-****</a></li>
						</ul>

					</section>

				</div>
			</div>
			<div style="height: 654px; width: 510px; background-color: #000000b5; position: relative; display: inline-block; z-index: 1; bottom: 654px"></div>
		</div>

	</div>
</section>

<div style="text-align: center">
	<button type="button" id="control_button_01" onclick="next_step_1()" class="btn btn-primary" style="background-color: #ed8036; border-color: #ed8036; margin-top: 35px">Próximo passo</button>
	<button type="button" id="control_button_02" onclick="back_step_1()" class="btn btn-primary" style="background-color: #ed8036; border-color: #ed8036; margin-top: 35px; display: none; margin-right: 20px">Voltar</button>
	<button type="button" id="control_button_03" onclick="next_step_2()" class="btn btn-primary" style="background-color: #ed8036; border-color: #ed8036; margin-top: 35px; display: none; margin-right: 20px">Próximo passo</button>
	<button type="button" id="control_button_04" onclick="back_step_2()" class="btn btn-primary" style="background-color: #ed8036; border-color: #ed8036; margin-top: 35px; display: none; margin-right: 20px">Voltar</button>
</div>

<form action="<?=base_url("test")?>" method="post">

	<?php
	for ($j = 1; $j < $i; $j++){
		echo '<input type="hidden" id="checkInput'.$j.'" name="emails[]">';
	}

	?>
	<input type="hidden" id="email_temp" name="email_temp">
	<!--	<button type="submit">Ola mundo</button>-->
	<button type="submit" id="control_button_05"  class="btn btn-primary" style="background-color: #ed8036; border-color: #ed8036; margin-top: 35px; display: none; margin-right: 20px">Enviar</button>
</form>
