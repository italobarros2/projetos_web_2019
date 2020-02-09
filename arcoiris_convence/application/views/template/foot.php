<!-- JS here -->

<script src="<?=base_url('static/js/vendor/modernizr-3.5.0.min.js')?>"></script>
<script src="<?=base_url('static/js/vendor/jquery-1.12.4.min.js')?>"></script>
<script src="<?=base_url('static/js/popper.min.js')?>"></script>
<script src="<?=base_url('static/js/bootstrap.min.js')?>"></script>
<script src="<?=base_url('static/js/owl.carousel.min.js')?>"></script>
<script src="<?=base_url('static/js/isotope.pkgd.min.js')?>"></script>
<script src="<?=base_url('static/js/ajax-form.js')?>"></script>
<script src="<?=base_url('static/js/waypoints.min.js')?>"></script>
<script src="<?=base_url('static/js/jquery.counterup.min.js')?>"></script>
<script src="<?=base_url('static/js/imagesloaded.pkgd.min.js')?>"></script>
<script src="<?=base_url('static/js/scrollIt.js')?>"></script>
<script src="<?=base_url('static/js/jquery.scrollUp.min.js')?>"></script>
<script src="<?=base_url('static/js/wow.min.js')?>"></script>
<script src="<?=base_url('static/js/nice-select.min.js')?>"></script>
<script src="<?=base_url('static/js/jquery.slicknav.min.js')?>"></script>
<script src="<?=base_url('static/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?=base_url('static/js/plugins.js')?>"></script>
<script src="<?=base_url('static/js/gijgo.min.js')?>"></script>
<script src="<?=base_url('static/js/jquery.stellar.min.js')?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCT_fG4Wqffzs8RroYTxtaQx0mdi6RRMqY&callback=initMap" type="text/javascript"></script>
<!--contact js-->
<script src="<?=base_url('static/js/contact.js')?>"></script>
<script src="<?=base_url('static/js/jquery.ajaxchimp.min.js')?>"></script>
<script src="<?=base_url('static/js/jquery.form.js')?>"></script>
<script src="<?=base_url('static/js/jquery.validate.min.js')?>"></script>
<script src="<?=base_url('static/js/mail-script.js')?>"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="<?=base_url('static/js/main.js')?>"></script>
<script src="<?=base_url('static/js/scripts.js')?>"></script>
<script>
    $('body').stellar();
</script>
<script>
	AOS.init();
</script>
<script>

    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $('#datepicker2').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }

    });
</script>

<script>
    //------- Google Map  js --------//

    if (document.getElementById("map")) {
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(-3.672629,-40.3566882), // New York
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
                position: new google.maps.LatLng(-3.672629,-40.3566882),
                map: map,
                title: 'Art Solda Sobral'
            });
        }
    }
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

</body>

</html>
