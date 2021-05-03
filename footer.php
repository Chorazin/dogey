<?php
/**
 * Footer template
 *
 * @package Dogey
 */
?>


<footer class='footer_background_image text-white relative'>
	<div class='grid lg:grid-cols-4 gap-x-8 pt-20 pl-20'>
		<div>
			<h1 class='text-xl font-bold mb-5'>STAY CONNECTED</h1>
			<p>Join us on social media for sweet deals and promotions!</p>
			<div class='mt-5 flex flex-row justify-between'>
				<div><a href="https://www.facebook.com/themobilegroomroomnsw" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/fb_v001.png" alt="Facebook Icon"></a></div>
				<div><img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/insta_v001.png" alt="Instagram Icon"></div>
				<div><img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/tt_v001.png" alt="TikTok Icon"></div>
			</div>
		</div>

		<div>
			<h1 class='text-xl font-bold mb-5'>COMMITTED TO EXCELLENCE</h1>
			<p>It's not just about getting the service done, it's about the attention to detail and consistency of the Mobile Groom Room. Trust us with your fur babies, they deserve the best!</p>
		</div>

		<div>
			<h1 class='text-xl font-bold mb-5'>NAVIGATE</h1>
			<?php
			wp_nav_menu(
				array(
					'menu' => 'main_nav_links',
					'container' => '',
					'theme_location' => 'primary_menu',
					'items_wrap' => '<ul class="font-bold">%3$s</ul>'
				)
			); ?>
		</div>
		<div>
			<h1 class='text-xl font-bold mb-5'>LOCATION</h1>
			<div>
				PH: 0450 676 258
			</div>
			<div>
				EMAIL: themobilegroomroomnsw@gmail.com
			</div>
			<div>
				Hamilton NSW - Newcastle
			</div>
		</div>
	</div>
	<div class="container inset_center">
		<hr />
		<div>COPYRIGHT LALALALA</div>
		<hr/>
	</div>
</footer>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_url'); ?>/assets/src/js/navbar.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/src/js/post_animation.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/src/js/intersect.js"></script>
</body>
</html>
