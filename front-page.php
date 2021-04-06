<?php
  get_header();
 ?>
 <article class='text-center'>
   <!-- cards go in here -->

   <div class='grid lg:grid-cols-3 pt-5 pb-5 posts text-white'>
     <div>
        POST ONE
     </div>
     <div>
        POST TWO
     </div>
     <div>
        POST THREE
     </div>
   </div>


   <div class='grid lg:grid-cols-3 pt-5 pb-5 posts text-white'>
     <div>
        TESTIMONIAL ONE
     </div>
     <div>
        TESTIMONIAL TWO
     </div>
     <div>
        TESTIMONIAL THREE
     </div>
   </div>

  <?php
    the_content();
  ?>
</article>
  <?php
    get_footer();
  ?>
