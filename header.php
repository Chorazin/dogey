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
	<title>The Mobile Groom Room</title>
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
	<div class=''> <!-- content wrapper for main nav -->
		<nav class='main_nav text-white'>
			<p id='hamburger' class='md:hidden p-8 hamburger_menu'></p>
			<?php
				//set up nav menu, see functions.php for details
				wp_nav_menu(
					array(
						'menu' => 'main_nav_links',
						'container' => '',
						'theme_location' => 'primary_menu',
						'items_wrap' => '<ul id="nav_one" class="font-bold sm:hidden hidden flex p-5 md:flex md:flex-row">%3$s</ul>'
					)
				);
			?>
			<div id='second_nav' class='mobile_res '>
				<!-- hidden menu on large screens to popup once hamburger is clicked -->
				<?php
					//set up nav menu, see functions.php for details
					wp_nav_menu(
						array(
							'menu' => 'main_nav_links',
							'container' => '',
							'theme_location' => 'primary_menu',
							'items_wrap' => '<ul id="mobile_menu" class="font-bold flex flex-col p-5 space-y-5">%3$s</ul>'
						)
					);
				?>
			</div>
		</nav>
	</div>
	<header>
		<div class='hero'>
			<img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/hero_banner_v001.jpg" alt="Beau the dog">
		</div>
	</header>
