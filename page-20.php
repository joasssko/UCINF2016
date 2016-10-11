<?php get_header()?>

<?php $bg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID) , 'full')?>
<div id="university-container" class="off-canvas-content  main-container" style="min-height: 800px;" data-off-canvas-content>

<section class="row row-wide" style="background-image:url(<?php echo $bg[0]?>); background-color:#00BAF2; background-position: top right; background-repeat:no-repeat; background-size: auto 100%; padding-top:60px">
	<div class="columns small-12 medium-6 large-4 large-offset-2">
		
		<div class="campaign-call">
			
			<?php echo apply_filters('the_content' , $post->post_content)?>
			
		</div>
		
	</div>
	<div class="columns small-12 medium-6 large-4 end">
		
		<div class="form-container row">
			
			<?php echo do_shortcode('[contact-form-7 id="740" title="Admision"]')?>
			
		</div>
		
	</div>
</section>


<!-- Facultie System -->
<section id="facultie-system" class="row  row-wide" style="box-shadow: 0 -5px 20px rgba(0,0,0,.2);">
	<div class="row">
		<div class="small-12  columns">
			<h1 class="facultie-system__title">Oferta académica disponible 2017</h1>

			


			<!-- System Content -->
			<div id="facultie-system-content" class="tabs-content" data-tabs-content="facultie-system-tabs">

				

				<!-- Panel Undergraduate -->
				<div id="panel_undergraduate" class="tabs-panel is-active">
					<div class="row">
					
						<?php $carreras = get_field('oferta_academica')?>
						<?php $degrees = get_posts(array('post_type' => 'carreras' , 'post__in' => $carreras , 'nivel' => 'pregrado', 'numberposts' => -1))?>
						<?php if($degrees){?>
						<?php foreach($degrees as $degree):?>
						<!-- <?php echo $degree->post_title ?> -->
						<div class="small-12  medium-4  large-3  columns  tabs-panel__block end degree">
							<a href="<?php echo get_permalink($degree->ID)?>" class="tabs-panel__block-anchor" data-tooltip aria-haspopup="true" class="has-tip bottom" data-disable-hover="false" data-click-open="false" tabindex="3" title="<?php echo $degree->post_excerpt?>">
								<?php //echo get_the_post_thumbnail($degree->ID , 'newsBig' , array('class' => 'tabs-panel__block-image'))?>
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

			</div>
			<!-- end #facultie-system-content -->
		</div>
	</div>
	<!-- end .row -->
</section>
<!-- end #facultie-system -->

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
						<p class="tabs-panel__block-text show-for-large"><?php echo $facultad->post_excerpt?></p>
						<a href="<?php echo get_permalink($facultad->ID)?>" class="tabs-panel__block-anchor  anchor-link" title="Conoce más sobre la facultad">Conoce más sobre la facultad <i class="fa fa-angle-double-right fa-fw"></i></a>
					</div>
					<!-- end .tabs-panel__block-wrapper -->
				</div>
				<?php echo get_the_post_thumbnail($facultad->ID , 'tabsizeHalf' , array('class' => 'tab-panel__image img-full' , 'alt' => $facultad->post_title))?>

			</div>
			<!-- end .tabs-panel -->
			<?php endforeach ?>


		</div>
		<!-- end .tabs-content -->
	</div>
	<!-- end .faculties-wrapper -->
</section>




<section id="wyucinf" class="row-wide">
	<div class="small-12 large-8 large-offset-2 end">
		<p class="lead">La Universidad UCINF (inicialmente denominada Universidad de Ciencias de la Informática) fue constituida el 14 de julio de 1989 y comenzó sus actividades docentes en el año académico 1990. En enero de 2003 el Consejo Superior de Educación otorgó la plena autonomía institucional, finalizando el proceso al cual se incorporó voluntariamente en 1993.</p>
	</div>
</section>

<section class="row row-wide" id="lastCall">
	
	<img src="<?php echo get_bloginfo('template_directory')?>/images/bottom_bg_admision.png" class="img-full" alt="">

	<div class="small-12 large-8 large-offset-2 end">
		
		<p class="lead">Estamos conscientes que el ingreso a la educación superior no suele ser fácil. La Universidad es más exigente que la educación media. Para suplir estas diferencias, contamos con un sistema de apoyo especial que permite a cualquier estudiante, a través de nuestros talleres de adquisición de competencias básicas, lograr las capacidades que se requieren para tener éxito en los estudios universitarios.</p>
		
	</div>
	
	
</section>

</div>

<?php get_footer()?>