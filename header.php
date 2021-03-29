<?php
/**
 * Header template.
 *
 * @package Dogey
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<title>Dogey's</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- cutom styles directory -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
	<?php wp_head(); ?>
</head>
<body>

<?php
//setup to execute functions on body opening tag
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>
<div> <!-- content wrapper for main nav -->
	<nav class='main_nav bg-black bg-opacity-80 text-white'>
		<?php
			//set up nav menu, see functions.php for details
			wp_nav_menu(
				array(
					'menu' => 'main_nav_links',
					'container' => '',
					'theme_location' => 'primary_menu',
					'items_wrap' => '<ul id="" class="font-bold flex items-stretch p-4">%3$s</ul>'
				)
			);
		?>
	</nav>
</div>
	<header>
		<div class='hero'>

		</div>
		Header content here
	</header>
