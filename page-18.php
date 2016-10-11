<?php get_header()?>
<?php $bg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) , 'biggerHead')?>


			<!-- Main Container -->
			<div id="university-container" class="off-canvas-content  main-container" style="min-height: 800px;" data-off-canvas-content>
				<!-- Main Heading (Career Heading) -->
				<section id="university-heading" class="row  row-wide  main-heading" style="background:url('<?php echo $bg[0]?>') scroll no-repeat top center #FFFFFF;">
					<div class="row">
						<div class="small-12  medium-6  large-6  columns  main-heading__content">
							<h1 class="main-heading__content-title  open"><?php echo $post->post_title?></h1>
							<div class="main-heading__content-text">
								<p><?php echo $post->post_excerpt?></p>							
							</div>
						</div>
						<!-- end .main-heading__content -->

					</div>
					<!-- end .row -->
				</section>
				<!-- end .main-heading -->
				
				
				<!-- Page Intro -->
				<section class="row  row-wide  page-intro">
					<div class="row" data-equalizer="page-intro">
						<div class="small-12  medium-12  large-7  columns  page-intro__content" data-equalizer-watch="page-intro">
							<?php echo apply_filters('the_content',$post->post_content)?>
						</div>
						<!-- end .page-intro__content -->
						
						<div class="small-1  columns  show-for-medium" data-equalizer-watch="page-intro">
							<div class="page-intro__divider"></div>
						</div>
						<!-- end .page-intro__divider -->

						<div class="small-12  medium-12  large-4  columns  page-intro__content" data-equalizer-watch="page-intro">
							<div class="small-12  columns  page-intro__content-wrapper">
								<h2 class="page-intro__content-title  open"><i><?php echo get_field('titulo_caja_destacada')?></i></h2>
								<p><i><?php echo get_field('caja_destacada')?></i></p>
							</div>
						</div>
						
					</div>
					<!-- end .row -->
				</section>
				<!-- end .page-intro -->
				
				
				
				<?php if(get_field('modulos')){?>
				<?php $modulos = get_field('modulos')?>
				
				<section id="modules" class="row page-intro">
					
					<?php foreach($modulos as $modulo):?>
						
						<?php if($modulo['acf_fc_layout'] == 'text_block'){?>
							
							<?php if($modulo["columnas"] == '1'){?>
								
								<div class="small-12 columns">
									<?php echo apply_filters('the_content' , $modulo['bloque'])?>
								</div>
								<div class="clear separator border"></div>
							<?php }elseif($modulo['columnas'] == '2'){?>
								
								<div class="medium-6 small-12 columns">
									<?php echo apply_filters('the_content' , $modulo['bloque'])?>
								</div>
								<div class="medium-6 small-12 columns">
									<?php echo apply_filters('the_content' , $modulo['bloque_de_texto_2'])?>
								</div>
								<div class="clear separator border"></div>
							<?php }elseif($modulo['columnas'] == '3'){?>
								
								<div class="small-4 columns">
									<?php echo apply_filters('the_content' , $modulo['bloque'])?>
								</div>
								<div class="small-4 columns">
									<?php echo apply_filters('the_content' , $modulo['bloque_de_texto_2'])?>
								</div>
								<div class="small-4 columns">
									<?php echo apply_filters('the_content' , $modulo['bloque_de_texto_3'])?>
								</div>
								
							<?php }elseif($modulo['columnas'] == '1-2'){?>
								
								<div class="small-4 columns">
									<?php echo apply_filters('the_content' , $modulo['bloque'])?>
								</div>
								<div class="small-8 columns">
									<?php echo apply_filters('the_content' , $modulo['bloque_de_texto_2'])?>
								</div>
								<div class="clear separator border"></div>
							<?php }elseif($modulo['columnas'] == '2-1'){?>
								
								<div class="small-8 columns">
									<?php echo apply_filters('the_content' , $modulo['bloque'])?>
								</div>
								<div class="small-4 columns">
									<?php echo apply_filters('the_content' , $modulo['bloque_de_texto_2'])?>
								</div>
								<div class="clear separator border"></div>
							<?php }?>
								
						<?php }elseif( $modulo['acf_fc_layout'] == 'acordeon'){?>
							
							<div class="small-12 medium-10 medium-offset-1 columns">
								
								<ul class="accordion" data-accordion>
									<?php foreach($modulo['acordeones'] as $acordeon):?>
									  <li class="accordion-item " data-accordion-item>
										<a href="#" class="accordion-title"><?php echo $acordeon['titulo']?></a>
										<div class="accordion-content" data-tab-content>
										  <?php echo apply_filters('the_content', $acordeon['descripcion'])?>
										</div>
									  </li>
									<?php endforeach?>							  
								</ul>
								
							</div>
							<div class="clear"></div>
						<?php }elseif( $modulo['acf_fc_layout'] == 'pestanas'){?>
								
								<div class="pestanas">
							
									<div class="small-3  columns">
										<ul id="about-tabs" class="tabs vertical" data-tabs>

											<?php $pcounter = 0?>
											<?php foreach($modulo['tabs'] as $pestana):?>
												<?php $pcounter++ ?>
												<li class="tabs-title <?php echo $pcounter == 1 ? 'is-active' : '';?>"><a href="#panel_<?php echo $pcounter?>"><?php echo $pestana['titulo']?> <i class="fa fa-angle-right fa-fw trsn"></i></a></li>
											<?php endforeach?>

										</ul>

									</div>


									<div class="small-9  columns">
										<div id="about-tabs-content" class="tabs-content vertical" data-tabs-content="about-tabs">

											<?php $ppcounter = 0?>
											<?php foreach($modulo['tabs'] as $pestana):?>
											<?php $ppcounter++ ?>
											<!-- Panel Mission (Misión) -->
											<div id="panel_<?php echo $ppcounter?>" class="tabs-panel <?php echo $ppcounter == 1 ? 'is-active' : '';?>">
												<h1 class="tabs-panel__title"><?php echo $pestana['titulo']?></h1>
												<div class="tabs-panel__content">
													<?php echo apply_filters('the_content' , $pestana['descripcion'])?>
												</div>
												<!-- end .tabs-panel__content -->
											</div>
											<!-- end #panel_mission -->
											<?php endforeach?>

										</div>
										<!-- end #about-tabs-content -->
									</div>
									<div class="clear"></div>
									
									
								</div>
								
								
						<?php }?>
						
					<?php endforeach;?>
					
				</section>
				<?php }?>
				
				<!-- Cards (Carreras Acreditadas) -->
				<section id="accredited-courses" class="row  row-wide">
					<div class="row">
						<div class="small-12  columns  text-center  page-heading">
							<h1 class="page-heading__title">Carreras Acreditadas</h1>
							<p class="page-heading__text">La Universidad UCINF imparte 29 carreras de pregrado – jornadas diurna y vespertina, a través de sus cuatro Facultades: Ingeniería y negocios, Ciencias sociales y jurídicas, Educación y Ciencias de la Salud, de las cuales siete de ellas se encuentran acreditadas.</p>
						</div>
					</div>
					<!-- end .row -->
					
					<div class="row  cards-container">
						
						<?php $degrees = get_posts(array('post_type' => 'carreras' , 'numberposts' => -1 , 'nivel' => 'pregrado') )?>
						<?php foreach($degrees as $degree):?>
						
						<?php if(get_field('periodo_de_acreditacion' , $degree->ID)){?>
						<!-- Block -->
						<div class="small-12  medium-6  large-3  columns  card-block end">
							<div class="card-block__wrapper  card-block__wrapper--bordered">
								<?php $badge = wp_get_attachment_image_src(get_field('etiqueta_acreditacion' , $degree->ID) , 'badgeAcreditacion')?>
								<a href="<?php echo get_permalink($degree->ID)?>"><img src="<?php echo $badge[0]?>" class="card-block__image" alt="<?php echo $degree->post_title?>" style="margin:10px auto"></a>
								<h2 class="card-block__title">Carrera Acreditada <?php echo get_field('periodo_de_acreditacion' , $degree->ID)?> años</h2>
								<a href="<?php echo get_field('acuerdo_de_acreditacion' , $degree->ID)?>"><small><i class="fa fa-download"></i> Acuerdo Acreditación</small></a>
							</div>
						</div>
						<!-- end .card-block -->
						<?php }?>
						
						<?php endforeach;?>
					</div>
				</section>
				<!-- end .cards-container -->
				
				
				<!-- FAQ (Preguntas Frecuentes) -->
				<section class="row  row-wide  faq">
					<div class="row">
						<div class="small-12  columns  text-center  page-heading">
							<h1 class="page-heading__title">Preguntas Frecuentes</h1>
						</div>
					</div>
					<!-- end .row -->

					<div class="row  faq-container" data-equalizer="faq" data-equalize-by-row="true">
						
						
						<div class="small-12 medium-10 medium-offset-1 columns">
								
							<ul class="accordion" data-accordion>
								<?php $faqs = get_field('preguntas_frecuentes')?>
								<?php foreach($faqs as $question):?>
								  <li class="accordion-item " data-accordion-item>
									<a href="#" class="accordion-title"><?php echo $question['pregunta']?></a>
									<div class="accordion-content" data-tab-content>
									  <?php echo apply_filters('the_content', $question['respuesta'])?>
									</div>
								  </li>
								<?php endforeach?>							  
							</ul>

						</div>
						<div class="clear"></div>
						
						

						
					</div>
					<!-- end .faq-container -->
				</section>
				<!-- end .faq -->
				
				
				
				<!-- News (Noticias) -->
				<?php $news = get_posts(array('post_type' => 'post' , 'numberposts' => 4 , 'category' => 15)) ?>
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
				
				
			</div>
			<!-- end #university-container -->


<?php get_footer()?>