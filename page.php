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
								<h2 class="page-intro__content-title  open"><i>Proceso de acreditación</i></h2>
								<p><i>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nec ullamcorper erat. Donec elit diam, placerat vitae est ac, porta eleifend erat. Donec blandit porta eros, eget accumsan tellus ullamcorper et. Sed nisi massa, auctor finibus lectus vitae, varius accumsan enim. Donec rhoncus ex id justo porttitor, ut hendrerit purus pretium. Integer a magna ac lectus ullamcorper.</i></p>
							</div>
						</div>
						
					</div>
					<!-- end .row -->
				</section>
				<!-- end .page-intro -->
				
				
				
				
				
				
				
				
				
			</div>
			<!-- end #university-container -->


<?php get_footer()?>