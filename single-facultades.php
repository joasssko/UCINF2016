hola! soy una facultad <?php echo $post->post_title?>






<?php $carreras = get_posts(array('post_type' => 'carreras' , 'facultad' => $post->post_name ))?>
<?php foreach($carreras as $carrera):?>


<li><a href="<?php echo get_permalink($carrera->ID)?>"><?php echo $carrera->post_name?></a></li>

<?php endforeach?>