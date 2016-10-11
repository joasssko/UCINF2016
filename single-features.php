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
						
						<?php if(get_field('titulo_caja_destacada')){?>
						<div class="small-12  medium-12  large-4  columns  page-intro__content" data-equalizer-watch="page-intro">
							<div class="small-12  columns  page-intro__content-wrapper">
								<h2 class="page-intro__content-title  open"><i><?php echo get_field('titulo_caja_destacada')?></i></h2>
								<p><i><?php echo get_field('caja_destacada')?></i></p>
							</div>
						</div>
						
						<?php }?>
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
								
								<div class="small-6 columns">
									<?php echo apply_filters('the_content' , $modulo['bloque'])?>
								</div>
								<div class="small-6 columns">
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
							
							<div class="small-10 small-offset-1 columns">
								
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
				
				
				
				
				
			</div>
			<!-- end #university-container -->


<?php get_footer()?>