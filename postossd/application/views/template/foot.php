<a href="https://api.whatsapp.com/send?phone=https://api.whatsapp.com/send?phone=5588996967000" class="float" target="_blank">
	<i class="fa fa-whatsapp my-float" aria-hidden="true"></i>
</a>
<footer class="footer" style="background: #2957a4; padding-bottom: 100px">
	<div class="footer_content">
		<div class="container no-pad">
			<div class="row">

				<!-- Footer About -->
				<div class="col-lg-4 footer_col" style="margin-left: 40px">
					<div class="footer_about">
						<div class="footer_logo">
							<a href="#">
								<img src="<?=base_url('static/images/logo_sd_b.png')?>" style="width: 80%" alt="">
							</a>
						</div>
					</div>
				</div>

				<!-- Footer Contact Info -->
				<div class="col-lg-2 footer_col" style="">
					<div class="footer_about_text about_text_perso" style="margin-top: 10px">
						<h3><span style="font-weight:600">Combustíveis</span></h3>
						<ul class=" contact_list_perso">
							<a href=""><li>Gasolina Shell V-Power</li></a>
							<a href=""><li>Gasolina Shell V-Power Racing</li></a>
							<a href=""><li>Shell V-Power Etanol</li></a>
							<a href=""><li>Shell Evolux Diesel</li></a>
							<a href=""><li>Conecte-se com a Shell</li></a>
						</ul>
					</div>
				</div>

				<div class="col-lg-3 footer_col" style="">
					<div class="footer_about_text about_text_perso" style="margin-top: 10px">
						<h3><span style="font-weight:600">Mais sobre os Postos SD</span></h3>
						<ul class=" contact_list_perso">
							<a href=""><li>Fale conosco</li></a>
							<a href=""><li>Carreiras</li></a>
							<a href=""><li>Imprensa</li></a>
							<a href=""><li>Nossa História</li></a>
							<a href=""><li>Sobre os Posto SD</li></a>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 footer_col" style="">
					<div class="footer_about_text about_text_perso" style="margin-top: 10px">
						<h3><span style="font-weight:600">Conecte-se com os Postos SD</span></h3>
						<ul class="social_list_perso">
							<a href="https://www.facebook.com/GrupoSaoDomingos/"><li><i class="fa fa-facebook" aria-hidden="true" style="left: 9px"></i></li></a>
							<a href="https://www.instagram.com/postossaodomingos/"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
							<a href="https://api.whatsapp.com/send?phone=5588996967000"><li><i class="fa fa-whatsapp" aria-hidden="true"></i></li></a>
						</ul>
					</div>
				</div>


			</div>
		</div>
	</div>
</footer>
<script src="<?=base_url('static/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?=base_url('static/styles/bootstrap-4.1.2/popper.js')?>"></script>
<script src="<?=base_url('static/styles/bootstrap-4.1.2/bootstrap.min.js')?>"></script>
<script src="<?=base_url('static/plugins/greensock/TweenMax.min.js')?>"></script>
<script src="<?=base_url('static/plugins/greensock/TimelineMax.min.js')?>"></script>
<script src="<?=base_url('static/plugins/scrollmagic/ScrollMagic.min.js')?>"></script>
<script src="<?=base_url('static/plugins/greensock/animation.gsap.min.js')?>"></script>
<script src="<?=base_url('static/plugins/greensock/ScrollToPlugin.min.js')?>"></script>
<script src="<?=base_url('static/plugins/OwlCarousel2-2.2.1/owl.carousel.js')?>"></script>
<script src="<?=base_url('static/plugins/easing/easing.js')?>"></script>
<script src="<?=base_url('static/plugins/parallax-js-master/parallax.min.js')?>"></script>
<script src="<?=base_url('static/plugins/jquery-datepicker/jquery-ui.js')?>"></script>
<script src="<?=base_url('static/js/custom.js')?>"></script>
<script src="<?=base_url('static/js/perso.js')?>"></script>
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
<script>
	var owl = $('.owl-carousel.car-postos');
	owl.owlCarousel({
		items:4,
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:true,
		responsive:{
			0:{
				items:1,
				nav:false,
			},
			767:{
				items:1,
				nav:false,
			},
			992:{
				items:1
			}
		}
	});
</script>
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
</body>
</html>
