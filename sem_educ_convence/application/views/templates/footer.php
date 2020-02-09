<footer id="colorlib-footer" style="padding-bottom: 6em; padding-top: 10em">

		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12 animate-box" style="margin-bottom: 25px">
							<h1>Nossos contatos</h1>
							<p>Rua Maria Cesarina Lopes Barreto, 574<br>Campo dos Velhos, Sobral, Ceará.</br></p>
							<a href="tel: +558836132034" style="text-decoration: none">
								(88) 3613-2034</a>
							<br><a href="tel: +5588992249386" style="text-decoration: none">
								(88) 9.9224-9386</a>
							<ul style="list-style-type: none; padding: 0; margin-top: 20px">
								<li style="display: inline-block; margin-right: 5px"><a href="https://pt-br.facebook.com/educce/"><img style="height: 30px" src="<?=base_url('static/educ/img/fb-icon2.png')?>" alt="fb-icon"></a></li>
								<li style="display: inline-block"><a href="https://www.instagram.com/educsobraloficial/"><img style="height: 30px" src="<?=base_url('static/educ/img/insta-icon3.png')?>" alt="fb-icon"></a></li></ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-1">
					<div class="register_form animate-box">
						<h3 style="margin-bottom: 10px">Alguma dúvida?</h3>
						<form class="form_area" id="" action="<?=base_url('processo')?>" id="form-cont" method="post">
							<div class="row">
								<div class="col-lg-12 form_group">
									<input name="name" placeholder="Nome" required="" type="text">
									<input name="email" placeholder="E-mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
										   required="" type="email">
									<input name="tel" placeholder="Telefone" required="" pattern="[0-9.].{8,16}.[/\(([^)]+)\)/]" required="" OnKeyPress="formatar('###)#.####-####', this)" type="tel">
									<input type="hidden" value="4" name="curso">
									<textarea name="comment" cols="25" rows="5" style="margin-top: 20px; color: black; width: 100%; border: 1px solid #eeeeee; padding-left: 11px" placeholder="Digite sua mensagem"></textarea>
								</div>
								<div class="col-lg-12 text-center">
									<button class="primary-btn" style="box-shadow: none" id="contactButton1">Enviar</button>
									<script type="text/javascript">
                                        document.getElementById('contactButton1').addEventListener('click', function() {
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

</footer>
</div>

<a href="https://api.whatsapp.com/send?phone=5588992249386&text=Olá,%20quero%20mais%20informações%20sobre%20o%20Terceiro%20Seminário%20de%20Neuroaprendizagem%20e%20Transtornos%20Escolares,%20por%20favor." class="float" target="_blank">
	<i class="fa fa-whatsapp my-float"></i>
</a>

<!-- jQuery -->
<script src="<?=base_url('static/js/jquery.min.js')?>"></script>
<!-- jQuery Easing -->
<script src="<?=base_url('static/js/jquery.easing.1.3.js')?>"></script>
<!-- Bootstrap -->
<script src="<?=base_url('static/js/bootstrap.min.js')?>"></script>
<!-- Waypoints -->
<script src="<?=base_url('static/js/jquery.waypoints.min.js')?>"></script>
<!-- Stellar Parallax -->
<script src="<?=base_url('static/js/jquery.stellar.min.js')?>"></script>
<!-- Flexslider -->
<script src="<?=base_url('static/js/jquery.flexslider-min.js')?>"></script>
<!-- Owl carousel -->
<script src="<?=base_url('static/js/owl.carousel.min.js')?>"></script>
<!-- Magnific Popup -->
<script src="<?=base_url('static/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?=base_url('static/js/magnific-popup-options.js')?>"></script>
<!-- Counters -->
<script src="<?=base_url('static/js/jquery.countTo.js')?>"></script>
<!-- Main -->
<script src="<?=base_url('static/js/main.js')?>"></script>
<script>
    $('a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
            targetOffset = $(id).offset().top;

        $('html, body').animate({
            scrollTop: targetOffset
        }, 1000);
    });
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

</div>
</body>
</html>

