<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" > <![endif]-->
<html class="no-js" xmlns="http://www.w3.org/1999/xhtml">
<!--<![endif]-->
<head>
	<?php if(is_home()){?>
		<title><?php wp_title();?></title>
	<?php }else{?>
		<title><?php wp_title();?></title>
	<?php }?>
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="follow, all" />

	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	
	<!-- Font Awesome Icon Library | v.4.6.1 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

	<!-- Google Fonts Libraries -->
	<link href="https://fonts.googleapis.com/css?family=Catamaran:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

	<!-- Store Files -->
	<!-- CSS Files -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/foundation/6.2.3/foundation.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>" />
	
	<?php call_scripts()?>
	<?php wp_head()?>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	
	<!-- Slick Slider Files -->
	<!--<link rel="stylesheet" type="text/css" href="plugins/slick-slider/slick.css">
	<link rel="stylesheet" type="text/css" href="plugins/slick-slider/slick-theme.css">-->
	
	
</head>
<body <?php body_class()?>>

<div id="fb-root"></div>

<?php /* <div id="loader-wrapper">
   <i class="fa fa-circle-o-notch fa-spin"></i>
</div> */?>

<body>
	<div class="off-canvas-wrapper">
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
			<!-- Begin Header -->
			<!--<header data-interchange="[partials/mobile-nav.html, small], [partials/mobile-nav.html, medium], [partials/main-nav.html, large]"></header>-->
			<header data-sticky-container>
				<!-- Header Top -->
				<div id="header-top" class="row">
					<div class="small-12  medium-6  large-6  columns  text-left  header-top__left">
						
						<?php wp_nav_menu(array('theme_location'  => 'top-menu', 'menu_class' => 'menu simple header-top__menu' , 'container' => 'none')) ?>
					
					</div>
					<!-- end .header-top__left -->

					<div class="small-12  medium-6  large-6  columns  text-right  header-top__right">
						<ul class="menu  simple  header-top__menu">
							<li class="header-top__menu-title">Dirección:</li>
							<li class="header-top__menu-item">
								<a href="https://goo.gl/maps/kUKHAsBe8XD2" class="header-top__menu-anchor" title="Visítanos" target="_blank">Pedro de Valdivia #450</a>
							</li>
							<li class="header-top__menu-item  header-top__menu-item--last">
								<a href="#" class="header-top__menu-button" title="Contáctanos">Contáctanos</a>
							</li>
						</ul>
					</div>
					<!-- end .header-top__right -->
				</div>
				<!-- end #header-top -->
				
				
				<!-- Main Nav -->
				<nav id="main-nav" class="top-bar  sticky  show-for-large" data-sticky data-check-every="43" data-sticky-on="large-up">
					<div class="row  main-nav__container">
						<div class="top-bar-left">
							<ul class="menu  main-nav__logo">
								<li class="main-nav__logo-container">
									<a href="/" class="main-nav__logo-anchor" title="Ir al Inicio">
										<img src="<?php echo get_bloginfo('template_directory')?>/images/logos/logo-ucinf.png" class="main-nav__logo-object" alt="Logo UCINF">
									</a>
								</li>
								<!-- end .main-nav__menu-logo -->
							</ul>
							<!-- end .main-nav__menu -->
						</div>
						<!-- end .top-bar-left -->
						
						<!-- Others -->
						<div class="top-bar-right">
							<ul class="dropdown  menu  main-nav__menu" data-dropdown-menu>
								<li class="main-nav__menu-item">
									<a href="#" class="main-nav__menu-item-anchor  main-nav__menu-item-anchor--others" title="Otros enlaces"><i class="fa fa-bars fa-fw"></i></a>

									<?php wp_nav_menu(array('theme_location'  => 'side-menu', 'menu_id' => 'other-links' ,'menu_class' => 'menu  vertical  main-nav__submenu  main-nav__submenu--align-right' , 'container' => 'none')) ?>
									
									<!-- end .main-nav__submenu -->
								</li>
							</ul>
							<!-- end .main-nav__menu -->
						</div>
						<!-- end .top-bar-right -->

						<!-- Social Nets -->
						<div class="top-bar-right">
							<ul class="dropdown  menu  main-nav__menu" data-dropdown-menu>
								<li class="main-nav__menu-item">
									<a href="<?php echo get_field('facebook' , 'options')?>" class="main-nav__menu-item-anchor  main-nav__menu-item-anchor--social" title="UCINF en Facebook" target="_blank"><i class="fa fa-facebook fa-fw"></i></a>
								</li>
								<!-- end .main-nav__menu-item -->
								<li class="main-nav__menu-item">
									<a href="<?php echo get_field('twitter' , 'options')?>" class="main-nav__menu-item-anchor  main-nav__menu-item-anchor--social" title="UCINF en Twitter" target="_blank"><i class="fa fa-twitter fa-fw"></i></a>
								</li>
								<!-- end .main-nav__menu-item -->
								<li class="main-nav__menu-item">
									<a href="<?php echo get_field('youtube' , 'options')?>" class="main-nav__menu-item-anchor  main-nav__menu-item-anchor--social" title="UCINF en Youtube" target="_blank"><i class="fa fa-youtube-play fa-fw"></i></a>
								</li>
								<!-- end .main-nav__menu-item -->
							</ul>
							<!-- end .main-nav__menu -->
						</div>
						<!-- end .top-bar-right -->
						
						<!-- Main Links -->
						<div class="top-bar-right">
							
							
							<?php wp_nav_menu(array('theme_location'  => 'primary' , 'menu_id' => 'mainmenu' ,'menu_class' => 'dropdown menu  main-nav__menu' , 'container' => 'none')) ?>
							
							<?php /* 
							<ul class="dropdown  menu  main-nav__menu" data-dropdown-menu>
								<li class="main-nav__menu-item">
									<a href="#" class="main-nav__menu-item-anchor" title="Universidad">Universidad</a>
								</li>
								<!-- end .main-nav__menu-item -->

								<li class="main-nav__menu-item">
									<a href="#" class="main-nav__menu-item-anchor" title="Facultades">Facultades <i class="fa fa-angle-down fa-fw"></i></a>
									
									<ul class="menu  vertical  main-nav__submenu  main-nav__submenu--align-left">
										<li class="main-nav__submenu-item">
											<a href="#" class="main-nav__submenu-item-anchor" title="Educación">Educación</a>
										</li>
										<li class="main-nav__submenu-item">
											<a href="#" class="main-nav__submenu-item-anchor" title="Ciencias de la Salud">Ciencias de la Salud</a>
										</li>
										<li class="main-nav__submenu-item">
											<a href="#" class="main-nav__submenu-item-anchor" title="Ciencias Sociales y Jurídicas">Ciencias Sociales y Jurídicas</a>
										</li>
										<li class="main-nav__submenu-item">
											<a href="#" class="main-nav__submenu-item-anchor  main-nav__submenu-item-anchor--last" title="Ingeniería y Negocios">Ingeniería y Negocios</a>
										</li>
									</ul>
									<!-- end .main-nav__submenu -->
								</li>
								<!-- end .main-nav__menu-item -->

								<li class="main-nav__menu-item">
									<a href="#" class="main-nav__menu-item-anchor" title="Admisión">Admisión</a>
								</li>
								<!-- end .main-nav__menu-item -->

								<li class="main-nav__menu-item">
									<a href="#" class="main-nav__menu-item-anchor" title="Postgrados">Postgrados</a>
								</li>
								<!-- end .main-nav__menu-item -->

								<li class="main-nav__menu-item">
									<a href="#" class="main-nav__menu-item-anchor" title="Egresados">Egresados</a>
								</li>
								<!-- end .main-nav__menu-item -->
							</ul>
							 */?>
							<!-- end .main-nav__menu -->
						</div>
						<!-- end .top-bar-right -->
					</div>
					<!-- end .main-nav__container -->
				</nav>
				<!-- end #main-nav -->
				
				<!-- Mobile Nav (Medium & Small devices navigation) -->
				<div id="mobile-nav" class="title-bar  hide-for-large">
					<div class="mobile-nav__center">
						<a href="index.html" class="mobile-nav__center-anchor">
							<img src="images/logos/logo-ucinf.png" class="mobile-nav__center-logo" alt="Logo UCINF">
						</a>
					</div>
					<!-- end .mobile-nav__center -->

					<div class="title-bar-right  mobile-nav__right">
						<button class="mobile-nav__button  trsn" type="button" data-open="sidebar-nav"><i class="fa fa-bars fa-fw"></i> Menu</button>
					</div>
					<!-- end .mobile-nav__right -->
				</div>
				<!-- end #mobile-nav -->	
				
			</header>
			<!-- end Header -->

			<!-- Sidebar Menu -->
			<div id="sidebar-menu" class="off-canvas  position-left  show-for-medium-down" data-off-canvas>
				<!-- Close button -->
				<button class="close-button" aria-label="Close menu" type="button" data-close>
					<span aria-hidden="true">&times;</span>
				</button>

				<!-- Menu -->
				<ul class="vertical menu">
					<li><a href="#">Foundation</a></li>
					<li><a href="#">Dot</a></li>
					<li><a href="#">ZURB</a></li>
					<li><a href="#">Com</a></li>
					<li><a href="#">Slash</a></li>
					<li><a href="#">Sites</a></li>
				</ul>
			</div>
			<!-- end #sibebar-menu -->