<?php if ( function_exists('add_theme_support') ) {
add_theme_support('post-thumbnails');
add_image_size('tabsizeTall', 1280, 680, true );
add_image_size('biggerHead', 1440, 400, true );
add_image_size('newsBig', 640, 464, true );
add_image_size('newsSmall', 610, 441, true );
add_image_size('badgeAcreditacion' , 190, 116 , true );
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
	register_nav_menu( 'side-menu', 'Menú lateral');
	register_nav_menu( 'top-menu', 'Menú Superior');
	register_nav_menu( 'footer', 'Menú Footer');
//	register_nav_menu( 'third', 'Menú interiores');
}
add_action( 'init', 'register_my_menu' );
?>
<?php 
function call_scripts() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://code.jquery.com/jquery-1.10.0.min.js');
	wp_register_script('foundation', get_template_directory_uri() . '/js/foundation.min.js');
    wp_register_script('core', get_template_directory_uri() . '/js/core.js');

    wp_enqueue_script('jquery' , '' , '' , '' , true);
	wp_enqueue_script('foundation', '' , '' , '' , true);
    wp_enqueue_script('core', '' , '' , '' , true);
}    
 
add_action('wp_enqueue_scripts', 'call_scripts');
?>
<?php

//Post type register

add_action('init', 'facultades_register');
function facultades_register() {
    $args = array(
        'label' => 'Facultades',
        'singular_label' => 'Facultad',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => true,
        'rewrite' => array( 'slug' => 'facultades'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('facultades', $args);
    flush_rewrite_rules();
}

add_action('init', 'carreras_register');
function carreras_register() {
    $args = array(
        'label' => 'Carreras',
        'singular_label' => 'Carrera',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => true,
        'rewrite' => array( 'slug' => 'facultades/%facultad%' , 'with_front' => false),
		//'rewrite' => false,
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('carreras', $args);
    flush_rewrite_rules();
}


register_taxonomy("facultad", array('carreras','post' , 'docentes' , 'testimonios'), array("hierarchical" => true, "label" => "Facultades", "singular_label" => "Facultad", 'rewrite' => true ));

add_action('init', 'docentes_register');
function docentes_register() {
    $args = array(
        'label' => 'Docentes',
        'singular_label' => 'Docente',
        'public' => true,
		'menu_position' => 5, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => true,
        'rewrite' => array( 'slug' => 'docentes'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('docentes', $args);
    flush_rewrite_rules();
}

add_action('init', 'testimonios_register');
function testimonios_register() {
    $args = array(
        'label' => 'Testimonios',
        'singular_label' => 'Testimonio',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'testimonios'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('testimonios', $args);
    flush_rewrite_rules();
}

/* function wpse_5308_post_type_link( $link, $post ) {
    if ( $post->post_type === 'carreras' ) {
        if ( $terms = get_the_terms( $post->ID, 'facultad' ) )
            $link = str_replace( '%facultad%', current( $terms )->slug, $link );
    }

    return $link;
}

add_filter( 'post_type_link', 'wpse_5308_post_type_link', 10, 2 ); */

function filter_post_type_link($link, $post)
{
    switch($post->post_type){
        case 'carreras':
            if ($cats = get_the_terms($post->ID, 'facultad'))
            $link = str_replace('%facultad%', array_pop($cats)->slug, $link);
            break;
    }
    return $link;
}

add_filter('post_type_link', 'filter_post_type_link', 10, 2);


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