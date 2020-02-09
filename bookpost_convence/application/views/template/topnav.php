<!-- top navigation -->
<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>

			<ul class="nav navbar-nav navbar-right">
				<li class="">
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="<?=base_url('static/sistema/'.$user_data->foto)?>"  alt=""><?php echo $user_data->nome_user;?>
						<span class=" fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu dropdown-usermenu pull-right">
						<li><a href="<?=base_url('edit_user')?>"> Perfil</a></li>
						<li><a href="<?=base_url('login')?>"><i class="fa fa-sign-out pull-right"></i> Sair</a></li>
					</ul>
				</li>
				<?php if($user_data->id_emp == 0){
					echo '<li role="presentation" class="dropdown">
					<a href="javascript:;" style="cursor: not-allowed" class="dropdown-toggle info-number"> <!--data-toggle="dropdown" aria-expanded="false"-->
						<i class="fa fa-envelope-o"></i>
						<span class="badge bg-yellow">3</span>
					</a>
					<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
						<li>
							<a>
								<span class="image"><img src="<?=base_url(\'static/images/img.jpg\')?>" alt="Profile Image" /></span>
								<span>
                          <span>John Smith</span>
                          <span class="time">28/10/19 11:12</span>
                        </span>
								<span class="message">
Realizei uma sugestão de alteração.
                        </span>
							</a>
						</li>
						<li>
							<a>
								<span class="image"><img src="<?=base_url(\'static/images/img.jpg\')?>" alt="Profile Image" /></span>
								<span>
                          <span>Marcelo</span>
                          <span class="time">28/10/19 08:12</span>
                        </span>
								<span class="message">
Aprovei o Post_id: #01.
                        </span>
							</a>
						</li><li>
							<a>
								<span class="image"><img src="<?=base_url(\'static/images/img.jpg\')?>" alt="Profile Image" /></span>
								<span>
                          <span>Marcelo</span>
                          <span class="time">28/10/19 08:12</span>
                        </span>
								<span class="message">
Não aprovei o Post_id: #02.
                        </span>
							</a>
						</li>
						<li style="background-color: #425567">
							<div class="text-center">
								<a>
									<strong>Veja todas as notificações</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</li>
					</ul>
				</li>';
				}?>

			</ul>
		</nav>
	</div>
</div>
<!-- /top navigation -->
