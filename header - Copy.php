<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<title><?php wp_title(''); ?><?php if(wp_title(' ', false)) { echo ' | '; } ?><?php bloginfo('name'); ?> -  - <?php echo get_template_id() ?></title>
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/grid.css" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/webfonts/ss-social.css">
<meta name="viewport" content="width=device-width, initial-scale = 1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<header>

<!-- START OF FIRST NAVIGATION -->
<div class="container clearfix">
<div class="grid_12 omega" style="background: #4D4D4E;">
<hgroup>
<div class="grid_4 omega logo_container">
<img class="logo" src="<?php bloginfo( 'template_directory' ); ?>/img/nac-logo.png">
</div>
<div class="nav_top grid_8">
<nav>
<ul>
<?php wp_nav_menu( array('menu' => 'Main Navigation Menu' )); ?>
</ul>
</nav>
</div>


</hgroup>
</div>
</div>

<!-- START OF SECOND NAVIGATION -->
<div class="grid_12 omega nav_sub">
<div class="container clearfix" style="background: #fff;">
<nav>
<ul>
<?php wp_nav_menu( array('menu' => 'Sub Menu' )); ?>
</ul>
</nav>
</div>
</div>
</header>