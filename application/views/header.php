<!DOCTYPE html>
<html>
	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Los Secretos de tu Almohada</title>
        <!-- FAVICON -->
		<link rel="shortcut icon" href="<?php echo base_url('img/favicon.ico'); ?>">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('img/apple-touch-icon-57x57.png'); ?>">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('img/apple-touch-icon-114x114.png'); ?>">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('img/apple-touch-icon-72x72.png'); ?>">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('img/apple-touch-icon-144x144.png'); ?>">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('img/apple-touch-icon-60x60.png'); ?>">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('img/apple-touch-icon-120x120.png'); ?>">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('img/apple-touch-icon-76x76.png'); ?>">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('img/apple-touch-icon-152x152.png'); ?>">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('img/apple-touch-icon-180x180.png'); ?>">
		<link rel="icon" type="image/png" href="<?php echo base_url('img/favicon-192x192.png" sizes="192x192'); ?>">
		<link rel="icon" type="image/png" href="<?php echo base_url('img/favicon-160x160.png" sizes="160x160'); ?>">
		<link rel="icon" type="image/png" href="<?php echo base_url('img/favicon-96x96.png" sizes="96x96'); ?>">
		<link rel="icon" type="image/png" href="<?php echo base_url('img/favicon-16x16.png" sizes="16x16'); ?>">
		<link rel="icon" type="image/png" href="<?php echo base_url('img/favicon-32x32.png" sizes="32x32'); ?>">
		<meta name="msapplication-TileColor" content="#ffaf65">
		<meta name="msapplication-TileImage" content="<?php echo base_url('img/mstile-144x144.png'); ?>">

		<!-- GOOGLE FONTS : begin -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700%7cMontserrat:400,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
		<!-- GOOGLE FONTS : end -->

        <!-- STYLESHEETS : begin -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/skin/default.css'); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/custom.css'); ?>">
		<!-- STYLESHEETS : end -->

        <!--[if lte IE 8]>
			<link rel="stylesheet" type="text/css" href="library/css/oldie.css">
			<script src="<?php echo base_url('js/respond.min.js'); ?>" type="text/javascript"></script>
        <![endif]-->
		<script src="<?php echo base_url('js/modernizr.custom.min.js'); ?>" type="text/javascript"></script>

	</head>
	<body>

		<!-- HEADER : begin -->
		<header id="header" class="m-large m-enable-fixed m-fixed-bg">
			<div class="header-inner">
				<div class="container">

					<!-- HEADER CONTENT : begin -->
					<div class="header-content">

						<!-- HEADER BRANDING : begin -->
						<div class="header-branding">
							<div class="header-branding-inner">
								<a href="index.html"><img src="<?php echo base_url('images/logo-large.png'); ?>" width="230" alt="Los Secretos de tu Almohada"
									data-hires="<?php echo base_url('images/logo-large.2x.png'); ?>" data-fixed="<?php echo base_url('images/logo.png'); ?>" data-fixed-hires="<?php echo base_url('images/logo.2x.png'); ?>"
									data-fixed-width="100"></a>
							</div>
						</div>
						<!-- HEADER BRANDING : end -->

						<!-- HEADER MENU : begin -->
						<nav class="header-menu">
							<ul>
								<li<?php if($this->uri->segment(1)==""){echo ' class="m-active"';}?>><a href="<?php echo base_url(''); ?>">Home</a></li>
								<li<?php if($this->uri->segment(1)=="noticias"){echo ' class="m-active"';}?>><a href="<?php echo base_url('noticias'); ?>">Notícias</a></li>
								<li<?php if($this->uri->segment(1)=="conciertos"){echo ' class="m-active"';}?>><a href="<?php echo base_url('conciertos'); ?>">Conciertos</a></li>
								<li<?php if($this->uri->segment(1)=="discografia"){echo ' class="m-active"';}?>><a href="<?php echo base_url('discografia'); ?>">Discografía</a></li>
								<li<?php if($this->uri->segment(1)=="galerias"){echo ' class="m-active"';}?>><a href="<?php echo base_url('galerias'); ?>">Galerías</a></li>
								<li<?php if($this->uri->segment(1)=="sobre"){echo ' class="m-active"';}?>><a href="<?php echo base_url('sobre'); ?>">Sobre</a></li>
								<li<?php if($this->uri->segment(1)=="contacto"){echo ' class="m-active"';}?>><a href="<?php echo base_url('contacto'); ?>">Contacto</a></li>
							</ul>
						</nav>
						<!-- HEADER MENU : end -->

					</div>
					<!-- HEADER CONTENT : end -->

					<!-- MAIN SIDEBAR TOGGLE : begin -->
					<button class="main-sidebar-toggle" type="button"><i class="fa fa-bars"></i></button>
					<!-- MAIN SIDEBAR TOGGLE : end -->

				</div>
			</div>
		</header>
		<!-- HEADER : end -->