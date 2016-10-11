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
							
							<?php $autorities = get_field('autoridades')?>
							<?php foreach($autorities as $individual):?>
							<div class="small-12  columns  person-block">
								<div class="row">
									<div class="small-12  columns  person-block__info">
										<h1 class="person-block__info-name"><?php echo $individual['nombre']?></h1>
										<p class="person-block__info-text"><?php echo $individual['cargo']?></p>
										<a href="mailto:<?php echo $individual['email']?>" class="person-block__info-email" title="Enviar correo"><i class="fa fa-envelope-o fa-fw"></i> <?php echo $individual['email']?></a>
									</div>
									<!-- end .person-block__info -->
								</div>
								<!-- end .row -->
							</div>
							<!-- end .person-block -->
							<?php endforeach?>

						
							
						</div>
						<!-- end .page-intro__avatar -->
					</div>
					<!-- end .row -->
				</section>
				<!-- end .page-intro -->
				
				
				<!-- Cards -->
				<section class="row  row-wide  cards-container">
					<div class="row">
					
						<?php $modulos = get_posts(array('post_type' => 'page' , 'post_parent' => $post->ID))?>
						<?php foreach($modulos as $modulo):?>
						<!-- Autoridades -->
						<div class="small-12  medium-6  large-3  columns  card-block">
							<a href="<?php echo get_permalink($modulo->ID)?>" class="card-block__anchor" title="<?php echo $modulo->post_title?>">
								<?php $mod_img = wp_get_attachment_image_src( get_post_thumbnail_id($modulo->ID) , 'newsSmall')?>
								<?php if(get_field( 'mini_imagen' , $modulo->ID)){?>
									<?php $bg = wp_get_attachment_image_src( get_field( 'mini_imagen' , $modulo->ID) , 'newsBig')?>
									<img src="<?php echo $bg[0]?>" alt="" class="tabs-panel__block-image">
								<?php }else{?>
									<?php echo get_the_post_thumbnail($modulo->ID , 'newsBig' , array('class' => 'tabs-panel__block-image'))?>
								<?php }?>
								<h2 class="card-block__title"><?php echo $modulo->post_title?></h2>
							</a>
						</div>
						<!-- end .card-block -->
						<?php endforeach?>
						
					</div>
				</section>
				<!-- end .cards-container -->
				
				
				<!-- Banners (Acreditación y La Universidad) -->
				<section id="banners" class="row  banners-container">
					<!-- Becas y Créditos -->
					<div class="small-12  medium-6  large-6  columns  banners-block  banners-block--left">
						<div class="small-12  columns  banners-block__wrapper">
							<div class="row">
								<div class="small-12  medium-4  large-4  columns  banners-block__image">
									<div class="row">
										<img src="<?php echo get_bloginfo('template_directory')?>/images/la-universidad.jpg" class="img-full" alt="Banner Becas y Créditos">
									</div>
									<!-- end .row -->
								</div>
								<!-- end .banners-block__image -->
								
								<div class="small-12  medium-8  large-8  columns  banners-block__content">
									<h1 class="banners-block__content-title">Becas y Créditos<span></span></h1>
									<p class="banners-block__content-text"><strong>Universidad UCINF</strong> Fusce vulputate non nulla at facilisis. Duis ut dapibus enim. Praesent id vestibulum.</p>
									<a href="<?php echo get_page_link(30)?>" class="anchor-link  anchor-link--white" title="Conoce más sobre la Acreditación">Conoce más sobre la Acreditación <i class="fa fa-angle-double-right fa-fw"></i></a>
								</div>
								<!-- end .banners-block__content -->
							</div>
							<!-- end .row -->
						</div>
						<!-- end .banners-block__wrapper -->
					</div>
					<!-- end .banners-block -->

					<!-- Beneficios UCINF -->
					<div class="small-12  medium-6  large-6  columns  banners-block  banners-block--right">
						<div class="small-12  columns  banners-block__wrapper">
							<div class="row">
								<div class="small-12  medium-4  large-4  columns  banners-block__image">
									<div class="row">
										<img src="<?php echo get_bloginfo('template_directory')?>/images/la-universidad.jpg" class="img-full" alt="Banner Beneficios UCINF">
									</div>
									<!-- end .row -->
								</div>
								<!-- end .banners-block__image -->
								
								<div class="small-12  medium-8  large-8  columns  banners-block__content">
									<h1 class="banners-block__content-title">Beneficios UCINF<span></span></h1>
									<p class="banners-block__content-text"><strong>Universidad UCINF</strong> Fusce vulputate non nulla at facilisis. Duis ut dapibus enim. Praesent id vestibulum.</p>
									<a href="<?php echo get_page_link(192)?>" class="anchor-link  anchor-link--white" title="Conoce más sobre la universidad">Conoce más sobre la universidad <i class="fa fa-angle-double-right fa-fw"></i></a>
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
				
				<!-- News (Noticias) -->
				<?php $news = get_posts(array('post_type' => 'post' , 'numberposts' => 4 , 'category' => 14)) ?>
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