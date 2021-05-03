<?php
  get_header();
 ?>
 <article class='single_page container mx-auto mt-10'>
  <div class=''>
    <img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/page_header_v001.jpg" alt="" class='mx-auto'>
    <h2 class='page_title text-4xl'><?php wp_title(); ?></h2><br/><br/>
    <div></div>
    <!---------------------------------------------------------------------------------------------------->
  	<?php
      the_content();
    ?>
    <!---------------------------------------------------------------------------------------------------->
  </div>

</article>
<?php
  get_footer();
 ?>
