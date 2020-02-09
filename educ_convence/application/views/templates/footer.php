<a href="https://api.whatsapp.com/send?phone=5588992249386&text=Olá,%20quero%20mais%20informações%20sobre%20o%20Terceiro%20Seminário%20de%20Neuroaprendizagem%20e%20Transtornos%20Escolares,%20por%20favor." class="float" target="_blank">
	<i class="fa fa-whatsapp my-float" aria-hidden="true"></i>
</a>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="<?=base_url('static/js/jquery-3.2.1.min.js')?>"></script>
		<script src="<?=base_url('static/js/popper.js')?>"></script>
		<script src="<?=base_url('static/js/bootstrap.min.js')?>"></script>
		<script src="<?=base_url('static/js/stellar.js')?>"></script>
		<script src="<?=base_url('static/js/countdown.js')?>"></script>
		<script src="<?=base_url('static/vendors/nice-select/js/jquery.nice-select.min.js')?>"></script>
		<script src="<?=base_url('static/vendors/owl-carousel/owl.carousel.min.js')?>"></script>
		<script src="<?=base_url('static/js/owl-carousel-thumb.min.js')?>"></script>
		<script src="<?=base_url('static/js/jquery.ajaxchimp.min.js')?>"></script>
		<script src="<?=base_url('static/vendors/counter-up/jquery.counterup.js')?>"></script>
		<script src="<?=base_url('static/js/mail-script.js')?>"></script>
		<!--gmaps Js-->
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
		<script src="<?=base_url('static/js/gmaps.min.js')?>"></script>
		<script src="<?=base_url('static/js/theme.js')?>"></script>
		<script>
			$('.nav a[href^="#"]').on('click', function(e) {
				e.preventDefault();
				var id = $(this).attr('href'),
					targetOffset = $(id).offset().top;

				$('html, body').animate({
					scrollTop: targetOffset - 100
				}, 1000);
			});
		</script>
		<script>
			var a = 0;
			function openModal() {
			    if(!a){
                    $('#modal-form').slideDown("slow", function () {
                        a = 1;
                    })
				}else{
                    $('#modal-form').slideUp("slow", function () {
                        a = 0;
                    })
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
