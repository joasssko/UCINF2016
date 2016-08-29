<?php get_header();?>

<!-- Main Container -->
			<div class="off-canvas-content  main-container" style="min-height: 800px;" data-off-canvas-content>
				
				<?php $slides = get_posts(array('post_type' => 'slider'))?>
				<?php $bgSlide = wp_get_attachment_image_src( get_post_thumbnail_id($slides[0]->ID) , 'biggerHead')?>
				<!-- Slideshow -->
				<section id="slideshow" class="row  row-wide">
					<img src="<?php echo $bgSlide[0]?>" class="img-full" alt="Slideshow Banner">
				</section>
				<!-- end #slideshow -->
				
				<!-- System (Sistema Continuo de estudios) -->
				<section id="system" class="row">
					<!-- Content Left -->
					<div class="small-12  medium-6  large-6  columns  system-content  system-content--left">
						<div class="row">
							<!-- System Heading -->
							<div class="small-12  columns  system-heading">
								<div class="small-12  columns  system-heading__wrapper">
									<h1 class="system-heading__title">Sistema<br><strong class="montse">contínuo de estudios</strong></h1>
									<p class="system-heading__text">Universidad UCINF ofrece un sistema contínuo de estudios, en donde puedes obtener distintos grados según el nuvel que estés cursando.</p>
								</div>
								<!-- end .system-heading__wrapper -->
							</div>
							<!-- end .system-heading -->
							
							<!-- First Block -->
							<div class="small-12  columns  system-block  system-block--horizontal">
								<div class="small-12  columns  system-block__wrapper  trsn">
									<div class="row" data-equalizer="system-block-horizontal">
										<div class="small-12  medium-6  medium-push-6  large-6  large-push-6  columns  system-block__heading" data-equalizer-watch="system-block-horizontal">
											<div class="row">
												<a href="#" class="system-block__heading-anchor" title="Ver oferta académica">
													<img src="<?php echo get_bloginfo('template_directory')?>/images/system-block-image-1.jpg" class="system-block__heading-image  img-full" alt="Imagen Pregrado">
												</a>
											</div>
										</div>
										<!-- end .system-block__heading -->

										<div class="small-12  medium-6  medium-pull-6  large-6  large-pull-6  columns  system-block__content" data-equalizer-watch="system-block-horizontal">
											<h1 class="system-block__title">Pregrado<small class="system-block__subtitle  catamaran">Grado académico universitario</small></h1>
											<a href="#" class="anchor-link  system-block__anchor" title="Ver oferta académica">Ver oferta académica <i class="fa fa-angle-double-right fa-fw"></i></a>
										</div>
										<!-- end .system-block__content -->
									</div>
									<!-- end .row -->
								</div>
								<!-- end .system-block__wrapper -->
							</div>
							<!-- end .system-block -->
						</div>
						<!-- end .row -->
					</div>
					<!-- end .system-content (left) -->

					<!-- Content Right -->
					<div class="small-12  medium-6  large-6  columns  system-content  system-content--right">
						<div class="row" data-equalizer="system-block">
							<!-- Second Block -->
							<div class="small-12  medium-6  large-6  columns  system-block  system-block--vertical">
								<div class="small-12  columns  system-block__wrapper  trsn">
									<div class="row">
										<div class="small-12  columns  system-block__heading">
											<div class="row">
												<a href="#" class="system-block__heading-anchor" title="Ver programas">
													<img src="<?php echo get_bloginfo('template_directory')?>/images/system-block-image-2.jpg" class="system-block__heading-image  img-full" alt="Imagen Minor">
												</a>
											</div>
											<!-- end .row -->
										</div>
										<!-- end .system-block__heading -->

										<div class="small-12  columns  system-block__content" data-equalizer-watch="system-block">
											<h1 class="system-block__title">Minor<small class="system-block__subtitle  catamaran">Formación Académica Complementaria</small></h1>
											<a href="#" class="anchor-link  system-block__anchor" title="Ver programas">Ver programas <i class="fa fa-angle-double-right fa-fw"></i></a>
										</div>
										<!-- end .system-block__content -->
									</div>
									<!-- end .row -->
								</div>
								<!-- end .system-block__wrapper -->
							</div>
							<!-- end .system-block -->

							<!-- Second Block -->
							<div class="small-12  medium-6  large-6  columns  system-block  system-block--vertical">
								<div class="small-12  columns  system-block__wrapper  trsn">
									<div class="row">
										<div class="small-12  columns  system-block__heading">
											<div class="row">
												<a href="#" class="system-block__heading-anchor" title="Ve más allá">
													<img src="<?php echo get_bloginfo('template_directory')?>/images/system-block-image-3.jpg" class="system-block__heading-image  img-full" alt="Imagen Postgrado">
												</a>
											</div>
											<!-- end .row -->
										</div>
										<!-- end .system-block__heading -->

										<div class="small-12  columns  system-block__content" data-equalizer-watch="system-block">
											<h1 class="system-block__title">Postgrado<small class="system-block__subtitle  catamaran">Perfeccionamiento Contínuo</small></h1>
											<a href="#" class="anchor-link  system-block__anchor" title="Ve más allá">Ve más allá <i class="fa fa-angle-double-right fa-fw"></i></a>
										</div>
										<!-- end .system-block__content -->
									</div>
									<!-- end .row -->
								</div>
								<!-- end .system-block__wrapper -->
							</div>
							<!-- end .system-block -->
						</div>
						<!-- end .row -->
					</div>
					<!-- end .system-content (right) -->
				</section>
				<!-- end #system -->
				
				<!-- Faculties (Facultades) -->
				<!--<section id="faculties" class="row" data-interchange="[partials/_home/categories.html, small]"></section>-->
				<section id="faculties" class="row">
					<div class="small-12  columns  faculties-wrapper">
						<!-- Tabs -->
						<?php $facultades = get_posts(array('post_type' => 'facultades' , 'numberposts' => -1))?>
						<ul id="faculties-tabs" class="tabs  tabs--by-4" data-tabs>
							<?php $cf = 0?>
							<?php foreach($facultades as $facultad):?>
							<?php $cf++ ?>
								<li class="tabs-title <?php echo $cf == 1 ? 'is-active' : '';?>"><a href="#faculties_<?php echo $facultad->post_name ?>" class="trsn" aria-selected="true"><?php echo $facultad->post_title ?></a></li>
							<?php endforeach?>
							
						</ul>
						<!-- end #faculties-tabs -->

						<!-- Content -->
						<?php /* <div id="faculties-content" class="tabs-content" data-tabs-content="faculties-tabs" data-interchange="[partials/_home/faculties.html, small]"> */?>
						<div id="faculties-content" class="tabs-content" data-tabs-content="faculties-tabs">
							
							<?php $cft = 0?>
							<?php foreach($facultades as $facultad):?>
							<?php $cft++ ?>
							<!-- Panel 1 -->
							<div id="faculties_<?php echo $facultad->post_name ?>" class="tabs-panel  <?php echo $cft == 1 ? 'is-active' : '';?>">
								<div class="small-12  medium-6  large-6  columns  tabs-panel__block">
									<div class="small-12  columns  tabs-panel__block-wrapper">
										<h1 class="tabs-panel__block-title montse">
											<small class="tabs-panel__block-subtitle montse">Facultad de</small><?php echo $facultad->post_title ?>
										</h1>
										<p class="tabs-panel__block-text">Universidad Ucinf ha trabajado a lo largo de los años, no sólo para dar cumplimiento a su plan estratégico, sino para atender los compromisos adquiridos en los procesos de acreditación institucional anteriores.</p>
										<a href="<?php echo get_permalink($facultad->ID)?>" class="tabs-panel__block-anchor  anchor-link" title="Conoce más sobre la facultad">Conoce más sobre la facultad <i class="fa fa-angle-double-right fa-fw"></i></a>
									</div>
									<!-- end .tabs-panel__block-wrapper -->
								</div>
								<?php echo get_the_post_thumbnail($facultad->ID , 'tabsizeTall' , array('class' => 'tab-panel__image img-full' , 'alt' => $facultad->post_title))?>
								
							</div>
							<!-- end .tabs-panel -->
							<?php endforeach ?>
							
									
						</div>
						<!-- end .tabs-content -->
					</div>
					<!-- end .faculties-wrapper -->
				</section>
				<!-- end #faculties -->
				
				<!-- Banners (Acreditación y La Universidad) -->
				<section id="banners" class="row">
					<!-- Acreditation -->
					<div class="small-12  medium-6  large-6  columns  banners-block  banners-block--left">
						<div class="small-12  columns  banners-block__wrapper">
							<div class="row">
								<div class="small-12  medium-4  large-4  columns  banners-block__image">
									<div class="row">
										<img src="<?php echo get_bloginfo('template_directory')?>/images/acreditacion.jpg" class="img-full" alt="Banner Acreditación">
									</div>
									<!-- end .row -->
								</div>
								<!-- end .banners-block__image -->
								
								<div class="small-12  medium-8  large-8  columns  banners-block__content">
									<h1 class="banners-block__content-title">Acreditación<span></span></h1>
									<p class="banners-block__content-text"><strong>Universidad UCINF</strong> Fusce vulputate non nulla at facilisis. Duis ut dapibus enim. Praesent id vestibulum.</p>
									<a href="#" class="anchor-link  anchor-link--white" title="Leer más sobre el proceso">Leer más sobre el proceso <i class="fa fa-angle-double-right fa-fw"></i></a>
								</div>
								<!-- end .banners-block__content -->
							</div>
							<!-- end .row -->
						</div>
						<!-- end .banners-block__wrapper -->
					</div>
					<!-- end .banners-block -->

					<!-- Acreditation -->
					<div class="small-12  medium-6  large-6  columns  banners-block  banners-block--right">
						<div class="small-12  columns  banners-block__wrapper">
							<div class="row">
								<div class="small-12  medium-4  large-4  columns  banners-block__image">
									<div class="row">
										<img src="<?php echo get_bloginfo('template_directory')?>/images/la-universidad.jpg" class="img-full" alt="Banner La Universidad">
									</div>
									<!-- end .row -->
								</div>
								<!-- end .banners-block__image -->
								
								<div class="small-12  medium-8  large-8  columns  banners-block__content">
									<h1 class="banners-block__content-title">La Universidad<span></span></h1>
									<p class="banners-block__content-text"><strong>Universidad UCINF</strong> Fusce vulputate non nulla at facilisis. Duis ut dapibus enim. Praesent id vestibulum.</p>
									<a href="#" class="anchor-link  anchor-link--white" title="Conoce nuestra universidad">Conoce nuestra universidad <i class="fa fa-angle-double-right fa-fw"></i></a>
								</div>
								<!-- end .banners-block__content -->
							</div>
							<!-- end .row -->
						</div>
						<!-- end .banners-block__wrapper -->
					</div>
					<!-- end .banners-block -->
				</section>
				<!-- end #banners -->
				
				<!-- Benefits (Becas y Beneficios) -->
				<section id="benefits" class="row">
					<div class="small-12  columns">
						<div class="small-12  columns  benefits-wrapper">
							<div class="row" data-equalizer="benefits-block">
								<div class="small-12  medium-8  large-7  columns  benefits-block" data-equalizer-watch="benefits-block">
									<h1 class="benefits-block__title">Becas y Beneficios</h1>
									<p class="benefits-block__text">Apoyamos y garantizamos que todos los estudiantes con mérito y necesidades de financiamiento, puedan acceder a una educación de pregrado de calidad.</p>
								</div>
								<!-- end .benefits-block -->

								<div class="small-12  medium-4  large-5  columns  text-left  medium-text-right  benefits-block" data-equalizer-watch="benefits-block">
									<a href="#" class="button  radius  white  benefits-block__button" title="Ver los Beneficios">Ver los Beneficios</a>
								</div>
								<!-- end .benefits-block -->
							</div>
						</div>
						<!-- end .benefits-wrapper -->
					</div>
					<!-- end .row -->
				</section>
				<!-- end #benefits -->
				
				
				
				<!-- News (Noticias) -->
				<?php $news = get_posts(array('post_type' => 'post' , 'numberposts' => 4 , 'category' => 'noticias')) ?>
				<section id="news" class="row  row-wide">
					<div class="row">
						<!-- Heading -->
						<div class="small-12  columns  page-heading">
							<h1 class="page-heading__title">Noticias</h1>
						</div>
						<!-- end .page-heading -->
						
						<!-- Main New -->
						<article class="small-12  medium-6  large-6  columns  news-main">
							<div class="small-12  columns  news-main__content">
								<h1 class="news-main__content-title"><?php echo $news[0]->post_title ?></h1>
								<p class="news-main__content-excerpt"><?php echo $news[0]->post_excerpt ?></p>
								<a href="<?php echo get_permalink($news[0]->ID)?>" class="anchor-link  anchor-link--white" title="Continúa leyendo">Continúa leyendo <i class="fa fa-angle-double-right fa-fw"></i></a>
							</div>
							<!-- end .news-main__content -->
							
							<div class="news-main__overlay"></div>
							
							<?php echo get_the_post_thumbnail($news[0]->ID , 'newsBig' , array('class' => 'news-main__image img-full' , 'alt' => $news[0]->post_title))?>
							
							
						</article>
						<!-- end .news-main -->
						
						<!-- Container -->
						<div class="small-12  medium-6  large-6  columns  news-container">
								<?php unset($news[0])?>
								<?php foreach($news as $article): ?>
								<!-- New 1 -->
								<article class="small-12  columbs  news-block">
									<div class="row">
										<div class="small-12  medium-4  large-4  columns  news-block__heading">
											<a href="<?php echo get_permalink($article->ID)?>" class="news-block__heading-anchor" title="Leer más">
												<?php echo get_the_post_thumbnail($article->ID , 'newsSmall' , array('class' => 'news-block__heading-image' , 'alt' => $article->post_title))?>
											</a>
										</div>
										<!-- end .news-block__heading -->
										
										<div class="small-12  medium-8  large-8  columns  news-block__content">
											<div class="row">
												<h1 class="news-block__content-title"><?php echo $article->post_title ?></h1>
												<p class="news-block__content-excerpt"><?php echo $article->post_excerpt ?>... <a href="<?php echo get_permalink($article->ID)?>" class="news-block__content-anchor" title="Continuar leyendo">Continuar leyendo</a></p>
											</div>
											<!-- end .row -->
										</div>
										<!-- end .news-block__content -->
									</div>
									<!-- end .row -->
								</article>
								<!-- end .news-block -->
								<?php endforeach?>

								
						</div>
						<!-- end .news-container -->
					</div>
					<!-- end .row -->
				</section>
				<!-- end #news -->
				
				<!-- Shortcuts (Accesos Rápidos) -->
				<section id="shortcuts" class="row" data-equalizer="shortcuts">
					<!-- Heading -->
					<div class="small-12  columns  page-heading">
						<h1 class="page-heading__title">Accesos Rápidos</h1>
					</div>
					<!-- end .page-heading -->
					
					<!-- Block 1 (DAE) -->
					<div class="small-12  medium-3  large-3  columns  shortcuts-block" data-equalizer-watch="shortcuts">
						<a href="#" class="shortcuts-block__anchor" title="DAE">
							<img src="<?php echo get_bloginfo('template_directory')?>/images/shortcut-icon-dae.png" class="shortcuts-block__icon" alt="Icon DAE">
							<h2 class="shortcuts-block__title">DAE</h2>
							<p class="shortcuts-block__text">Phasellus convallis nisl varius blandit </p>
						</a>
					</div>
					<!-- end .shortcuts-block -->

					<!-- Block 2 (Alumnos) -->
					<div class="small-12  medium-3  large-3  columns  shortcuts-block" data-equalizer-watch="shortcuts">
						<a href="#" class="shortcuts-block__anchor" title="Alumnos">
							<img src="<?php echo get_bloginfo('template_directory')?>/images/shortcut-icon-alumnos.png" class="shortcuts-block__icon" alt="Icon Alumnos">
							<h2 class="shortcuts-block__title">Alumnos</h2>
							<p class="shortcuts-block__text">Phasellus convallis nisl varius blandit </p>
						</a>
					</div>
					<!-- end .shortcuts-block -->

					<!-- Block 3 (Postgrados) -->
					<div class="small-12  medium-3  large-3  columns  shortcuts-block" data-equalizer-watch="shortcuts">
						<a href="#" class="shortcuts-block__anchor" title="Postgrados">
							<img src="<?php echo get_bloginfo('template_directory')?>/images/shortcut-icon-postgrados.png" class="shortcuts-block__icon" alt="Icon Postgrados">
							<h2 class="shortcuts-block__title">Postgrados</h2>
							<p class="shortcuts-block__text">Phasellus convallis nisl varius blandit </p>
						</a>
					</div>
					<!-- end .shortcuts-block -->

					<!-- Block 3 (Egresados) -->
					<div class="small-12  medium-3  large-3  columns  shortcuts-block" data-equalizer-watch="shortcuts">
						<a href="#" class="shortcuts-block__anchor" title="Egresados">
							<img src="<?php echo get_bloginfo('template_directory')?>/images/shortcut-icon-egresados.png" class="shortcuts-block__icon" alt="Icon Egresados">
							<h2 class="shortcuts-block__title">Egresados</h2>
							<p class="shortcuts-block__text">Phasellus convallis nisl varius blandit </p>
						</a>
					</div>
					<!-- end .shortcuts-block -->
				</section>
				<!-- end #shortcuts -->
				
				<!-- Testimony (Trstimonios) -->
				<section id="testimony" class="row  row-wide">
					<div class="row  testimony-wrapper" data-equalizer="testimony">
						<!-- Heading -->
						<div class="small-12  columns  page-heading">
							<h1 class="page-heading__title">Testimonios</h1>
						</div>
						<!-- end .page-heading -->
						
						<!-- Media -->
						<div class="small-12  medium-5  large-5  columns  testimony-media" data-equalizer-watch="testimony">
							<!--<img src="images/testimonials/testimony-image-1.jpg" class="testimony-media__image" alt="Testomonio 1">-->
							<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/KzH9SaplkAs" frameborder="0" allowfullscreen></iframe> -->
							<iframe src="https://www.youtube.com/embed/KzH9SaplkAs" allowfullscreen></iframe>
						</div>
						<!-- end .testimony-media -->
						
						<!-- Content -->
						<div class="small-12  medium-7  large-7  columns  testimony-content" data-equalizer-watch="testimony">
							<h1 class="testimony-content__title">Constanza Rojas<small class="testimony-content__subtitle  catamaran">720 puntos en PSU, Matriculada en Kinesiología. Admisión 2016</small></h1>
							<hr class="testimony-content__divider">
							<p class="testimony-content__text">Me matriculé en <strong>Kinesiología</strong> porque tengo la vocación, me gusta la investigación, la tecnología, saber cómo funciona el cuerpo, los procesos, lo que se puede hacer por el mundo a través de esta ciencia y lo que falta por hacer. Escogí la <strong>Universidad UCINF</strong> porque me gustó su cuerpo docente, su infraestructura (laboratorios) y porque tiene hartos <strong>Campos Clínicos</strong>, características que no encontré en otras universidades”.</p>
						</div>
						<!-- end .testominy-content -->
					</div>
					<!-- end .row -->
				</section>
				<!-- end #testimony -->
			</div>
			<!-- end .main-container -->


<?php get_footer()?>