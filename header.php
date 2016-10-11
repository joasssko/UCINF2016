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
	
	<link rel="shortcut icon" href="<?php echo get_bloginfo('template_directory')?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_bloginfo('template_directory')?>/favicon.ico" type="image/x-icon">
	
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
				<div id="header-top" class="row show-for-large">
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
								<a href="#" class="header-top__menu-button" title="Contáctanos" id="contactTop">Contáctanos</a>
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
									<a href="<?php echo get_bloginfo('url')?>" class="main-nav__logo-anchor" title="Ir al Inicio">
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
						<div class="top-bar-right" data-dropdown-menu>
							
							
							<?php wp_nav_menu(array('theme_location'  => 'primary' , 'menu_id' => 'mainmenu' ,'menu_class' => 'dropdown menu  main-nav__menu' , 'container' => 'none', 'fallback_cb' => 'f6_topbar_menu_fallback',
            'walker' => new F6_TOPBAR_MENU_WALKER()))	 ?>
							
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
						<a href="<?php echo get_bloginfo('url')?>" class="mobile-nav__center-anchor">
							<img src="<?php echo get_bloginfo('template_directory')?>/images/logos/logo-ucinf.png" class="mobile-nav__center-logo" alt="Logo UCINF">
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

			<!-- Sidebar Nav -->
			<div id="sidebar-nav" class="off-canvas  position-right  hide-for-large" data-off-canvas data-position="right">
				<!-- Menu -->
				
				<?php wp_nav_menu(array('theme_location'  => 'mobile' , 'menu_id' => 'mobilemenu' ,'menu_class' => 'menu  vertical  sidebar-nav__menu' , 'container' => 'none', 'items_wrap'      => '<ul id="%1$s" class="%2$s" data-drilldown="">%3$s</ul>', 'fallback_cb' => 'f6_drill_menu_fallback', 
            'walker' => new F6_DRILL_MENU_WALKER()))	 ?>
				
				
				<?php /* <ul class="menu  vertical  sidebar-nav__menu" data-drilldown>
					<li class="sidebar-nav__menu-title">
						<a class="sidebar-nav__menu-item-anchor">
							<i class="fa fa-user fa-fw"></i> Acceso <i class="fa fa-angle-right fa-fw"></i>
						</a>

						<ul class="vertical  menu  sidebar-nav__submenu">
							<li class="sidebar-nav__submenu-title"><i class="fa fa-user fa-fw"></i> Acceso</li>

							<li class="sidebar-nav__submenu-item">
								<a href="#" class="sidebar-nav__submenu-item-anchor" title="Alumnos"><i class="fa fa-caret-right fa-fw"></i> Alumnos</a>
							</li>
							<!-- end .sidebar-nav__submenu-item-anchor -->

							<li class="sidebar-nav__submenu-item">
								<a href="#" class="sidebar-nav__submenu-item-anchor" title="Docentes"><i class="fa fa-caret-right fa-fw"></i> Docentes</a>
							</li>
							<!-- end .sidebar-nav__submenu-item-anchor -->

							<li class="sidebar-nav__submenu-item">
								<a href="#" class="sidebar-nav__submenu-item-anchor" title="Egresados"><i class="fa fa-caret-right fa-fw"></i> Egresados</a>
							</li>
							<!-- end .sidebar-nav__submenu-item-anchor -->
						</ul>
						<!-- end .sidebar-mav__submenu -->
					</li>
					<!-- end .sidebar-nav__menu-title -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor" title="Universidad">Universidad</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-item">
						<a class="sidebar-nav__menu-item-anchor">Facultades <i class="fa fa-angle-right fa-fw"></i></a>

						<ul class="vertical  menu  sidebar-nav__submenu">
							<li class="sidebar-nav__submenu-title">Facultades</li>

							<li class="sidebar-nav__submenu-item">
								<a href="#" class="sidebar-nav__submenu-item-anchor" title="Educación">Educación</a>
							</li>
							<!-- end .sidebar-nav__submenu-item-anchor -->
							<li class="sidebar-nav__submenu-item">
								<a href="#" class="sidebar-nav__submenu-item-anchor" title="Ciencias de la Salud">Ciencias de la Salud</a>
							</li>
							<!-- end .sidebar-nav__submenu-item-anchor -->
							<li class="sidebar-nav__submenu-item">
								<a href="#" class="sidebar-nav__submenu-item-anchor" title="Ciencias Sociales y Jurídicas">Ciencias Sociales y Jurídicas</a>
							</li>
							<!-- end .sidebar-nav__submenu-item-anchor -->
							<li class="sidebar-nav__submenu-item">
								<a href="#" class="sidebar-nav__submenu-item-anchor" title="Ingeniería y Negocios">Ingeniería y Negocios</a>
							</li>
							<!-- end .sidebar-nav__submenu-item-anchor -->

							<li class="sidebar-nav__submenu-actions">
								<a href="{{ item.url }}" class="button  tiny  white  sidebar-nav__submenu-actions-button" title="Ver Facultades">Ver Facultades</a>
							</li>
							<!-- end .sidebar-nav__submenu-actions -->
						</ul>
						<!-- end .sidebar-nav__submenu -->
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor" title="Admisión">Admisión</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor" title="Postgrados">Postgrados</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor" title="Egresados">Egresados</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-divider"><span class="sidebar-nav__menu-divider-object"></span></li>
					<!-- end .sidebar-nav__menu-divider -->
					
					<!-- Facebook -->
					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor  sidebar-nav__menu-item-anchor--lowercase" title="UCINF en Facebook"><i class="fa fa-facebook fa-fw"></i> Encuentranos en Facebook</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<!-- Twitter -->
					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor  sidebar-nav__menu-item-anchor--lowercase" title="UCINF en Twitter"><i class="fa fa-twitter fa-fw"></i> Encuentranos en Twitter</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<!-- Youtube -->
					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor  sidebar-nav__menu-item-anchor--lowercase" title="UCINF en Youtube"><i class="fa fa-youtube fa-fw"></i> Encuentranos en Youtube</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-divider"><span class="sidebar-nav__menu-divider-object"></span></li>
					<!-- end .sidebar-nav__menu-divider -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor  sidebar-nav__menu-item-anchor--lowercase" title="Validad Certificado">Validad Certificado</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor  sidebar-nav__menu-item-anchor--lowercase" title="Formas de Pago">Formas de Pago</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor  sidebar-nav__menu-item-anchor--lowercase" title="Newsletter">Newsletter</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor  sidebar-nav__menu-item-anchor--lowercase" title="Sitio Alumno">Sitio Alumno</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor  sidebar-nav__menu-item-anchor--lowercase" title="CAPA">CAPA</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor  sidebar-nav__menu-item-anchor--lowercase" title="Intranet">Intranet</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor  sidebar-nav__menu-item-anchor--lowercase" title="Biblioteca">Biblioteca</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor  sidebar-nav__menu-item-anchor--lowercase" title="Manuales de Empleabilidad">Manuales de Empleabilidad</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->

					<li class="sidebar-nav__menu-item">
						<a href="#" class="sidebar-nav__menu-item-anchor  sidebar-nav__menu-item-anchor--lowercase" title="Dirección de Asuntos Estudiantiles (DAE)">Dirección de Asuntos Estudiantiles (DAE)</a>
					</li>
					<!-- end .sidebar-nav__menu-item -->
				</ul> */?>
				<!-- end .sidebar-nav__menu -->
			</div>
			<!-- end #sibebar-nav -->