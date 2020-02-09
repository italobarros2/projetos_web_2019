<!--<a href="https://api.whatsapp.com/send?phone=https://api.whatsapp.com/send?phone=5588996967000" class="float" target="_blank">-->
<!--	<i class="fa fa-whatsapp my-float" aria-hidden="true"></i>-->
<!--</a>-->
<footer class="footer" style="background: #b80c10; padding-bottom: 100px;">
	<div class="footer_content">
		<div class="container no-pad">
			<div class="row">

				<!-- Footer About -->
				<div class="col-lg-4 footer_col" style="margin-left: 40px">
					<div class="footer_about">
						<div class="footer_logo">
							<a href="#">
								<img src="<?=base_url('static/images/grupo_logo.png')?>" style="width: 60%" alt="">
							</a>
						</div>
					</div>
				</div>

				<!-- Footer Contact Info -->
				<div class="col-lg-4 footer_col" style="">
					<div class="footer_about_text about_text_perso" style="margin-top: 10px">
						<h3><span style="font-weight:600">O grupo</span></h3>
						<ol class="contact_list_perso">
							<li>Postos São Domingos</li>
							<li>LubNorte</li>
							<li>LubNord</li>
							<li>SD Pneus</li>
							<li>SD Plaza Hotel</li>
						</ol>
					</div>
				</div>

				<div class="col-lg-2 footer_col" style="">
					<div class="footer_about_text about_text_perso" style="margin-top: 10px">
						<h3><span style="font-weight:600">Siga-nos</span></h3>
						<ul class="social_list_perso">
							<a href="https://www.facebook.com/GrupoSaoDomingos/"><li><i class="fa fa-facebook" aria-hidden="true" style="left: 9px"></i></li></a>
							<a href="https://www.instagram.com/gsaodomingos/"><li><i class="fa fa-instagram" aria-hidden="true"></i></li></a>
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
		autoplayHoverPause:true
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
