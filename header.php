<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' : '; } ?><?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">
			<header class="header clear" role="banner">
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
					</a>
				</div>
				<div class="header_widgets">
					<div class="address">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						<p>Rua Yamato, 405 - Jd. Japão <br>São Paulo, SP 02132-120</p>
					</div>
					<div class="phone">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<p>11 2631.6409 | 11 2631.6727 <br>11 2954.3805 | 11 2967.3477 <br></p>
					</div>
				</div>
			</header>
			<div class="nav_bar clear">
				<a class="open_nav"><i class="fa fa-bars" aria-hidden="true"></i> Menu</a>
				<nav class="nav" role="navigation">
					<?php html5blank_nav(); ?>
				</nav>
			</div>