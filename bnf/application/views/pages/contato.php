
<div class="container">
	<div class="row" style="padding-bottom: 100px">
		<div class="col-lg-10 offset-lg-1 col-sm-10 offset-sm-1">
			<div class="row">
				<div class="col-lg-4" style="margin-top: 80px; padding-left: 60px" id="info-antes">
					<div style="margin-bottom: 80px">
						<i class="fa fa-phone-square" style="position: absolute; color: #924091; font-size: 26px" aria-hidden="true"></i>
						<ul class="ulazy" style="padding-left: 30px">
							<a href="tel:(88) 2144 3621" target="_blank"><li>(88) 2144 3621</li></a>
							<a href="tel: (88) 99839 5710" target="_blank"><li>(88) 99839 5710</li></a>
						</ul>
					</div>
					<div style="margin-bottom: 80px">
						<i class="fa fa-map-marker" style="position: absolute; color: #924091; font-size: 26px" aria-hidden="true"></i>
						<div style="padding-left: 26px; font-size: 18px; color: #924091;font-weight: 500; line-height: 20px">
							Rua Astolfo Menescal, 740,<br>Jerônimo de Medeiros Prado, <br>Sobral/CE.
						</div>
					</div>
					<div>
						<i class="fa fa-instagram" style="position: absolute; color: #924091; font-size: 26px; bottom: 1px" aria-hidden="true"></i>
						<div style="padding-left: 30px; font-size: 18px; color: #924091;font-weight: 500; line-height: 20px">
							<a href="https://www.instagram.com/bnfacai/?hl=pt-br" style="color: #924091" target="_blank">Siga @bnfacai.</a>
						</div>
					</div>
				</div>
				<div class="col-lg-8 form-div contact" style="margin-top: 80px">
					<h5 style="font-size: 20px; font-weight: 800; padding-left: 30px">FALE CONOSCO</h5>
					<form action="<?=base_url('processamento')?>" class="negocio-form" method="post">
						<div class="row" style="margin-top: 25px">
							<div class="col-lg-12">
								<textarea type="text" class="txtarea-neg" id="last-name" name="motivo" required="required" placeholder="Qual motivo do seu contato?" style="margin-bottom: 20px"></textarea>
							</div>
							<div class="col-lg-8">
								<input class="form-control-perso neg valid" name="nome" required type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" placeholder="Nome">
							</div>
							<div class="col-lg-4">
								<input class="form-control-perso neg valid" required pattern="[0-9.].{8,16}.[/\(([^)]+)\)/]"  OnKeyPress="formatar('###)#.####-####', this)" name="tel" id="tel" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefone'" placeholder="Telefone (WhatsApp)">
							</div>
							<div class="col-lg-8">
								<input class="form-control-perso neg valid" name="email" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" placeholder="E-mail">
							</div>
							<div class="col-lg-4">
								<input class="form-control-perso neg valid" required name="cidade" id="cidade" type="text" placeholder="Cidade">
							</div>
							<div class="col-lg-12">
								<textarea type="text" class="txtarea-neg" id="last-name" name="mensagem" required="required" placeholder="Mensagem"></textarea>
							</div>
							<div class="col-lg-12" style="text-align: right">
								<button type="submit" class="nl-form-sub" style="background: #f7b400; border-color: #f7b400">ENVIAR</button>
							</div>
						</div>
					</form>
				</div>
				<div class="col-lg-4" style="margin-top: 80px; padding-left: 60px" id="info-depois">
					<div style="margin-bottom: 80px">
						<i class="fa fa-phone-square" style="position: absolute; color: #924091; font-size: 26px" aria-hidden="true"></i>
						<ul class="ulazy" style="padding-left: 30px">
							<a href="tel:(88) 2144 3621" target="_blank"><li>(88) 2144 3621</li></a>
							<a href="tel: (88) 99839 5710" target="_blank"><li>(88) 99839 5710</li></a>
						</ul>
					</div>
					<div style="margin-bottom: 80px">
						<i class="fa fa-map-marker" style="position: absolute; color: #924091; font-size: 26px" aria-hidden="true"></i>
						<div style="padding-left: 26px; font-size: 18px; color: #924091;font-weight: 500; line-height: 20px">
							Rua Astolfo Menescal, 740,<br>Jerônimo de Medeiros Prado, <br>Sobral/CE.
						</div>
					</div>
					<div>
						<i class="fa fa-instagram" style="position: absolute; color: #924091; font-size: 26px; bottom: 1px" aria-hidden="true"></i>
						<div style="padding-left: 30px; font-size: 18px; color: #924091;font-weight: 500; line-height: 20px">
							<a href="https://www.instagram.com/bnfacai/?hl=pt-br" style="color: #924091" target="_blank">Siga @bnfacai.</a>
						</div>
					</div>
				</div>
				<div class="col-lg-8 form-div contact">
					<h5 style="font-weight: 800; font-size: 18px">SEJA NOSSO PARCEIRO</h5>
					<h5 style="font-weight: 800; font-size: 18px">QUAL O MOTIVO DO SEU CONTATO?</h5>
					<form action="<?=base_url('processamento')?>" class="negocio-form" method="post">
						<input type="radio" value="Quero montar uma loja" style="position: relative; top: 2px" name="motivo"><label for="motivo">Quero montar uma loja.</label><br>
						<input type="radio" value="Quero montar uma loja e ser parceiro BNF com seus produtos" class="fix-radio" style="position: relative; top: 2px" name="motivo"><label class="fix-lab" for="motivo">Quero montar uma loja e ser parceiro BNF com seus produtos.</label><br>
						<input type="radio" value="Quero ser um distribuidor autorizado na minha região" class="fix-radio" style="position: relative; top: 2px" name="motivo"><label class="fix-lab" for="motivo">Quero ser um distribuidor autorizado na minha região.</label>
						<div class="row" style="margin-top: 25px">
							<div class="col-lg-8">
								<input class="form-control-perso neg valid" name="nome" required type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" placeholder="Nome">
							</div>
							<div class="col-lg-4">
								<input class="form-control-perso neg valid" required pattern="[0-9.].{8,16}.[/\(([^)]+)\)/]"  OnKeyPress="formatar('###)#.####-####', this)" name="tel" id="tel" type="tel" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefone'" placeholder="Telefone (WhatsApp)">
							</div>
							<div class="col-lg-8">
								<input class="form-control-perso neg valid" name="email" required pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'" placeholder="E-mail">
							</div>
							<div class="col-lg-4">
								<input class="form-control-perso neg valid" required name="cidade" id="cidade" type="text" placeholder="Cidade">
							</div>
							<div class="col-lg-12">
								<textarea type="text" class="txtarea-neg" id="last-name" name="mensagem" required="required" placeholder="Mensagem"></textarea>
							</div>
							<div class="col-lg-12" style="text-align: right">
								<button type="submit" class="nl-form-sub">ENVIAR</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

