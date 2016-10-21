<?php get_header()?>


<?php //$news = get_posts(array('post_type' => 'post' , 'numberposts' => 4 , 'category' => 'noticias')) ?>
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
				<h1 class="news-main__content-title"><?php echo $posts[0]->post_title ?></h1>
				<p class="news-main__content-excerpt"><?php echo $posts[0]->post_excerpt ?></p>
				<a href="<?php echo get_permalink($posts[0]->ID)?>" class="anchor-link  anchor-link--white" title="Continúa leyendo">Continúa leyendo <i class="fa fa-angle-double-right fa-fw"></i></a>
			</div>
			<!-- end .news-main__content -->

			<div class="news-main__overlay"></div>

			<?php echo get_the_post_thumbnail($posts[0]->ID , 'newsBig' , array('class' => 'news-main__image img-full' , 'alt' => $posts[0]->post_title))?>


		</article>
		<!-- end .news-main -->

		<!-- Container -->
				<?php unset($posts[0])?>
				<?php $pc = 0?>
				<?php foreach($posts as $article): ?>
				<?php $pc ++ ?>
				<!-- New 1 -->
				<article class="small-12 medium-6 large-6  columns  news-block end">
					<div class="row">
						<div class="small-12  medium-4  large-4  columns  news-block__heading">
							<a href="<?php echo get_permalink($article->ID)?>" class="news-block__heading-anchor" title="Leer más">
								<?php echo get_the_post_thumbnail($article->ID , 'newsSmall' , array('class' => 'news-block__heading-image' , 'alt' => $article->post_title))?>
							</a>
						</div>
						<!-- end .news-block__heading -->

						<div class="small-12  medium-8  large-8  columns  news-block__content">

								<h1 class="news-block__content-title"><?php echo $article->post_title ?></h1>
								<p class="news-block__content-excerpt"><?php echo $article->post_excerpt ?>... <a href="<?php echo get_permalink($article->ID)?>" class="news-block__content-anchor" title="Continuar leyendo">Continuar leyendo</a></p>

							<!-- end .row -->
						</div>
						<!-- end .news-block__content -->
					</div>
					<!-- end .row -->
				</article>
				<!-- end .news-block -->
				<?php if($pc == 3){echo '<div class="clear"></div>'; }?>
				<?php endforeach?>


		<!-- end .news-container -->
		
		<div class="clear separator"></div>
		<?php wp_pagenavi() ?>
		
	</div>
	<!-- end .row -->
</section>

<style>
	.pagination a, .pagination button {display:inline-block}
</style>


<?php get_footer()?>