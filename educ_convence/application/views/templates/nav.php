<body>
<!--================ Start Header Menu Area =================-->
<div style="background: linear-gradient(90deg, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1)), url(<?=$link?>) no-repeat scroll -2px;" class="<?php echo $details;?>">
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
				<a class="navbar-brand logo_h" href="<?=base_url()?>"><img src="<?=base_url('static/img/logo_educ_y.png')?>" id="img-logo" alt=""></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav ml-auto">
						<li class="nav-item"><a class="nav-link-perso nav-link" href="#home">Inicio</a></li>
						<li class="nav-item"><a class="nav-link-perso nav-link" href="#diferencials">Diferenciais</a></li>
						<li class="nav-item"><a class="nav-link-perso nav-link" href="#disciplines">Disciplinas</a></li>
						<li class="nav-item"><a class="nav-link-perso nav-link" href="#contact">Contato</a>
						<li class="nav-item submenu dropdown">
							<a href="#" class="nav-link-perso nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							   aria-expanded="false">Pós-graduações</a>
							<ul class="dropdown-menu">
								<?php foreach ($cursos as $curso){
									if($curso->id_cursos == 5){
									}else{
										echo '<li class="nav-item-perso nav-item"><a class="nav-link-perso nav-link" href="'.base_url($curso->link).'">'.$curso->nome.'</a></li>';
									}
								}

								?>
							</ul>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
	</div>
</header>


<!--================ End Header Menu Area =================-->
