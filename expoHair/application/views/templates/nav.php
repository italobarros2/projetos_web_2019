<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
	<script>

			setTimeout(function(){

					$(".loader").fadeOut();
					$("#preloder").delay(400).fadeOut("slow");


			}, 3000);

			$(window).on('load', function() {
				/*------------------
                    Preloder
                --------------------*/

				$(".loader").fadeOut();
				$("#preloder").delay(400).fadeOut("slow");

			});

	</script>
</div>
	<!-- Header section -->
<header id="header" class="header-section">
		<div class="header-warp">
			<!-- logo -->
			<a href="/" class="site-logo">
				<img src="<?=base_url('static/img/logo.png')?>" width="250px" alt="">
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- Navigation Menu -->
			<ul class="main-menu">
				<li><a href="<?=base_url()?>">Home</a></li>
				<li><a href="<?=base_url('inscricao')?>">Inscrição</a></li>
				<li><a href="<?=base_url('cursos')?>">Congresso</a></li>
<!--				<li><a href="--><?//=base_url('feira')?><!--">Ingresso da Feira</a></li>-->
				<li><a href="<?=base_url('ingressos')?>">Ingressos</a></li>
				<li><a href="<?=base_url('batalhadosbarbeiros')?>">Batalha dos Barbeiros</a></li>
<!--				<li><a href="--><?//=base_url('convite')?><!--">Convite Free Pass</a></li>-->
<!--                <li><a href="--><?//=base_url('pages/info')?><!--">Sobre</a></li>-->
				<li><a href="<?=base_url('pages/planta')?>">Planta</a></li>
			</ul>
		</div>
</header>
	<!-- Header section end -->
