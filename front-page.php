<?php
  get_header();
 ?>
 <article class='text-center'>
   <!---------------------------------------------------------------------------------------------------->
   <!-- THE LOOP! -->
   <!-- fetch the latest 3 main articles for display on the front page -->
   <!-- tailwind cards go in here for each post -->
   <div class='grid lg:grid-cols-3 pt-5 pb-5 ml-5 mr-5 posts text-white'>
     <!-- fetch all sticky posts first -->
     <?php /* $my_query = new WP_Query(array('post_type' => 'post','orderby' => 'date' ,'order' => 'DESC','ignore_sticky_posts' => false 'posts_per_page' => 3)); */ ?>
     <?php $my_query = new WP_Query(array('post__in'=>get_option('sticky_posts')));
     while ($my_query->have_posts()) : $my_query->the_post(); ?>
     <div class='rounded-md content-center shadow-md md:mb-8' id='animated_card'>
       <div class='inner_card text-left ml-4 mr-4'>
        <span class='font-bold text-2xl'><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a><img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/book_v002.png" alt="Open book Icon" id='b_icon'></span>
        <span class='text-xs block'><?php the_time('F jS, Y'); ?> <b>sticky</b></span>
     </div>
     <p><?php the_excerpt(); ?></p>
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
  <div>
    <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
    <h4><?php the_time('F jS, Y'); ?> <b></b><h4>
    <p><?php the_excerpt(); ?></p>
  </div>
  <?php endwhile; ?>
  <!---------------------------------------------------------------------------------------------------->

 </div>



   <div class='grid lg:grid-cols-3 pt-5 pb-5 posts text-white'>
     <div>
        <div class="fb-post" data-href="https://www.facebook.com/Cameronmassey/posts/10159444270541457" data-width="500" data-show-text="true"><blockquote cite="https://www.facebook.com/Cameronmassey/posts/10159444270541457" class="fb-xfbml-parse-ignore"><p>Absolutely amazing work! Our first cut for our girls Pippa &amp; Bella and they are beautiful! Look forward to their next appointment</p>Posted by <a href="#" role="button">Cameron Massey</a> on&nbsp;<a href="https://www.facebook.com/Cameronmassey/posts/10159444270541457">Friday, April 9, 2021</a></blockquote></div>
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
