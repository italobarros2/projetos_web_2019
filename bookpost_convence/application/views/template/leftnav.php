<body class="nav-sm">
<div class="container body">
	<div class="main_container">
		<div class="col-md-3 left_col">
			<div class="left_col scroll-view">
				<div class="navbar nav_title" style="border: 0;">
					<a href="<?=base_url()?>" class="site_title"><i class="fa fa-television" aria-hidden="true"></i><span>BookPost System</span></a>
				</div>

				<div class="clearfix"></div>

				<!-- menu profile quick info -->
				<div class="profile clearfix">
					<div class="profile_pic">
						<img src="<?=base_url('static/sistema/'.$user_data->foto)?>" style="width: 65px; height: 70px" alt="..." class="img-circle profile_img">
					</div>
					<div class="profile_info">
						<span>Bem vindo,</span>
						<h2 style="font-weight: bold"><?php if(strstr($user_data->nome_user, ' ', true) == ''){
							echo $user_data->nome_user;} else {
								echo strstr($user_data->nome_user, ' ', true);
							}?>.</h2>
					</div>
				</div>
				<!-- /menu profile quick info -->

				<br />

				<!-- sidebar menu -->
				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
					<div class="menu_section">
						<h3>Clientes</h3>
						<ul class="nav side-menu">
							<?php foreach ($emps as $emp){
								if($user_data->id_emp == 0 || $user_data->id_emp == $emp->id_emp){
									echo '
									<li><a><i class="fa fa-address-book-o" aria-hidden="true"></i>'.$emp->nome_empresa.'<span class="fa fa-chevron-down"></span></a>
										<ul class="nav child_menu">
										'; if ($user_data->id_emp == 0){
										echo '<li><a href="'.base_url($emp->user_insta.'/bookpost').'">BookPost</a></li>';
									}	echo '<li><a href="'.base_url($emp->user_insta.'/bookpost_cliente').'">BookPost Cliente</a></li>';
									if ($user_data->id_emp == 0){
										echo '<li><a href="'.base_url($emp->user_insta.'/add_post').'">Add Post</a></li>
														<li><a href="'.base_url($emp->user_insta.'/delete_bookpost').'" onclick="delete_bookpost()">Excluir Bookpost</a></li>';
									}echo'

											
										</ul>
									</li>
								';
								}
							}?>
						</ul>
					</div>
				</div>
				<div class="sidebar-footer hidden-small">
					<?php if($user_data->id_emp == 0){
						echo '<a data-toggle="tooltip" href="'.base_url("add_bookpost").'" data-placement="top" title="Adicionar Cliente">
									<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
								</a>';
					}else{
						echo '<a data-toggle="tooltip" data-placement="top" title="" style="background-color: #f7a600f5; cursor: initial;">
					</a>';
					}?>

					<a data-toggle="tooltip" data-placement="top" title="" style="background-color: #f7a600f5; cursor: initial;">
					</a>
					<a data-toggle="tooltip" data-placement="top" title="" style="background-color: #f7a600f5; cursor: initial;">
					</a>
					<a data-toggle="tooltip" data-placement="top" title="Sair" href="<?=base_url('login')?>">
						<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
					</a>
				</div>
				<!-- /menu footer buttons -->
			</div>
		</div>
