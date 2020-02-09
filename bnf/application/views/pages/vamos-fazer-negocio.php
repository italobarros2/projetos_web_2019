<div class="row fix-neg" style="background: url(<?=base_url('static/images/negocio_bg.png')?>) no-repeat; background-size: 1500px 2265px; padding-top: 260px; padding-bottom:  360px">
	<div class="fixed-bg-1" style="height: 400px; top: 1200px"></div>
	<div class="fixed-bg-1 dir" style="height: 400px; top: 150px; right: 15px"></div>
	<div class="col-lg-10 offset-lg-1">
		<div class="col-lg-6 negocio-content">
			<h1>Vamos fazer negócio?</h1>
			<p>Fazer grandes negócios também está na alma do Brasil. A BNF, mais do que qualquer outra empresa, acredita nos grandes negócios e nas pessoas que tentam construí-los. Por isso, nós acreditamos em você que escolheu esse segmento tão promissor para construir o seu negócio.
				<br>
				<br>
				As lojas de açaí são empreendimentos promissores em qualquer lugar do Brasil por se tratar de um empreendimento que está relacionado à alimentação saudável, qualidade de vida das pessoas e praticidade da alimentação rápida. É um negócio que abrange todos os públicos, é rentável, além de ser escalável.
			</p>
			<h5>Você tem tudo para montar um negócio de sucesso com a BNF Açaí!</h5>
			<ul class="ul-top">
				<li>Produzimos produtos com alto padrão de qualidade. A Linha Premium de produtos que oferecemos é para você que preza pela excelência de todos os detalhes do seu negócio e que quer fidelizar seu público oferecendo o melhor.</li>
				<li>Somos fornecedores que oferece uma variedade de produtos com características perfeitas para qualquer negócio, que vai desdes de os sabores ao preço, para você que empreende em áreas de alta competitividade.</li>
				<li>Oferecemos um programa de suporte para lojas de açaí, que vai desde a montagem da loja à manutenção contínua do estabelecimento. Nossos serviços de suporte são indicados tanto para quem deseja montar sua loja de açaí, assim como para estabelecimentos que já atuam no mercado e que procuram tornar-se referência no segmento.</li>
			</ul>
		</div>
		<div class="col-lg-6"></div>
		<div class="col-lg-8 form-div">
			<h5>Agora vamos falar de negócios?<br>Mande sua mensagem para a BNF Açaí: <br><b>QUAL O MOTIVO DO SEU CONTATO?</b></h5>
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
