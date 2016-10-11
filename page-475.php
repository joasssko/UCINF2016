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
				
				
				
				<!-- Facultie System -->
				<section id="facultie-system" class="row  row-wide">
					<div class="row">
						<div class="small-12  columns">
							<h1 class="facultie-system__title">Sistema Contínuo de Estudios</h1>

							<!-- System Tabs -->
							<ul id="facultie-system-tabs" class="tabs" data-tabs>
								
								<li class="tabs-title">
									<a href="#panel_undergraduate">Pregrado<small>Grado Académico Universitario</small></a>
								</li>
								<li class="tabs-title">
									<a href="#panel_minor" aria-selected="true">Minor<small>Formación Académica Complementaria</small></a>
								</li>
								<li class="tabs-title is-active">
									<a href="#panel_postgraduate">Postgrado<small>Perfeccionamiento Contínuo</small></a>
								</li>
								
							</ul>
							<!-- end #facultie-system-tabs -->
							
							
							<!-- System Content -->
							<div id="facultie-system-content" class="tabs-content" data-tabs-content="facultie-system-tabs">
								
								<!-- Panel Minor -->
								<div id="panel_minor" class="tabs-panel">
									<div class="row">
										<?php $degrees = get_posts(array('post_type' => 'carreras' , 'nivel' => 'minor', 'numberposts' => -1))?>
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
								<div id="panel_undergraduate" class="tabs-panel">
									<div class="row">
										
										<?php $degrees = get_posts(array('post_type' => 'carreras' , 'facultad' => 'educacion' , 'nivel' => 'pregrado', 'numberposts' => -1))?>
										<?php $dcount = 0?>
										<div class="small-12 columns">
											<h3 class="page-intro__content-title">Facultad de Educación</h3>
										</div>
										
										<?php foreach($degrees as $degree):?>
										<?php $dcount++ ?>
										
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
										<?php if($dcount % 3 == 0){?>
											<div class="clear show-for-medium-only"></div>
										<?php }?>
										<?php endforeach ?>
										
										<div class="clear"></div>
										
										<?php $degrees = get_posts(array('post_type' => 'carreras', 'facultad' => 'ciencias-de-la-salud' , 'nivel' => 'pregrado', 'numberposts' => -1))?>
										<?php $dcount = 0?>
										<div class="small-12 columns">
											<h3 class="page-intro__content-title">Facultad de Ciencias de la Salud</h3>
										</div>
										<?php foreach($degrees as $degree):?>
										<?php $dcount++ ?>
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
										<?php if($dcount % 3 == 0){?>
											<div class="clear show-for-medium-only"></div>
										<?php }?>
										<?php endforeach ?>
										
										<div class="clear"></div>
										
										<?php $degrees = get_posts(array('post_type' => 'carreras', 'facultad' => 'ciencias-sociales-y-juridicas' , 'nivel' => 'pregrado', 'numberposts' => -1))?>
										<?php $dcount = 0?>
										<div class="small-12 columns">
											<h3 class="page-intro__content-title">Facultad de Ciencias Sociales y Jurídicas</h3>
										</div>
										<?php foreach($degrees as $degree):?>
										<?php $dcount++ ?>
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
										<?php if($dcount % 3 == 0){?>
											<div class="clear show-for-medium-only"></div>
										<?php }?>
										<?php endforeach ?>
										
										<div class="clear"></div>
										
										<?php $degrees = get_posts(array('post_type' => 'carreras', 'facultad' => 'ingenieria-y-negocios' , 'nivel' => 'pregrado', 'numberposts' => -1))?>
										<?php $dcount = 0?>
										<div class="small-12 columns">
											<h3 class="page-intro__content-title">Facultad de Ingeniería y Negocios</h3>
										</div>
										<?php foreach($degrees as $degree):?>
										<?php $dcount++ ?>
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
										<?php if($dcount % 3 == 0){?>
											<div class="clear show-for-medium-only"></div>
										<?php }?>
										<?php endforeach ?>
										
										<div class="clear"></div>
										
										
									</div>
								</div>
								<!-- end #panel_undergraduate -->

								<!-- Panel Postgraduate -->
								<div id="panel_postgraduate" class="tabs-panel is-active">
									<div class="row">
										<?php $degrees = get_posts(array('post_type' => 'carreras' ,  'nivel' => 'postgrado', 'numberposts' => -1))?>
										<?php if($degrees){?>
										<?php foreach($degrees as $degree):?>
										<!-- <?php echo $degree->post_title ?> -->
										<div class="small-12  medium-4  large-3  columns  tabs-panel__block end degree">
											<a href="<?php echo get_permalink($degree->ID)?>" class="tabs-panel__block-anchor" title="Pedagogía en Educación Básica">
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
				
				
				
				
				
			</div>
			<!-- end #university-container -->


<?php get_footer()?>