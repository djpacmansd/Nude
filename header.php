<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
  	<meta charset="utf-8">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  	<div id="main-wrapper"><!-- Ends in footer.php -->
  	
		<nav class="navbar navbar-inverse navbar-bank">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
				</div>
				<?php $defaults = array(
					'theme_location'  => 'top-menu',
					'container'       => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id'    => 'navbar',
					'menu_class'      => 'nav navbar-nav navbar-right'
				);
				wp_nav_menu( $defaults ); ?>
			</div>
		</nav>