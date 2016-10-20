<?php get_header()?>
<?php 
$bgid = get_post_thumbnail_id();
$bgsrc = wp_get_attachment_image_src($bgid,'head', true);
?>

<!-- Main Container -->
<div id="career-container" class="off-canvas-content  main-container" style="min-height: 800px;" data-off-canvas-content>
	<!-- Career Heading -->
	<section class="row  row-wide  career-heading" style="background:url('<?php echo $bgsrc[0]?>') scroll no-repeat top center #FFFFFF;">
		<div class="row">
			<div class="small-12  medium-8  large-10  columns  carrer-heading__content">
				<h1 class="career-heading__content-title  open"><?php echo $post->post_title ?></h1>
				
			</div>
			<!-- end .career-heading__content -->

		</div>
		<!-- end .row -->
	</section>
	<!-- end .career-heading -->



<!-- Page Intro -->
<section class="row  row-wide  page-intro">
	<div class="row" data-equalizer="page-intro">
		<div class="small-12  medium-12  large-7  columns  page-intro__content" data-equalizer-watch="page-intro">
		
			<div class="post-content">
				<p class="lead"><?php echo $post->post_excerpt?></p>
			</div>
			<div id="breadcrumbs">
				<ul>
					<li>Usted está en:</li>
					<li><a href="<?php echo get_bloginfo('url')?>">Home</a></li>
					<li><a href="<?php echo get_post_type_archive_link('post')?>"><i class="fa fa-angle-right"></i> Noticias</a></li>
					<li><strong><i class="fa fa-angle-right"></i> <?php echo $post->post_title?></strong></li>
				</ul>
			</div>

			<div class="metadata row">
				<div class="medium-6 small-12 columns">
					<?php $author_avatar = get_field('imagen_para_mostrar' , 'user_'.$post->post_author);?>
					<?php $author_avatar_img = wp_get_attachment_image_src($author_avatar, 'thumbnail')?>
					<img src="<?php echo $author_avatar_img[0]?>" class="img-circle"  alt="">
					<?php $author_data = get_userdata($post->post_author);?>
					<span>Por: <strong><?php echo $author_data->display_name?></strong></span>
				</div>
				<div class="medium-6 small-12 columns">
					<span style="display: inline-block; padding: 10px 0 0 0;">Fecha: <strong><?php echo get_the_date('d \d\e M \d\e\l Y' , $post->ID)?></strong></span>
				</div>


			</div>
			<div class="clear"></div>
		
			<?php echo apply_filters('the_content',$post->post_content)?>
		</div>
		<!-- end .page-intro__content -->

		<div class="small-1  columns  show-for-medium" data-equalizer-watch="page-intro">
			<div class="page-intro__divider"></div>
		</div>
		<!-- end .page-intro__divider -->

		
		<div class="small-12  medium-12  large-4  columns  page-intro__content" data-equalizer-watch="page-intro">
			<div class="small-12  columns  page-intro__content-wrapper">
				<h2 class="page-intro__content-title  open">Compartir</h2>
				
				<div class="share">

                    <div class="facebook">
                        <a onclick="basicPopup(this.href);return false" target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>">
                            <div class="fa fa-facebook-square fa-fw fa-2x"></div> Facebook
                        </a>
                    </div>

                    <div class="twitter">
                        <a onclick="basicPopup(this.href);return false" target="_blank" href="http://twitter.com/share?text=<?php echo get_bloginfo('name')?>&nbsp;-&nbsp;<?php echo $post->post_title?>">
                            <div class="fa fa-twitter-square fa-fw fa-2x"></div> Twitter
                        </a>
                    </div>

                </div>
			</div>
		</div>

		
	</div>
	<!-- end .row -->
</section>
<!-- end .page-intro -->


<?php $news = get_posts(array('post_type' => 'post' , 'numberposts' => 2)); ?>

<section id="news" class="row  row-wide">
	<div class="row">
		<!-- Heading -->
		<div class="small-12  columns  page-heading">
			<h1 class="page-heading__title">Noticias recientes</h1>
		</div>
		<!-- end .page-heading -->

		<!-- Container -->
		<div class=" news-container">
				<?php foreach($news as $article): ?>
				<!-- New 1 -->
				<article class="medium-6  small-12 columns  news-block">
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