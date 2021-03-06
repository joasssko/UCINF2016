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
				
				<!-- University About -->
				<section id="university-about" class="row  row-wide">
					<div class="row">
						<!-- Tabs -->
						
						<?php $tabs = get_field('tabs')?>
						
						<div class="medium-3 small-12 columns">
							<ul id="about-tabs" class="tabs vertical" data-tabs>
								<?php $ctbs = 0?>
								<?php foreach($tabs as $tab):?>
								<?php $ctbs++ ?>
								<li class="tabs-title <?php echo $cft == 1 ? 'is-active' : '';?>"><a href="#panel_uni_<?php echo $ctbs?>"><?php echo $tab['titulo_tab']?> <i class="fa fa-angle-right fa-fw trsn"></i></a></li>
								<?php endforeach?>
							</ul>
							<!-- end #about-tabs -->
						</div>
						
						<!-- Tabs Content -->
						<div class="medium-9 small-12 columns">
							<div id="about-tabs-content" class="tabs-content vertical" data-tabs-content="about-tabs">
								
								<?php $ctbss = 0?>
								<?php foreach($tabs as $tab):?>
								<?php $ctbss++ ?>
								<!-- Panel Mission (Misión) -->
								<div id="panel_uni_<?php echo $ctbss?>" class="tabs-panel <?php echo $ctbss == 1 ? 'is-active' : '';?>">
									<h1 class="tabs-panel__title"><?php echo $tab['titulo_tab'] ?></h1>
									<div class="tabs-panel__content">
										<?php echo apply_filters('the_content' , $tab['contenido_tab'])?>
									</div>
									<!-- end .tabs-panel__content -->
								</div>
								<!-- end #panel_mission -->
								<?php endforeach ?>
								
							</div>
							<!-- end #about-tabs-content -->
						</div>
					</div>
					<!-- end .row -->
				</section>
				<!-- end #university-about -->
				
				<!-- Cards -->
				<section class="row  row-wide  cards-container">
					<div class="row">
						<!-- Autoridades -->
						<div class="small-12  medium-6  large-3  columns  card-block">
							<a href="<?php echo get_page_link(12)?>" class="card-block__anchor" title="Autoridades">
								<?php $img_autoridades = wp_get_attachment_image_src( get_field('mini_imagen' , 12) , 'newsSmall')?>
								<img src="<?php echo $img_autoridades?>" alt="Autoridades" class="card-block__image">
								<h2 class="card-block__title">Autoridades</h2>
							</a>
						</div>
						<!-- end .card-block -->

						<!-- Reglamentos -->
						<div class="small-12  medium-6  large-3  columns  card-block">
							<a href="<?php echo get_page_link(14)?>" class="card-block__anchor" title="Reglamentos">
								<?php $img_reglamentos = wp_get_attachment_image_src( get_field('mini_imagen' , 14) , 'newsSmall')?>
								<img src="<?php echo $img_reglamentos?>" alt="Reglamentos" class="card-block__image">

								<h2 class="card-block__title">Reglamentos</h2>
							</a>
						</div>
						<!-- end .card-block -->

						<!-- Convenios y Relaciones -->
						<div class="small-12  medium-6  large-3  columns  card-block">
							<a href="<?php echo get_page_link(198)?>" class="card-block__anchor" title="Beneficios UCINF">
								<?php $img_convenios = wp_get_attachment_image_src( get_field('mini_imagen' , 198) , 'newsSmall')?>
								<img src="<?php echo $img_convenios?>" alt="Beneficios UCINF" class="card-block__image">
								<h2 class="card-block__title">Beneficios UCINF</h2>
							</a>
						</div>
						<!-- end .card-block -->

						<!-- Acreditación -->
						<div class="small-12  medium-6  large-3  columns  card-block">
							<a href="<?php echo get_page_link(18)?>" class="card-block__anchor" title="Acreditación">
								<?php $img_acreditacion = wp_get_attachment_image_src( get_field('mini_imagen' , 18) , 'newsSmall')?>
								<img src="<?php echo $img_acreditacion?>" alt="Acreditación" class="card-block__image">
								<h2 class="card-block__title">Acreditación</h2>
							</a>
						</div>
						<!-- end .card-block -->
					</div>
				</section>
				<!-- end .cards-container -->
			</div>
			<!-- end #university-container -->


<?php get_footer()?>