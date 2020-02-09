<body style="height: 100%">
<!--================ Start Header Menu Area =================-->
<script>
	fbq('track', 'CompleteRegistration');
</script>
<div style="background: linear-gradient(90deg, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.2)), url(http://localhost/educ_convence/static/img/background.png) no-repeat scroll -2px;">
	<header class="header_area" style="margin-top: -70px; top: 70px;">
		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>

			<nav class="navbar-perso navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html"><img src="<?=base_url('static/img/logo_educ.png')?>" id="img-logo" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item"><a class="nav-link-perso nav-link" href="<?=base_url()?>">Voltar</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
</div>
<!--================ Start Fact Area =================-->

<div class="fact_area_perso fact_area overlay" id="diferencials" style="height: 750px">
	<div class="container"">
	<div class="row">
		<div class="col-md-8 offset-md-2 result_box	align-items-center">
			<h2 style="color: gold; text-align: center; margin-bottom: 50px">Tudo Pronto !</h2>
			<h4 style="color: gold; text-align: center; background-color: #000">Em breve, entraremos em contato!</h4>
			<a href="<?=base_url()?>"><p style="margin-top: 40px; text-align: center; color: #484f56">VOLTAR</p></a>
		</div>

	</div>


</div>


