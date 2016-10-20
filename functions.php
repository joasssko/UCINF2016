<?php if ( function_exists('add_theme_support') ) {
add_theme_support('post-thumbnails');
add_image_size('tabsizeTall', 1280, 680, true );
add_image_size('tabsizeHalf', 1280, 450, true );
add_image_size('biggerHead', 1440, 400, true );
add_image_size('newsBig', 640, 464, true );
add_image_size('newsSmall', 610, 441, true );
add_image_size('badgeAcreditacion' , 242, 149 , true );
add_image_size('individual' , 347, 365 , true );
add_image_size('admissionbar' , 1920, 300 , array( 'center', 'top' ) );
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

//Register Sidebars

register_sidebar( array(
        'name' => 'Menu Footer 1',
        'id' => 'footer-1',
        'description' => 'Footer menú columna 1',
        'before_widget' => '<div class="small-12 show-for-large show-for-medium  medium-3  large-3  columns  text-center  medium-text-left  footer-block"><ul id="%1$s" class="widget menu  vertical  footer-block__menu %2$s">',
		'after_widget'  => '</ul></div>',
		'before_title'  => '<li class="menu-text  footer-block__menu-title">',
		'after_title'   => '</li>',
	)
);

register_sidebar( array(
        'name' => 'Menu Footer 2',
        'id' => 'footer-2',
        'description' => 'Footer menú columna 2',
        'before_widget' => '<div class="small-12 show-for-large show-for-medium  medium-3  large-3  columns  text-center  medium-text-left  footer-block"><ul id="%1$s" class="widget menu  vertical  footer-block__menu %2$s">',
		'after_widget'  => '</ul></div>',
		'before_title'  => '<li class="menu-text  footer-block__menu-title">',
		'after_title'   => '</li>',
	)
);

register_sidebar( array(
        'name' => 'Menu Footer 3',
        'id' => 'footer-3',
        'description' => 'Footer menú columna 3',
        'before_widget' => '<div class="small-12 show-for-large show-for-medium  medium-3  large-3  columns  text-center  medium-text-left  footer-block"><ul id="%1$s" class="widget menu  vertical  footer-block__menu %2$s">',
		'after_widget'  => '</ul></div>',
		'before_title'  => '<li class="menu-text  footer-block__menu-title">',
		'after_title'   => '</li>',
	)
);

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
	register_nav_menu( 'mobile', 'Menú mobile');
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


register_taxonomy("facultad", array('carreras','post' , 'testimonios'), array("hierarchical" => true, "label" => "Facultades", "singular_label" => "Facultad", 'rewrite' => true ));

register_taxonomy("nivel", array('carreras'), array("hierarchical" => true, "label" => "Nivel del programa", "singular_label" => "Nivel", 'rewrite' => true ));

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

add_action('init', 'features_register');
function features_register() {
    $args = array(
        'label' => 'Módulos',
        'singular_label' => 'Modulo',
		'description' => 'Corresponde a cada uno de los elementos específicos de cada facultad, ejemplo Cie',
        'public' => true,
		'menu_position' => 10, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => true,
        'rewrite' => array( 'slug' => 'modulos-de-facultad'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('features', $args);
    flush_rewrite_rules();
}


add_action('init', 'slider_register');
function slider_register() {
    $args = array(
        'label' => 'Slider',
        'singular_label' => 'Slide',
		'description' => 'Rotativo de imágenes que se incluye en la cabecera del home',
        'public' => true,
		'menu_position' => 20, 
        '_builtin' => false,
        'capability_type' => 'post',
		'has_archive' => false,
        'hierarchical' => false,
        'rewrite' => array( 'slug' => 'slider'),
        'supports' => array('title', 'editor' , 'excerpt' , 'thumbnail' )
    );
    register_post_type('slider', $args);
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
function get_ID_by_slug($post_slug) {
	
   if ( $post = get_page_by_path( $post_slug, OBJECT, 'facultades' ) ){
	    $id = $post->ID;
   }else{
		$id = 0;
   }
	
	return $id ;
	
}
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


add_action('wp_ajax_llamaDocentes', 'llamaDocentes');
add_action('wp_ajax_nopriv_llamaDocentes', 'llamaDocentes');
function llamaDocentes(){
	
	$facultad = $_GET['facultad'];
	$facultadID = $_GET['facultadID'];
	
	$docentes = get_field('docentes' , $facultadID);
	
	$docentes = get_posts(array('post_type' => 'docentes' , 'post__in' => $docentes , 'numberposts' => -1));
	?>
	<?php foreach($docentes as $docente):?>
	
	<div class="small-12  medium-6  large-6  columns  person-block">
		<div class="row">
			<div class="small-3  medium-5  large-4  columns person-block__heading">
				<?php if(has_post_thumbnail($docente->ID)){?>
				<?php echo get_the_post_thumbnail($docente->ID , 'thumbnail' , array('class' => 'person-block__heading-image' , 'alt' => $docente->post_title))?>
				<?php }else{?>
					<img src="<?php echo get_bloginfo('url')?>/wp-content/uploads/2016/08/avatar-460x460.jpg" class="person-block__heading-image" alt="<?php $docente->post_title?>">
				<?php }?>
			</div>
			

			<div class="small-9  medium-7  large-8  columns  person-block__info">
				<h1 class="person-block__info-name"><?php echo $docente->post_title ?></h1>
				<p class="person-block__info-text"><?php echo get_field('titulo' , $docente->ID)?> - <?php echo get_field('estudios' , $docente->ID)?></p>
				<?php if(get_field('email' , $docente->ID)){?>
				<a href="<?php echo 'mailto:'.get_field('email' , $docente->ID)?>" class="person-block__info-email" title="<?php echo $docente->post_title ?>"><i class="fa fa-envelope-o fa-fw"></i> <?php echo get_field('email' , $docente->ID)?></a>
				<?php }?>
			</div>
			
		</div>
		
	</div>
	
	
	<?php endforeach?>
	<?php 
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
class F6_TOPBAR_MENU_WALKER extends Walker_Nav_Menu
{   
    /*
     * Add vertical menu class and submenu data attribute to sub menus
     */
     
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
    }
}

//Optional fallback
function f6_topbar_menu_fallback($args)
{
    /*
     * Instantiate new Page Walker class instead of applying a filter to the
     * "wp_page_menu" function in the event there are multiple active menus in theme.
     */
     
    $walker_page = new Walker_Page();
    $fallback = $walker_page->walk(get_pages(), 0);
    $fallback = str_replace("<ul class='children'>", '<ul class="children submenu menu vertical" data-submenu>', $fallback);
    
    echo '<ul class="dropdown menu data-dropdown-menu">'.$fallback.'</ul>';
}

class F6_DRILL_MENU_WALKER extends Walker_Nav_Menu
{
    /*
     * Add vertical menu class
     */
     
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<ul class=\"vertical menu\" >\n";
    }
}
 
function f6_drill_menu_fallback($args)
{
    /*
     * Instantiate new Page Walker class instead of applying a filter to the
     * "wp_page_menu" function in the event there are multiple active menus in theme.
     */
     
    $walker_page = new Walker_Page();
    $fallback = $walker_page->walk(get_pages(), 0);
    $fallback = str_replace("children", "children vertical menu", $fallback);
    echo '<ul class="vertical menu" data-drilldown="">'.$fallback.'</ul>';
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