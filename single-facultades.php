<?php get_header()?>
<?php $bg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) , 'biggerHead')?>



<!-- Main Container -->
			<div id="facultie-container" class="off-canvas-content  main-container" style="min-height: 800px;" data-off-canvas-content>
			
			
				<section class="row  row-wide  career-heading" style="background:url('<?php echo $bg[0] ?>') scroll no-repeat top center #FFFFFF;">
					<div class="row">
						<div class="small-12  medium-8  large-7  columns  carrer-heading__content">
							<h1 class="career-heading__content-title  open"><?php echo $post->post_title ?></h1>
							<p class="career-heading__content-text"><?php echo $post->post_excerpt?></p>
						</div>
						<!-- end .career-heading__content -->
					</div>
					<!-- end .row -->
				</section>
			
				<?php /* 
				<!-- Facultie Admission (Admisión) -->
				<section class="row  row-wide  facultie-admission">
					<div class="row">
						<div class="small-12  medium-12  large-4  columns  facultie-admission__block">
							<h1 class="facultie-admission__block-title">Admisión</h1>
						</div>
						<!-- end .facultie-admission__block -->

						<div class="small-12  medium-12  large-5  columns  facultie-admission__block">
							<p class="facultie-admission__block-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec orci lorem, fringilla eu dolor euismod, suscipit congue mauris. Cras in effici- tur augue.</p>
						</div>
						<!-- end .facultie-admission__block -->

						<div class="small-12  medium-12  large-3  columns  facultie-admission__block">
							<a href="#" class="button  large  radius  blue  expanded  facultie-admission__block-button" title="Ir a Admisión">Ir a Admisión</a>
						</div>
						<!-- end .admission-block -->
					</div>
					<!-- end .row -->
				</section>
				<!-- end .facultie-admission -->
				 */?>
				<!-- Facultie About -->
				<section id="facultie-about" class="row  row-wide">
					<div class="row">
						<!-- Tabs -->
						<div class="medium-3 small-12 columns">
							<ul id="about-tabs" class="tabs vertical" data-tabs>
								<li class="tabs-title is-active"><a href="#panel_about">Sobre la Facultad <i class="fa fa-angle-right fa-fw trsn"></i></a></li>
								<?php /* <li class="tabs-title"><a href="#panel_mission" aria-selected="true">Misión <i class="fa fa-angle-right fa-fw trsn"></i></a></li>
								<li class="tabs-title"><a href="#panel_vision">Visión <i class="fa fa-angle-right fa-fw trsn"></i></a></li> */?>
								<?php /* <li class="tabs-title"><a href="#panel_philosophy">Filosofía <i class="fa fa-angle-right fa-fw trsn"></i></a></li>
								<li class="tabs-title"><a href="#panel_resume">Currículum <i class="fa fa-angle-right fa-fw trsn"></i></a></li> */?>
								<li class="tabs-title"><a href="#panel_president">El Decano <i class="fa fa-angle-right fa-fw trsn"></i></a></li>
								<li class="tabs-title"><a href="#panel_docentes">Docentes <i class="fa fa-angle-right fa-fw trsn"></i></a></li>
								
							</ul>
							<!-- end #about-tabs -->
							<?php /* <a href="#" class="tabs-external" title="Docentes">Docentes</a> */?>
						</div>
						
						<!-- Tabs Content -->
						<div class="medium-9 small-12 columns">
							<div id="about-tabs-content" class="tabs-content vertical" data-tabs-content="about-tabs">
								<?php /* 
								<!-- Panel Mission (Misión) -->
								<div id="panel_mission" class="tabs-panel">
									<h1 class="tabs-panel__title">Misión</h1>
									<div class="tabs-panel__content">
										<?php echo apply_filters('the_content' , get_field('mision'))?>
									</div>
									<!-- end .tabs-panel__content -->
								</div>
								<!-- end #panel_mission -->

								<!-- Panel Vision (Visión) -->
								<div id="panel_vision" class="tabs-panel">
									<h1 class="tabs-panel__title">Visión</h1>
									<div class="tabs-panel__content">
										<?php echo apply_filters('the_content' , get_field('vision'))?>
									</div>
									<!-- end .tabs-panel__content -->
								</div>
								<!-- end #panel_vision -->
 */?>
								<!-- Panel About (Sobre la Facultad) -->
								<div id="panel_about" class="tabs-panel is-active">
									<h1 class="tabs-panel__title">Sobre la Facultad</h1>
									<div class="tabs-panel__content">
										<?php echo apply_filters('the_content' , $post->post_content)?>
									</div>
									<!-- end .tabs-panel__content -->
								</div>
								<!-- end #panel_about -->

								<?php /* <!-- Panel Philosophy (Filosofía) -->
								<div id="panel_philosophy" class="tabs-panel">
									<h1 class="tabs-panel__title">Filosofía</h1>
									<div class="tabs-panel__content">
										<?php echo apply_filters('the_content' , get_field('filosofia'))?>
									</div>
									<!-- end .tabs-panel__content -->
								</div>
								<!-- end #panel_philosophy -->

								<!-- Panel Resume (Currículum) -->
								<div id="panel_resume" class="tabs-panel">
									<h1 class="tabs-panel__title">Currículum</h1>
									<div class="tabs-panel__content">
										<?php echo apply_filters('the_content' , get_field('curriculum'))?>
									</div>
									<!-- end .tabs-panel__content -->
								</div>
								<!-- end #panel_resume --> */?>

								<!-- Panel President (El Rector) -->
								<div id="panel_president" class="tabs-panel">
									<h1 class="tabs-panel__title">El Decano</h1>
									<div class="tabs-panel__content">
									
										<?php $img_decano = wp_get_attachment_image_src( get_field('foto_decano') , 'individual')?>
										<img src="<?php echo $img_decano[0] ?>" alt="" class="alignleft" width="250">
										<?php echo apply_filters('the_content' , get_field('decano'))?>
										
									</div>
									<!-- end .tabs-panel__content -->
								</div>
								<!-- end #panel_president -->
								
								<!-- Panel Docentes-->
								<div id="panel_docentes" class="tabs-panel">
									<h1 class="tabs-panel__title">Docentes</h1>
									<div class="tabs-panel__content">
									
										<div id="contieneDocentes"></div>
										
									</div>
									<!-- end .tabs-panel__content -->
								</div>
								<!-- end #Docentes -->
								
							</div>
							<!-- end #about-tabs-content -->
						</div>
					</div>
					<!-- end .row -->
				</section>
				<!-- end #facultie-about -->
				
				<!-- Facultie System -->
				<section id="facultie-system" class="row  row-wide">
					<div class="row">
						<div class="small-12  columns">
							<h1 class="facultie-system__title">Sistema Contínuo de Estudios</h1>

							<!-- System Tabs -->
							<ul id="facultie-system-tabs" class="tabs" data-tabs>
								
								<li class="tabs-title is-active">
									<a href="#panel_undergraduate">Pregrado<small>Grado Académico Universitario</small></a>
								</li>
								<li class="tabs-title">
									<a href="#panel_minor" aria-selected="true">Minor<small>Formación Académica Complementaria</small></a>
								</li>
								<li class="tabs-title">
									<a href="#panel_postgraduate">Postgrado<small>Perfeccionamiento Contínuo</small></a>
								</li>
								
							</ul>
							<!-- end #facultie-system-tabs -->
							
							
							<!-- System Content -->
							<div id="facultie-system-content" class="tabs-content" data-tabs-content="facultie-system-tabs">
								
								<!-- Panel Minor -->
								<div id="panel_minor" class="tabs-panel">
									<div class="row">
										<?php $degrees = get_posts(array('post_type' => 'carreras' , 'facultad' => $post->post_name , 'nivel' => 'minor', 'numberposts' => -1))?>
										<?php if($degrees){?>
										<?php foreach($degrees as $degree):?>
										<!-- <?php echo $degree->post_title ?> -->
										<div class="small-12  medium-4  large-3  columns  tabs-panel__block end degree">
											<a href="<?php echo get_permalink($degree->ID)?>" class="tabs-panel__block-anchor" title="<?php echo $degree->post_title?>">
												
												<?php if(get_field( 'mini_imagen' , $degree->ID)){?>
													<?php $bg = wp_get_attachment_image_src( get_field( 'mini_imagen' , $degree->ID) , 'newsBig')?>
													<img src="<?php echo $bg[0]?>" alt="" class="tabs-panel__block-image">
												<?php }else{?>
													<?php echo get_the_post_thumbnail($degree->ID , 'newsBig' , array('class' => 'tabs-panel__block-image'))?>
												<?php }?>
												
												<h2 class="tabs-panel__block-title"><?php echo $degree->post_title?></h2>
											</a>
										</div>
										<!-- end .tabs-panel__block -->
										<?php endforeach ?>
										<?php }else{?>
											<div class="columns small-12">
												<h3>No existen programas de estudios para este nivel</h3>
												<p>Déjanos tus datos para comunicarte cuando existan programas.</p>
											</div>
										<?php }?>
									</div>
									<!-- end .row -->
								</div>
								<!-- end #panel_minor -->

								<!-- Panel Undergraduate -->
								<div id="panel_undergraduate" class="tabs-panel is-active">
									<div class="row">
										<?php $degrees = get_posts(array('post_type' => 'carreras' , 'facultad' => $post->post_name , 'nivel' => 'pregrado', 'numberposts' => -1))?>
										<?php if($degrees){?>
										<?php foreach($degrees as $degree):?>
										<!-- <?php echo $degree->post_title ?> -->
										<div class="small-12  medium-4  large-3  columns  tabs-panel__block end degree">
											<a href="<?php echo get_permalink($degree->ID)?>" class="tabs-panel__block-anchor" title="<?php echo $degree->post_title?>">
												
												<?php if(get_field( 'mini_imagen' , $degree->ID)){?>
													<?php $bg = wp_get_attachment_image_src( get_field( 'mini_imagen' , $degree->ID) , 'newsBig')?>
													<img src="<?php echo $bg[0]?>" alt="" class="tabs-panel__block-image">
												<?php }else{?>
													<?php echo get_the_post_thumbnail($degree->ID , 'newsBig' , array('class' => 'tabs-panel__block-image'))?>
												<?php }?>
												
												<h2 class="tabs-panel__block-title"><?php echo $degree->post_title?></h2>
											</a>
										</div>
										<!-- end .tabs-panel__block -->
										<?php endforeach ?>
										<?php }else{?>
											<div class="columns small-12">
												<h3>No existen programas de estudios para este nivel</h3>
												<p>Déjanos tus datos para comunicarte cuando existan programas.</p>
											</div>
										<?php }?>
									</div>
								</div>
								<!-- end #panel_undergraduate -->

								<!-- Panel Postgraduate -->
								<div id="panel_postgraduate" class="tabs-panel">
									<div class="row">
										<?php $degrees = get_posts(array('post_type' => 'carreras' , 'facultad' => $post->post_name , 'nivel' => 'postgrado', 'numberposts' => -1))?>
										<?php if($degrees){?>
										<?php foreach($degrees as $degree):?>
										<!-- <?php echo $degree->post_title ?> -->
										<div class="small-12  medium-4  large-3  columns  tabs-panel__block end degree">
											<a href="<?php echo get_permalink($degree->ID)?>" class="tabs-panel__block-anchor" title="<?php echo $degree->post_title?>">
												
												<?php if(get_field( 'mini_imagen' , $degree->ID)){?>
													<?php $bg = wp_get_attachment_image_src( get_field( 'mini_imagen' , $degree->ID) , 'newsBig')?>
													<img src="<?php echo $bg[0]?>" alt="" class="tabs-panel__block-image">
												<?php }else{?>
													<?php echo get_the_post_thumbnail($degree->ID , 'newsBig' , array('class' => 'tabs-panel__block-image'))?>
												<?php }?>
												
												<h2 class="tabs-panel__block-title"><?php echo $degree->post_title?></h2>
											</a>
										</div>
										<!-- end .tabs-panel__block -->
										<?php endforeach ?>
										<?php }else{?>
											<div class="columns small-12">
												<h3>No existen programas de estudios para este nivel</h3>
												<p>Déjanos tus datos para comunicarte cuando existan programas.</p>
											</div>
										<?php }?>
									</div>
								</div>
								<!-- end #panel_postgraduate -->
								
							</div>
							<!-- end #facultie-system-content -->
						</div>
					</div>
					<!-- end .row -->
				</section>
				<!-- end #facultie-system -->

				<!-- Faculties (Facultades) -->
				<!--<section id="features" class="row" data-interchange="[partials/_home/categories.html, small]"></section>-->
				<section id="features" class="row">
					<div class="small-12  columns  features-wrapper">
						<!-- Tabs -->
						
						<?php $modulos = get_field('modulos');?>
						
						<ul id="features-tabs" class="tabs  tabs--by-4" data-tabs>
							<?php $cf = 0?>
							<?php foreach($modulos as $modulo):?>
							<?php $cf++ ?>
								<li class="tabs-title <?php echo $cf == 1 ? 'is-active' : '';?>"><a href="#features_<?php echo $modulo->post_name ?>" class="trsn" aria-selected="true"><?php echo $modulo->post_title ?></a></li>
							<?php endforeach?>
							
						</ul>
						<!-- end #features-tabs -->

					
						<!-- Content -->
						
						<div id="features-content" class="tabs-content" data-tabs-content="features-tabs">
							
							<?php $cft = 0?>
							<?php foreach($modulos as $modulo):?>
							<?php $cft++ ?>
							<!-- Panel 1 -->
							<div id="features_<?php echo $modulo->post_name ?>" class="tabs-panel  <?php echo $cft == 1 ? 'is-active' : '';?>">
								<div class="small-12  medium-6  large-6  columns  tabs-panel__block">
									<div class="small-12 large-6  columns  tabs-panel__block-wrapper">
										<h1 class="tabs-panel__block-title montse">
											<?php echo $modulo->post_title ?>
										</h1>
										<p class="tabs-panel__block-text"><?php echo $modulo->post_excerpt ?></p>
										<a href="<?php echo get_permalink($modulo->ID)?>" class="tabs-panel__block-anchor  anchor-link" title="Conoce más">Conoce más <i class="fa fa-angle-double-right fa-fw"></i></a>
									</div>
									<!-- end .tabs-panel__block-wrapper -->
								</div>
								<?php echo get_the_post_thumbnail($modulo->ID , 'tabsizeHalf' , array('class' => 'tab-panel__image img-full' , 'alt' => $modulo->post_title))?>
								
							</div>
							<!-- end .tabs-panel -->
							<?php endforeach ?>
							
									
						</div>
						<!-- end .tabs-content -->
					</div>
					<!-- end .faculties-wrapper -->
				</section>
				<!-- end #faculties -->
				

				
				<!-- Banners (Vinculación y Continuidad) -->
				<?php /* <section id="facultie-banners" class="row  row-wide  banners">
					<div class="row">
						<!-- Acreditation -->
						<div class="small-12  medium-6  large-6  columns  banners-block  banners-block--left">
							<div class="small-12  columns  banners-block__wrapper">
								<div class="row">
									<div class="small-12  medium-4  large-4  columns  banners-block__image">
										<div class="row">
											<?php echo get_the_post_thumbnail( 754 , 'individual' , array('class' => 'img-full' , 'alt' => 'Continuidad de estudios'))?>
										</div>
										<!-- end .row -->
									</div>
									<!-- end .banners-block__image -->
									
									<div class="small-12  medium-8  large-8  columns  banners-block__content">
										<h1 class="banners-block__content-title">Vinculación<span></span></h1>
										<p class="banners-block__content-text">Averigua cómo <strong>Universidad UCINF</strong> se relaciona con el medio y mejora la comunicación de los alumnos con su futuro laboral.</p>
										<a href="#" class="anchor-link  anchor-link--white" title="Leer más sobre el proceso">Conoce más sobre la acreditación <i class="fa fa-angle-double-right fa-fw"></i></a>
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
											<?php //$caluga = get_post_thumbnail_id(87)?>
											
											<?php echo get_the_post_thumbnail(87 , 'individual' , array('class' => 'img-full' , 'alt' => 'Continuidad de estudios'))?>
											
										</div>
										<!-- end .row -->
									</div>
									<!-- end .banners-block__image -->
									
									<div class="small-12  medium-8  large-8  columns  banners-block__content">
										<h1 class="banners-block__content-title">Continuidad<span></span></h1>
										<p class="banners-block__content-text">En <strong>Universidad UCINF</strong> puedes obtener distintos grados académicos según el nivel que estés cursando.</p>
										<a href="<?php echo get_page_link(87)?>" class="anchor-link  anchor-link--white" title="Conoce nuestra universidad">Conoce más sobre la continuidad <i class="fa fa-angle-double-right fa-fw"></i></a>
									</div>
									<!-- end .banners-block__content -->
								</div>
								<!-- end .row -->
							</div>
							<!-- end .banners-block__wrapper -->
						</div>
						<!-- end .banners-block -->
					</div>
					<!-- end .row -->
				</section> */?>
				<!-- end #facultie-banners -->

				
				
