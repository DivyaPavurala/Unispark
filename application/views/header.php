<!DOCTYPE html>
<html>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<style>
#load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("<?php echo base_url();?>images/unispark.gif") no-repeat center center rgba(0,0,0,0.25)
	
}
</style>
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url();?>favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url();?>favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url();?>favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>favicon/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	<title>Uni Spark</title>
<div id="load"></div>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />

	<!--//tags -->
	<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url();?>css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>css/contact.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url();?>css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/team.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //for bootstrap working -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:100,100i,200,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
</head>

<body>
<script src='<?php echo base_url();?>js/jquery.min.js'></script>
<body>
<div class="loader"></div>
	<div class="top_header" id="home">
		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="nav_top_fx_kdls_agileinfo">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					    aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
					<div class="logo-kdlayouts-agileits">
						<a class="navbar-brand"><img src="<?php echo base_url();?>logo.png" height="90" style="margin-top: -19px;" ></a>
						</div>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<div class="nav_right_top">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="request" href="contact.html">Send Request</a></li>

						</ul>
					<!--	<ul class="nav navbar-nav">
							<li class="<?php echo activate_menu('home'); ?>"><a href="<?php echo base_url();?>home/index">Home</a></li>
							<li class="<?php echo activate_menu('about'); ?>"><a href="<?php echo base_url();?>about/about">About</a></li>
							<li class=""><a href="">Portfolio</a></li>
							<li class="<?php echo activate_menu('contact'); ?>"><a href="<?php echo base_url();?>contact/contact">Contact</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li class="<?php echo activate_menu('Projects'); ?>"><a href="portfolio.html">Projects</a></li>
									<li class="<?php echo activate_menu('Services'); ?>"><a href="404.html">Services</a></li>


								</ul>
							</li>
						</ul> -->
						<?= $menu;?>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>
	