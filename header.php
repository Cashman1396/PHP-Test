<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



<div id="site-header">
   
	<h1><a href="<?php echo get_site_url(); ?>"><?php bloginfo('title') ?></a></h1>
    
    
</div>

<div id='site-container'>
	<div id='site-content'>

    <?php get_sidebar(); ?>
 