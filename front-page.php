<?php
  get_header();
 ?>
 <article>
   <!-- cards go in here -->
   <div>
     <img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/sandler_v001.jpg" alt="Adam sandler">
     <div>
       <span class="text-red-600">
         Joe Blogs
       </span>
       <span>
         blah blah blah testimonial
       </span>
     </div>
   </div>
  <?php
    the_content();
  ?>
  <?php
    get_footer();
  ?>
