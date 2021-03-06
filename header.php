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
	<title>The Mobile Groom Room - Dog Grooming Service</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="A premium mobile dog grooming service for Newcastle and the Central Coast NSW. Contact us today for dog grooming services in the Hunter Valley">
	<meta name=”robots” content=”index, follow”>

	<!-- cutom styles directory -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="screen" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="<?php bloginfo('template_url'); ?>/assets/src/js/get_permalink.js"></script>

	<?php wp_head(); ?>
	<script type="text/javascript">
		const template_url = '<?= get_bloginfo("template_url"); ?>';
		let count_j = 0;
	</script>
</head>
<body id='my-scrollbar'>

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
			<div id='second_nav' class='mobile_res text-3xl'>
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

	</header>
