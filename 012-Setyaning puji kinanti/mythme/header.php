<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<title><?php wp_title('|', true, 'right'); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="<?php
bloginfo('name'); ?>">
</header>
<nav>
<?php wp_nav_menu(array(
'theme_location' => 'primary',
'container' => false,
'menu_class' => 'nav',
)); ?>
</nav>