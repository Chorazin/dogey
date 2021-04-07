<?php
  get_header();
 ?>
 <article class='text-center'>
   <!---------------------------------------------------------------------------------------------------->
   <!-- THE LOOP! -->
   <!-- fetch the latest 3 main articles for display on the front page -->
   <!-- tailwind cards go in here for eeach post -->
   <div class='grid lg:grid-cols-3 pt-5 pb-5 posts text-white'>
     <!-- fetch all sticky posts first -->
     <?php /* $my_query = new WP_Query(array('post_type' => 'post','orderby' => 'date' ,'order' => 'DESC','ignore_sticky_posts' => false 'posts_per_page' => 3)); */ ?>
     <?php $my_query = new WP_Query(array('post__in'=>get_option('sticky_posts')));
     while ($my_query->have_posts()) : $my_query->the_post(); ?>

     <div>
        	<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
          <h4><?php the_time('F jS, Y'); ?> <b>sticky</b><h4>
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
  <?php $my_query_2 = new WP_Query(array( 'post__not_in' => get_option( 'sticky_posts' ), 'posts_per_page'=> $final_count)  );
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
        TESTIMONIAL ONE
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
