<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="<?php echo asset_url().'css/main.css' ?>" rel="stylesheet" type="text/css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<title>Carlos 2017</title>
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    script(src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')
    -->

	<script src="<?php echo asset_url(); ?>js/jquery-2.1.4.min.js"></script>
</head>
<body class="sidebar-mini fixed">
	<div class="wrapper">
		<!-- Navbar-->
		<header class="main-header hidden-print">
			<a class="logo" href="index.html">Vali</a>
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button--><a class="sidebar-toggle" data-toggle="offcanvas" href="#"></a> <!-- Navbar Right Menu-->
				<div class="navbar-custom-menu">
					<ul class="top-nav">
						<!--Notification Menu-->
						<li class="dropdown notification-menu">
							<a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-bell-o fa-lg"></i></a>
							<ul class="dropdown-menu">
								<li class="not-head">You have 4 new notifications.</li>
								<li>
									<a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>

									<div class="media-body">
										<span class="block">Lisa sent you a mail</span><span class="text-muted block">2min ago</span>
									</div></a>
								</li>
								<li>
									<a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
									<div class="media-body">
										<span class="block">Server Not Working</span><span class="text-muted block">2min ago</span>
									</div></a>
								</li>
								<li>
									<a class="media" href="javascript:;"><span class="media-left media-icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>

									<div class="media-body">
										<span class="block">Transaction xyz complete</span><span class="text-muted block">2min ago</span>
									</div></a>
								</li>
								<li class="not-footer">
									<a href="#">See all notifications.</a>
								</li>
							</ul>
						</li>
						<!-- User Menu-->

						<li class="dropdown">
							<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"><i class="fa fa-user fa-lg"></i></a>

							<ul class="dropdown-menu settings-menu">
								<li>
									<a href="<?php echo site_url('settings'); ?>"><i class="fa fa-cog fa-lg"></i> Settings</a>
								</li>
								<li>
									<a href="<?php echo site_url('settings/profile'); ?>"><i class="fa fa-user fa-lg"></i> Profile</a>
								</li>
								<li>
									<a href="<?php echo site_url('logout'); ?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Side-Nav-->


		<aside class="main-sidebar hidden-print">
			<section class="sidebar">
				<div class="user-panel">
					<div class="pull-left image"><img alt="User Image" class="img-circle" src="<?php echo asset_url().'images/user.png'?>"></div>
					<div class="pull-left info">
						<p><?php echo get_user('name'); ?></p>
						<p class="designation">Frontend Developer</p>
					</div>
				</div>
				<!-- Sidebar Menu-->

				<ul class="sidebar-menu">
					<li class="active">
						<a href="<?php echo site_url('welcome'); ?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
					</li>
					<li class="treeview">
						<a href="#"><i class="fa fa-laptop"></i><span>UI Elements</span><i class="fa fa-angle-right"></i></a>
						<ul class="treeview-menu">
							<li>
								<a href="bootstrap-components.html"><i class="fa fa-circle-o"></i> Bootstrap Elements</a>
							</li>
							<li>
								<a href="http://fontawesome.io/icons/" target="_blank"><i class="fa fa-circle-o"></i> Font Icons</a>
							</li>
							<li>
								<a href="ui-cards.html"><i class="fa fa-circle-o"></i> Cards</a>
							</li>
							<li>
								<a href="widgets.html"><i class="fa fa-circle-o"></i> Widgets</a>
							</li>
						</ul>
					</li>
				</ul>
			</section>
		</aside>

		<div class="content-wrapper">
			<div class="page-title">
				<div>
					<h1><i class="fa fa-laptop"></i> <?php echo (isset($title)) ? $title : 'Dashboard'; ?></h1>
				</div>
				<!-- <div>
					<ul class="breadcrumb">
						<li><i class="fa fa-home fa-lg"></i></li>
						<li>
							<a href="#">Blank Page</a>
						</li>
					</ul>
				</div> -->
			</div>

			<?php
				if(isset($content))
				{
					echo $content;
				}
			?>
		</div>
	</div>

	<!-- Javascripts-->
	<script src="<?php echo asset_url().'js/bootstrap.min.js'; ?>"></script>
	<script src="<?php echo asset_url().'js/plugins/pace.min.js'; ?>"></script>
	<script src="<?php echo asset_url().'js/main.js'; ?>"></script>
</body>
</html>
