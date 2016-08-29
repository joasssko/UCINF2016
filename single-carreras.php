<?php get_header()?>
<?php $terms = wp_get_post_terms( $post->ID, 'facultad' );?>
<?php $bg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) , 'biggerHead')?>

			<!-- Main Container -->
			<div id="career-container" class="off-canvas-content  main-container" style="min-height: 800px;" data-off-canvas-content>
				<!-- Career Heading -->
				<section class="row  row-wide  career-heading" style="background:url('<?php echo $bg[0] ?>') scroll no-repeat top center #FFFFFF;">
					<div class="row">
						<div class="small-12  medium-8  large-7  columns  carrer-heading__content">
							<h1 class="career-heading__content-title  open"><?php echo $post->post_title ?></h1>
							<p class="career-heading__content-text"><?php echo $post->post_excerpt?></p>
						</div>
						<!-- end .career-heading__content -->

						<div class="small-12  medium-4  large-4  columns  text-left  medium-text-right  career-heading__certificate">
							<?php if(get_field('etiqueta_acreditacion')){?>
								<?php $badge = wp_get_attachment_image_src(get_field('etiqueta_acreditacion') , 'badgeAcreditacion')?>
								
								<img src="<?php echo $badge[0]?>" class="career-heading__certificate-image" alt="<?php echo get_field('periodo_de_acreditacion')?> años">
							<?php }else{?>
								<img src="<?php echo get_bloginfo('template_directory')?>/images/career-certificate_not.png" class="career-heading__certificate-image" alt="Carrera no acreditada">
							<?php }?>
						</div>
					</div>
					<!-- end .row -->
				</section>
				<!-- end .career-heading -->
				
				<!-- Career Main -->
				<section class="row  career-main">
					<!-- Description -->
					<div id="career-main__description" class="small-12  medium-7  large-8  columns  career-block">
						<h1 class="career-block__title">Descripción de la Carrera</h1>
						<div class="career-block__content">
							<?php echo apply_filters('the_content' , $post->post_content)?>
						</div>
						<!-- end .career-block-content -->
					</div>
					<!-- end #career-main__description / .career-block -->
					
					<!-- Details -->
					<div class="small-12  medium-5  large-4  columns  career-details">
						<ul class="no-bullet  career-details__list">
							<li class="career-details__list-item  career-details__list-item--heading">
								<span class="career-details__list-item-title">Malla del Programa</span>
								<a href="#" class="button  small radius  white  career-details__list-item-button" title="Descarga la Malla">Descarga la Malla</a>
							</li>
							<!-- end .career-details-list-heading -->
							
							<!-- Título Profesional -->
							<li class="career-details__list-item  career-details__list-item--profession">
								<span class="career-details__list-item-title">Título Profesional</span><?php echo get_field('titulo_al_que_opta')?>
							</li>
							<!-- end .career-details__list-item -->

							<!-- Duración -->
							<li class="career-details__list-item  career-details__list-item--duration">
								<span class="career-details__list-item-title">Duración</span><?php echo get_field('duracion_del_programa')?> Semestres
							</li>
							<!-- end .career-details__list-item -->

							<!-- Régimen -->
							<?php $regimen = get_field('regimen')?>
							<li class="career-details__list-item  career-details__list-item--regime">
								<span class="career-details__list-item-title">Régimen</span><?php echo $regimen[0]?>, <?php echo $regimen[1]?>
							</li>
							<!-- end .career-details__list-item -->

							<!-- Acreditación -->
							<li class="career-details__list-item  career-details__list-item--accreditation">
							<?php if(get_field('periodo_de_acreditacion')){?>
								<span class="career-details__list-item-title">Acreditación</span>Acreditada por <?php echo get_field('periodo_de_acreditacion')?> años
							<?php }else{?>
								<span class="career-details__list-item-title">Acreditación</span>Carrera no acreditada
							<?php }?>	
							</li>
							<!-- end .career-details-item -->
						</ul>
						<!-- end .career-details-heading -->
					</div>
					<!-- end .career-details -->
					
					
					
					<?php if(get_field('testimonio')){?>
						<!-- Perfil de Egreso / Campo Laboral -->
						<div class="small-12  medium-6  large-7  columns  career-block">
							<h1 class="career-block__title">Perfil de Egreso</h1>
							<div class="career-block__content">
								<?php echo apply_filters('the_content' , get_field('perfil_de_egreso'))?>
							</div>
							<h1 class="career-block__title">Campo Laboral</h1>
							<div class="career-block__content">
								<?php echo apply_filters('the_content' , get_field('campo_laboral'))?>
							</div>
						</div>
						<!-- end .career-block -->

						<?php $test = get_field('testimonio')?>				
						<?php $testimonio = get_post( $test[0] )?>

						<!-- Testimonio -->
						<div class="small-12  medium-6  large-5  columns  career-testimony">
							<div class="small-12  columns  career-testimony__media">
								<?php if(get_field('videoid' , $test[0])){?>
									<iframe src="https://www.youtube.com/embed/<?php echo get_field('videoid' , $test[0])?>" allowfullscreen></iframe>
								<?php }else{ 
									$test_image = wp_get_attachment_image_src(get_post_thumbnail_id($test[0]) , 'newsBig')?>
									<img src="<?php echo $test_image[0]?>" alt="">
								<?php }?>
							</div>
							<!-- end .career-testimony-media -->

							<div class="small-12  columns  career-testimony__container">
								<h1 class="career-testiomy__container-title">Testimonio</h1>
								<h2 class="career-testimony__container-name  open">
									<?php echo $testimonio->post_title?>
									<small class="career-testimony__container-name-details"><?php echo $testimonio->post_excerpt?></small>
								</h2>
								<hr class="career-testimony__container-divider">
								<div class="career-testimony__container-text">
									<?php echo apply_filters('the_content' , $testimonio->post_content)?>
								</div>
							</div>
							<!-- end .career-testimony__container -->
						</div>
						<!-- end .career-testimony -->
					<?php }else{?>
					
						<div class="career-block">
							<div class="small-12 medium-7 large-8 columns">
								<h1 class="career-block__title">Perfil de Egreso</h1>
								<div class="career-block__content">
									<?php echo apply_filters('the_content' , get_field('perfil_de_egreso'))?>
								</div>
							</div>
							<div class="small-12 medium-5 large-4 columns">
								<h1 class="career-block__title">Campo Laboral</h1>
								<div class="career-block__content">
									<?php echo apply_filters('the_content' , get_field('campo_laboral'))?>
								</div>
							</div>
						</div>
					
					<?php }?>
					
				</section>
				<!-- end .career-main -->
				
				
				
				<!-- Faculties (Facultades) -->
				<!--<section id="features" class="row" data-interchange="[partials/_home/categories.html, small]"></section>-->
				<section id="features" class="row">
					<div class="small-12  columns  features-wrapper">
						<!-- Tabs -->
						<?php $fslug = get_ID_by_slug($terms[0]->slug)?>
						<?php $modulos = get_field('modulos' , $fslug );?>
						
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
				
				<!-- News -->
				<?php $news = get_posts(array('post_type' => 'post' , 'numberposts' => 2 , 'facultad' => $terms[0]->name)); ?>
				<section id="news" class="row  row-wide">
					<div class="row">
						<!-- Heading -->
						<div class="small-12  columns  page-heading">
							<h1 class="page-heading__title">Noticias recientes</h1>
						</div>
						<!-- end .page-heading -->

						<!-- Container -->
						<div class="  news-container">
								<?php foreach($news as $article): ?>
								<!-- New 1 -->
								<article class="small-6  columns  news-block">
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
			</div>
			<!-- end #career-container -->






<?php get_footer()?>