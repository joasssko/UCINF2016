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
				
				<?php $autorities = get_field('autoridades')?>
				<!-- Page Intro -->
				<section class="row  row-wide  page-intro">
					<div class="row">
						<div class="small-12  medium-12  large-3  columns  page-intro__avatar">
							<?php $individual_rector = wp_get_attachment_image_src( $autorities[0]['foto'] , 'individual')?>
							<img src="<?php echo $individual_rector[0]?>" class="page-intro__avatar-image" alt="Jorge Narbona Lemus">
							<h1 class="page-intro__avatar-title"><?php echo $autorities[0]['nombre']?><small class="page-intro__avatar-subtitle">Rector</small></h1>
						</div>
						<!-- end .page-intro__avatar -->

						<div class="small-12  medium-12  large-8  columns  page-intro__content">
							<h2 class="page-intro__content-title  open">Mensaje del Rector</h2>
							<?php echo apply_filters('the_content' , $post->post_content) ?>
						</div>
						<!-- end .page-intro__content -->
					</div>
				</section>
				<!-- end .page-intro -->

				<!-- Teachers -->
				<section id="authorities-list" class="row  row-wide  teachers">
					<div class="row">
						
						
						<?php foreach($autorities as $individual):?>
						
						<!-- <?php echo $individual['nombre'] ?> -->
						<div class="small-12  medium-6  large-4  columns  person-block">
							<div class="row">
								<div class="small-12  medium-5  large-4  columns person-block__heading">
									<?php $individual_img = wp_get_attachment_image_src( $individual['foto'] , 'thumbnail')?>
									
									<img src="<?php echo $individual_img[0]?>" class="person-block__heading-image" alt="<?php echo $individual['nombre'] ?>">
								</div>
								<!-- end .person-block__heading -->

								<div class="small-12  medium-7  large-8  columns  person-block__info">
									<h1 class="person-block__info-name"><?php echo $individual['nombre']?></h1>
									<p class="person-block__info-text"><?php echo $individual['email']?></p>
									<a href="mailto:<?php echo $individual['email']?>" class="person-block__info-email" title="Enviar correo"><i class="fa fa-envelope-o fa-fw"></i> <?php echo $individual['email']?></a>
								</div>
								<!-- end .person-block__info -->
							</div>
							<!-- end .row -->
						</div>
						<!-- end .person-block -->
						
						<?php endforeach ?>
						
					</div>
					<!-- end .row -->
				</section>
				<!-- end #authorities-list -->
				
				
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