<?php /* ?>

				<?php $testimonios = get_posts(array('post_type' => 'testimonios' , 'numberposts' => 1 , 'facultad' => $post->post_name))?>
				<?php if($testimonios){?>
				<!-- Testimony (Testimonios) -->
				<section id="facultie-testimony" class="row  row-wide  testimony">
					<div class="row  testimony-wrapper" data-equalizer="testimony">
						<!-- Heading -->
						<div class="small-12  columns  page-heading">
							<h1 class="page-heading__title">Testimonios</h1>
						</div>
						<!-- end .page-heading -->
						
						<!-- Media -->
						<div class="small-12  medium-5  large-5  columns  testimony-media" data-equalizer-watch="testimony">
							<?php if(get_field('videoid' , $testimonios[0])){?>
								<iframe src="https://www.youtube.com/embed/<?php echo get_field('videoid' , $testimonios[0])?>" allowfullscreen></iframe>
							<?php }else{ 
								$test_image = wp_get_attachment_image_src(get_post_thumbnail_id($testimonios[0]) , 'newsBig')?>
								<img src="<?php echo $test_image[0]?>" alt="">
							<?php }?>
						</div>
						<!-- end .testimony-media -->
						
						<!-- Content -->
						<div class="small-12  medium-7  large-7  columns  testimony-content" data-equalizer-watch="testimony">
							<h1 class="testimony-content__title"><?php echo $testimonios[0]->post_title?><small class="testimony-content__subtitle  catamaran"><?php echo $testimonios[0]->post_excerpt?></small></h1>
							<hr class="testimony-content__divider">
							<p class="testimony-content__text"><?php echo apply_filters('the_content' , $testimonios[0]->post_content)?></p>
						</div>
						<!-- end .testominy-content -->
					</div>
					<!-- end .row -->
				</section>
				<?php }?>
<?php */ ?>

				
				
				
				<!-- end #testimony -->
			</div>
			
			<!-- News (Noticias) -->
				<?php $news = get_posts(array('post_type' => 'post' , 'numberposts' => 3 , 'category' => 'noticias' , 'facultad' => $post->post_name )) ?>
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
			
<?php get_footer()?>