<?php get_header()?>
<?php 
$bgid = get_post_thumbnail_id();
$bgsrc = wp_get_attachment_image_src($bgid,'head', true);
?>
<div id="top" class="overlayed" style="background-image:url(<?php echo $bgsrc[0]?>); min-height:700px; background-attachment:fixed; background-size: 100% auto;">
	<div class="container">
		<div class="row">
        
        	<div class="jumbotron pre-heading">
                <div class="container ">
                    <h1><?php echo $post->post_title; ?></h1>
                    <p><?php echo substr($post->post_content , 0, 60)?></p>
                </div>
            </div>
        
        </div>
	</div>
</div>


<main class="single">
	<div class="container">
		<div class="row">
        
        	<div class="col-md-9">
            	<div id="breadcrumbs">
                    <ul>
                        <li>Usted está en:</li>
                        <li><a href="<?php echo get_bloginfo('url')?>">Home</a></li>
                        <li><a href="<?php echo get_post_type_archive_link('post')?>"><span class="fa fa-angle-right"></span> Noticias</a></li>
                        <li><strong><span class="fa fa-angle-right"></span> <?php echo $post->post_title?></strong></li>
                    </ul>
                </div>
                
                <h1><?php echo $post->post_title?></h1>
                
                <div class="metadata">
                	<div class="col-md-6 col-esp">
						<?php $author_avatar = get_field('author_avatar' , 'user_'.$post->post_author);?>
                        <?php $author_avatar_img = wp_get_attachment_image_src($author_avatar, 'thumbnail')?>
                        <img src="<?php echo $author_avatar_img[0]?>" class="img-circle"  alt="">
                        <?php $author_data = get_userdata($post->post_author);?>
                        <h4>Por: <strong><?php echo $author_data->display_name?></strong></h4>
                    </div>
                	<div class="col-md-6 col-esp">
                    	<span>Fecha: <strong><?php echo get_the_date('d \d\e M \d\e\l Y' , $post->ID)?></strong></span>
                    </div>
                   	
                    
                </div>
                <div class="clear"></div>
                
                <div class="post-content">
                	<p class="lead"><?php echo $post->post_excerpt?></p>
                	<?php echo apply_filters('the_content' , $post->post_content)?>
                </div>
                
                
                
            </div>
            
        	<div class="col-md-3">
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
</main>


<div id="recent-news" class="single">
	<div class="container">
		<div class="row">
        	<h2>Noticias recientes</h2>
            <?php 
			$news = get_posts(array('post_type' => 'post' , 'numberposts' => 3));
			foreach($news as $note){?>
				
                <div class="col-md-4">
                	<figure>
                    	
                		<figcaption class="news-date">
                        	<span><?php echo get_the_date('d' , $note->ID)?></span>
                        	<small><?php echo get_the_date('M' , $note->ID)?> <?php echo get_the_date('Y' , $note->ID)?></small>
                        </figcaption>
                        
						<a href="<?php echo get_permalink($note->ID)?>" rel="nofollow" title="Ver <?php echo $post->post_title?>"><?php echo get_the_post_thumbnail($note->ID , 'route' , array('class' => 'img-responsive'))?></a>
                        
                        <figcaption class="news-abstract">
                        	<h3><?php echo $note->post_title?></h3>
                            <p><?php echo $note->post_excerpt?></p>
                            <a href="<?php echo get_permalink($note->ID)?>" rel="nofollow" title="Ver <?php echo $post->post_title?>">Ver más <span class="fa fa-arrow-right fa-fw"></span></a>
                            <div class="clear miniseparator"></div>
                        </figcaption>
                        
                        <figcaption class="news-author">
                        	<?php $author_avatar = get_field('author_avatar' , 'user_'.$note->post_author);?>
                            <?php $author_avatar_img = wp_get_attachment_image_src($author_avatar, 'thumbnail')?>
                        	<img src="<?php echo $author_avatar_img[0]?>" class="img-circle"  alt="">
                           <?php $author_data = get_userdata($note->post_author);?>
                           <h3>Por: <strong><?php echo $author_data->display_name?></strong></h3>
                        </figcaption>
                        
                	</figure>
                </div>
                
			<?php }?>
        </div>
	</div>
</div>

<?php get_footer()?>