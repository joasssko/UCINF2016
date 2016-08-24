<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php if(is_home()){?>
	<title><?php wp_title();?></title>
<?php }else{?>
	<title><?php wp_title();?></title>
<?php }?>

<meta name="viewport" content="width=device-width, initial-scale=0.75 , minimum-scale=1.0 ,  maximum-scale=1.0">

<link rel="shortcut icon" href="<?php bloginfo('template_directory')?>/favicon.ico?ver=3.8.1">

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css?ver=3.8.1">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>?ver=3.8.1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,700,700i" rel="stylesheet">

<!--Otros -->
<?php call_scripts()?>
<?php wp_head()?>

<!-- scripts -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>

jQuery(window).load(function() {
  //jQuery("#loader-wrapper").fadeOut("slow"); 
});

</script>
</head>

<body <?php body_class('bmh--state-navigation')?>>

<div id="fb-root"></div>

<div class="bmh-navigation-mask"></div>

<?php /* <div id="loader-wrapper">
   <i class="fa fa-circle-o-notch fa-spin"></i>
</div> */?>

<nav class="navbar navbar-default navbar-fixed-top">
    
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo get_bloginfo('url')?>"><img src="<?php echo get_bloginfo('template_directory')?>/images/logo.png" alt=""></a>
          
        </div>
        <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
          
          <div id="mininav">
                <div class="row">
                    <?php wp_nav_menu(array('theme_location'  => 'secondary', 'menu_class' => 'mininav navbar-right' , 'container' => 'none')) ?>
                </div>
          </div>
          
          <?php wp_nav_menu(array('theme_location'  => 'primary', 'menu_class' => 'nav navbar-nav navbar-right' , 'container' => 'none')) ?>
          
          <?php /* <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul> */?>
          
        </div><!--/.nav-collapse -->
      </div>
</nav>