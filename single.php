<?php
  get_header();
 ?>
 <article>
  <div>
    <h2 class="red_heading">
      THIS IS A WEB PAGE
    </h2>
  </div>
  <!---------------------------------------------------------------------------------------------------->
	<!-- THE LOOP! -->
  <?php
    while(have_posts()) {
      the_post();
      //get_template_part('template_parts/content', 'article');
    };
  ?>
  <!-- END LOOP FOR MAIN POSTS! -->
  <!---------------------------------------------------------------------------------------------------->
</article>
<?php
  get_footer();
 ?>
