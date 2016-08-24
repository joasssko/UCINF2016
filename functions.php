<?php if ( function_exists('add_theme_support') ) {
add_theme_support('post-thumbnails');
//add_image_size('head', 1920, 800, true );
}
/* 
add_filter('image_size_names_choose', 'my_image_sizes');
	function my_image_sizes($sizes) {
	$addsizes = array(
		"col-6" => 'Media columna'
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}
*/
add_post_type_support('page', 'excerpt');
;?>
<?php 
if(is_single()){
	add_filter( 'show_admin_bar', '__return_false' );
}
?>
<?php 
/* Add support for wp_nav_menu() */
function register_my_menu() {
	register_nav_menu( 'primary', 'Menú Principal');
	register_nav_menu( 'secondary', 'Menú Superior');
//	register_nav_menu( 'third', 'Menú interiores');
}
add_action( 'init', 'register_my_menu' );
?>
<?php 
function call_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://code.jquery.com/jquery-1.10.0.min.js');
    wp_register_script('core', get_template_directory_uri() . '/js/core.js');

    wp_enqueue_script('jquery');
    wp_enqueue_script('core');
}    
 
add_action('wp_enqueue_scripts', 'call_scripts');
?>
<?php

//Post type register

/* add_action('init', 'rutas_register');
function rutas_register() {
    $args = array(
        'label' => 'Rutas',
        'singular_label' => 'Ruta',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => true,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'rutas'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' , 'custom-fields')
    );
    register_post_type('rutas', $args);
    flush_rewrite_rules();
}
 */
//register_taxonomy("regiones", array('rutas'), array("hierarchical" => true, "label" => "Regiones", "singular_label" => "Región", "rewrite" => true));

?>
<?php 
function my_custom_login_logo() {
    echo '<style type="text/css">
		body{ background-color:#3a3a3a;}
        h1 a { background-image:url('.get_bloginfo('template_directory').'/images/logo.png) !important;
		background-size: 120px;
		height: 120px;
		margin: 0px auto 0px;
		width: 120px;
	}
    </style>';
}
add_action('login_head', 'my_custom_login_logo');?>
<?php 
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
?>
<?php
function validaLetras($texto){
	return preg_replace('/[^a-zA-Z áéíóúÁÉÍÓÚñÑ]/', '', $texto);
}



add_action('wp_ajax_enviarPregunta', 'enviarPregunta');
add_action('wp_ajax_nopriv_enviarPregunta', 'enviarPregunta');
function enviarPregunta(){
	
	$nombre = $_GET['nombre'];
	$edad = $_GET['edad'];
	$email = $_GET['email'];
	$ciudad = $_GET['ciudad'];
	$pregunta = $_GET['pregunta'];
	
	$error = 0;
	if(validaLetras($nombre) != $nombre){
		$error = 1;
	}
	
	if (!preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+\.[A-Za-z]{2,4}$/', $email)) {
		$error = 1;
	} 
	
	if($error == 0){
		$nuevaPregunta = array(
		  'post_title'    => substr($pregunta , 0 , 100 ),
		  'post_content'  => 'El doctor debe ingresar la respuesta acá',
		  'post_status'   => 'draft',
		  'post_type'	  => 'alo-doctor',
		  'post_excerpt'  => $pregunta,
		);
		
		$askId = wp_insert_post( $nuevaPregunta , $cueck );
		
		if($cueck){
			echo '3';
		}else{
			//var_dump($askId);
			echo '4';
			update_post_meta($askId , 'nombre' , $nombre);
			update_post_meta($askId , 'email' , $email);
			update_post_meta($askId , 'edad' , $edad);
			update_post_meta($askId , 'ciudad' , $ciudad);
		}
	}else{
		echo '5';
	}
	die;
}

add_action('wp_ajax_cargarPregunta', 'cargarPregunta');
add_action('wp_ajax_nopriv_cargarPregunta', 'cargarPregunta');
function cargarPregunta(){
	
	$id = $_GET['id'];
	if($id){
		$p = get_post($id);
		//var_dump($p);
		$nombre = get_post_meta($id , 'nombre', true);
		$email = get_post_meta($id , 'email', true);
		$edad = get_post_meta($id , 'edad', true);
		$ciudad = get_post_meta($id , 'ciudad', true);
		
		echo '"'.$p->post_title.'";"'.$p->post_content.'";"'.$nombre.'";"'.$edad;
		
	}
	
	
	die;
}

function limit_preguntas($query) {
	if( $query->is_post_type_archive('alo-doctor')):
		$query->set('posts_per_page', 9);
		return;
	endif;
}
add_action('pre_get_posts','limit_preguntas');

?>
<?php 
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
 
	// Add file extension 'extension' with mime type 'mime/type'
	$existing_mimes['kml'] = 'application/vnd.google-earth.kml+xml';
	$existing_mimes['kmz'] = 'application/x-kmap';
 
	// and return the new full result
	return $existing_mimes;
 
}
?>
<?php 
function SuperAdmin() {
	echo '<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">';
	//echo '<link href="'.get_bloginfo('template_directory').'/admin/bootstrap.css" rel="stylesheet">';
	echo "<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,800,400' rel='stylesheet' type='text/css'>";
	echo '<style type="text/css">
	body{ font-family: Open sans, helvetica neue, helvetica, arial , sans-serif}
	.wp-admin #adminmenu, .wp-admin #adminmenuback, .wp-admin #adminmenuwrap{ background-color:#129dd9 !important}
	#adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu{background-color:#2cb3ed !important}
	.wp-core-ui .button-primary{background-color:#2cb3ed !important}
	</style>';
}
add_action('admin_head', 'SuperAdmin');
?>
<?php 
/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
?>
<?php 
//add_filter( 'jpeg_quality', create_function( '', 'return 75;' ) );
?>
<?php add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );?>