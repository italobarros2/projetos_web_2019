<!--<a href="https://api.whatsapp.com/send?phone=https://api.whatsapp.com/send?phone=5588996967000" class="float" target="_blank">-->
<!--	<i class="fa fa-whatsapp my-float" aria-hidden="true"></i>-->
<!--</a>-->
<footer class="footer" style="background: #924091; padding-top: 30px">
	<div class="footer_content" style="padding-top: 0px">
		<div class="container no-pad">
			<div class="row">

				<!-- Footer About -->
				<div class="col-lg-3">
					<div class="footer_about">
						<div class="footer_logo" style="text-align: right">
							<a href="<?=base_url()?>">
								<img src="<?=base_url('static/images/logo_footer.png')?>" style="width: 55%" alt="">
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-1"></div>

				<!-- Footer Contact Info -->
				<div class="col-lg-3 footer_col" style="">
					<div class="footer_about_text about_text_perso" style="margin-top: 10px">
						<h3>Endereço</h3>
						<p>Rua Astolfo Menescal, 740, <br>Jerônimo de Medeiros Prado, Sobral.</p>
					</div>
				</div>

				<div class="col-lg-2 footer_col" style="">
					<div class="footer_about_text about_text_perso" style="margin-top: 10px">
						<h3>Contatos</h3>
						<ul class="contact_list_perso">
							<a href="tel:(88) 2144 3621" target="_blank"><li>(88) 2144 3621</li></a>
							<a href="tel: (88) 99839 5710" target="_blank"><li>(88) 99839 5710</li></a>
						</ul>
					</div>
				</div>

				<div class="col-lg-2 footer_col" style="">
					<div class="footer_about_text about_text_perso" style="margin-top: 10px">
						<h3>Acesso rápido</h3>
						<ul class="contact_list_perso">
							<a href="<?=base_url()?>"><li>Início</li></a>
							<a href="<?=base_url('sobre-nos')?>"><li>Sobre nós</li></a>
							<a href="<?=base_url('nossos-produtos')?>"><li>Produtos</li></a>
							<a href="<?=base_url('vamos-fazer-negocio')?>"><li>Vamos fazer negócio?</li></a>
<!--							<a href="--><?//=base_url('')?><!--"></a><li>Blog</li>-->
							<a href="<?=base_url('contato')?>"><li>Contato</li></a>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT_fG4Wqffzs8RroYTxtaQx0mdi6RRMqY&callback=init" type="text/javascript"></script>
<script src="<?=base_url('static/js/custom.js')?>"></script>
<script src="<?=base_url('static/js/perso.js')?>"></script>
<script src="<?=base_url('static/js/bnf.js')?>"></script>
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
		items:2,
		loop:true,
		nav: true,
		margin:10,
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:true,
		responsiveClass:true,
		responsive: {
			0: {
				items: 1,
				nav: false
			},
			1000:{
				items:2,
				nav:true,
				loop:true
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
<script>
	//------- Google Map  js --------//

	if (document.getElementById("map")) {
		google.maps.event.addDomListener(window, 'load', init);

		function init() {
			var mapOptions = {
				zoom: 16,
				center: new google.maps.LatLng(-3.6912798,-40.3519855), // New York
				styles: [{
					"featureType": "water",
					"elementType": "geometry",
					"stylers": [{
						"color": "#e9e9e9"
					}, {
						"lightness": 17
					}]
				}, {
					"featureType": "landscape",
					"elementType": "geometry",
					"stylers": [{
						"color": "#f5f5f5"
					}, {
						"lightness": 20
					}]
				}, {
					"featureType": "road.highway",
					"elementType": "geometry.fill",
					"stylers": [{
						"color": "#ffffff"
					}, {
						"lightness": 17
					}]
				}, {
					"featureType": "road.highway",
					"elementType": "geometry.stroke",
					"stylers": [{
						"color": "#ffffff"
					}, {
						"lightness": 29
					}, {
						"weight": 0.2
					}]
				}, {
					"featureType": "road.arterial",
					"elementType": "geometry",
					"stylers": [{
						"color": "#ffffff"
					}, {
						"lightness": 18
					}]
				}, {
					"featureType": "road.local",
					"elementType": "geometry",
					"stylers": [{
						"color": "#ffffff"
					}, {
						"lightness": 16
					}]
				}, {
					"featureType": "poi",
					"elementType": "geometry",
					"stylers": [{
						"color": "#f5f5f5"
					}, {
						"lightness": 21
					}]
				}, {
					"featureType": "poi.park",
					"elementType": "geometry",
					"stylers": [{
						"color": "#dedede"
					}, {
						"lightness": 21
					}]
				}, {
					"elementType": "labels.text.stroke",
					"stylers": [{
						"visibility": "on"
					}, {
						"color": "#ffffff"
					}, {
						"lightness": 16
					}]
				}, {
					"elementType": "labels.text.fill",
					"stylers": [{
						"saturation": 36
					}, {
						"color": "#333333"
					}, {
						"lightness": 40
					}]
				}, {
					"elementType": "labels.icon",
					"stylers": [{
						"visibility": "off"
					}]
				}, {
					"featureType": "transit",
					"elementType": "geometry",
					"stylers": [{
						"color": "#f2f2f2"
					}, {
						"lightness": 19
					}]
				}, {
					"featureType": "administrative",
					"elementType": "geometry.fill",
					"stylers": [{
						"color": "#fefefe"
					}, {
						"lightness": 20
					}]
				}, {
					"featureType": "administrative",
					"elementType": "geometry.stroke",
					"stylers": [{
						"color": "#fefefe"
					}, {
						"lightness": 17
					}, {
						"weight": 1.2
					}]
				}]
			};
			var mapElement = document.getElementById('map');
			var map = new google.maps.Map(mapElement, mapOptions);
			var marker = new google.maps.Marker({
				position: new google.maps.LatLng(-3.6912798,-40.3519855),
				map: map,
				title: 'Grupo SD'
			});
		}
	}
</script>

</body>
</html>
