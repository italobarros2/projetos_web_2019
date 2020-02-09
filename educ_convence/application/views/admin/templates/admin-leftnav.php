<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark" style="background-color: #ed8036">
	<div class="menu-list">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="d-xl-none d-lg-none" href="#" style="color: white">Dashboard</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav flex-column">
					<li class="nav-divider" style="color:#fff;">
						Menu
					</li>
					<li class="nav-item " style="background-color: #ed8036">
						<a class="nav-link <?php echo $control1;?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1" style="background-color: #944d1d"><i class="fa fa-fw fa-user-circle" style="color: #fff"></i>Dashboard <span class="badge badge-success">6</span></a>
						<div id="submenu-1" class="collapse submenu <?php echo $controla1;?>" style="">
							<ul class="nav flex-column">
								<li class="nav-item" style="background-color: ">
									<a class="nav-link <?php echo $control11;?>" style="" href="<?=base_url('engine_convence/dashboard')?>">Principal</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?php echo $control12;?>" href="<?=base_url('engine_convence/sem_curso')?>">Sem curso</a>
								</li>
							</ul>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php echo $control2;?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2" style="background-color: #944d1d"><i class="fa fa-fw fa-rocket" style="color: #fff" ></i>Cursos</a>
						<div id="submenu-2" class="collapse submenu <?php echo $controla2;?>" style="">
							<ul class="nav flex-column">

								<?php $i = 1;
								foreach ($cursos as $curso){
									if($curso->id_cursos == 5){

									}else{
										if($control21 == $i){
											echo '
										<li class="nav-item">
                                        	<a class="nav-link active" href="'.base_url('engine_convence/cursos/'.$curso->link).'">'.$curso->nome.'<span class="badge badge-secondary"></span></a>
                                    	</li>
									';
										}else{
											echo '
										<li class="nav-item">
                                        	<a class="nav-link" href="'.base_url('engine_convence/cursos/'.$curso->link).'">'.$curso->nome.'<span class="badge badge-secondary"></span></a>
                                    	</li>
									';
										}
										$i++;
									}
								}

								?>
							</ul>
						</div>
					</li>
					<li class="nav-item " style="background-color: #ed8036">
						<a class="nav-link <?php echo $control3;?>" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3" style="background-color: #944d1d"><i class="fa fa-university" style="color: #fff"></i>Seminários<span class="badge badge-success">6</span></a>
						<div id="submenu-3" class="collapse submenu <?php echo $controla3;?>" style="">
							<ul class="nav flex-column">
								<li class="nav-item" style="background-color: ">
									<a class="nav-link <?php echo $control31;?>" style="" href="<?=base_url('engine_convence/seminarios')?>">III Seminário Neuroaprendizagem</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->
