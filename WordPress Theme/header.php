<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title><?php bloginfo( 'name' ); wp_title( '|' ); ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	
	<link rel="shortcut icon" href="<?php bloginfo( 'template_directory' ); ?>/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo( 'template_directory' ); ?>/apple-touch-icon.png">
	
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
