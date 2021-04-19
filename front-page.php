<?php
  get_header();
 ?>
 <article class='text-center'>
   <!---------------------------------------------------------------------------------------------------->
   <!-- THE LOOP! -->
   <!-- fetch the latest 3 main articles for display on the front page -->
   <!-- tailwind cards go in here for each post -->
   <div class='grid lg:grid-cols-3 gap-x-8 pt-5 pb-5 ml-5 mr-5 posts text-white'>
     <!-- fetch all sticky posts first -->
     <?php $my_query = new WP_Query(array('post__in'=>get_option('sticky_posts')));
     while ($my_query->have_posts()) : $my_query->the_post(); ?>
     <div class='rounded-md content-center shadow-lg mb-8 card pr-5 pl-5' id='test'>
       <div class='inner_card text-left flex justify-between'>
        <span class='font-bold text-2xl'><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
        <span><a href="<?php echo get_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/book_v002.png" alt="Open book Icon" class='b_icon mt-3'></a></span>
     </div>
     <span class='text-xs block text-left '><?php the_time('F jS, Y'); ?> <b>sticky</b></span>
     <hr />
     <p class='mt-10'><a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a></p>
     </div>
   <?php endwhile; ?>
   <!-- setup a counter for number of posts to be displayed minus sticky posts currently displayed -->
   <?php
   $count = count(get_option('sticky_posts'));
   $final_count = 3 - $count;
   if($final_count < 1)
   {
     $final_count = 0;
   }
   ?>
  <!---------------------------------------------------------------------------------------------------->
  <!-- now fetch me all the posts excluding sticky posts which have already been displayed -->
  <!---------------------------------------------------------------------------------------------------->
  <!-- THE LOOP! -->
  <?php $my_query_2 = new WP_Query(array( 'post__not_in' => get_option( 'sticky_posts' ), 'posts_per_page'=> $final_count));
  while ($my_query_2->have_posts()) : $my_query_2->the_post(); ?>
  <div class='rounded-md content-center shadow-lg mb-8 card pr-5 pl-5'>
    <div class='inner_card text-left flex justify-between'>
    <span class='font-bold text-2xl'><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></span>
    <span><a href="<?php echo get_permalink(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/book_v002.png" alt="Open book Icon" class='b_icon mt-3'></a></span>
  </div>
    <span class='text-xs block text-left '><?php the_time('F jS, Y'); ?></span>
    <hr />
    <p class='mt-10'><a href="<?php echo get_permalink(); ?>"><?php the_excerpt(); ?></a></p>
  </div>
  <?php endwhile; ?>
  <!---------------------------------------------------------------------------------------------------->
 </div>
  <!--Spacer Image -->

   <div class="grid grid-cols-1">
     <div class="spacer_card flex justify-center">
       <div class="paw text-white">
         <div class="circle"></div>
         <img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/paw_v001.png" alt="animated dogs paw">
         <div class="info">
           <h1>WHAT WE OFFER</h1>
           <h3>A boutique mobile grooming service</h3>
           <button>option 1</button>
           <button>option 1</button>
           <button>option 1</button>
           <button>option 1</button>
         </div>
       </div>
     </div>
   </div>

   <div class='grid lg:grid-cols-3 pt-5 pb-5 posts text-white'>
     <div>
      Absolutely amazing work! Our first cut for our girls Pippa & Bella and they are beautiful! Look forward to their next appointment - Cameron Massey
     </div>
     <div>
        TESTIMONIAL TWO
     </div>
     <div>
        TESTIMONIAL THREE
     </div>
   </div>
</article>
  <?php
    get_footer();
  ?>
