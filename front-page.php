<?php
  get_header();
 ?>
 <div class='hero'>
    <img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/hero_banner_v001.jpg" alt="Beau the dog">
  </div>
 <article class='container mx-auto'>
   <!---------------------------------------------------------------------------------------------------->
   <!-- THE LOOP! -->
   <!-- fetch the latest 3 main articles for display on the front page -->
   <!-- tailwind cards go in here for each post -->
   <div class='grid lg:grid-cols-3 gap-x-8 pt-5 pb-5 ml-5 mr-5 posts text-white'>
     <!-- fetch all sticky posts first -->
     <?php
      if(count(get_option('sticky_posts')) > 0){
        $my_query = new WP_Query(array('post__in'=>get_option('sticky_posts')));
        while ($my_query->have_posts()) : $my_query->the_post(); { ?>

      <div class='rounded-md content-center shadow-lg mb-8 card pr-5 pl-5'>
        <div class='inner_card text-left flex justify-between'>
          <span class='font-bold text-2xl'><?php the_title(); ?></span>
          <span><img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/book_v002.png" alt="Open book Icon" class='b_icon mt-3'></span>
        </div>
        <span class='text-xs block text-left'><?php the_time('F jS, Y'); ?> <b>sticky</b></span>
        <hr />
        <div class='mt-10 mb-10 pb-10'><?php the_excerpt(); ?></div>
        <div class='post_paws'>
          <span><img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/paw_v001.png" alt="tiny dogs paw" class='scale_rotate_paw'></span>
        </div>
      </div>
      <script type="text/javascript">
        count_j++
        add_click('<?php echo get_permalink(); ?>', count_j)
       </script>
    <?php } endwhile;
  }?>

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
  <?php if($final_count > 0) {
  $my_query_2 = new WP_Query(array( 'post__not_in' => get_option( 'sticky_posts' ), 'posts_per_page'=> $final_count));
  while ($my_query_2->have_posts()) : $my_query_2->the_post(); ?>

  <div class='rounded-md content-center shadow-lg mb-8 card pr-5 pl-5'>
    <div class='inner_card text-left flex justify-between'>
    <span class='font-bold text-2xl'><?php the_title(); ?></span>
    <span><img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/book_v002.png" alt="Open book Icon" class='b_icon mt-3'></span>
  </div>
    <span class='text-xs block text-left '><?php the_time('F jS, Y'); ?></span>
    <hr />
    <div class='mt-10 mb-10 pb-10'><?php the_excerpt(); ?></div>
    <div class='post_paws'>
      <span><img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/paw_v001.png" alt="tiny dogs paw" class='scale_rotate_paw'></span>
    </div>
  </div>
  <script type="text/javascript">
    count_j++
    add_click('<?php echo get_permalink(); ?>', count_j)
   </script>
  <?php endwhile;
}?>
  <!---------------------------------------------------------------------------------------------------->
 </div>

  <hr />
  <br />
  <div class='grid lg:grid-cols-3 text-white mt-20 mb-20 pt-10 pb-10'>
    <div>
      <span class="obs relative flex justify-around mgr">THE MOBILE</span>
      <span><img src="<?php bloginfo('template_url'); ?>/assets/src/imgs/paw_v002.png" alt="Mobile Groom Room logo" class='mx-auto'></span>
      <span class="obs relative flex justify-around mgr">GROOM ROOM</span>
    </div>
    <div class='lg:col-start-2 lg:col-span-2 text-5xl font_adjust'>
      <span class='boutique assoc_1 obs hidden xl:block'>A BOUTIQUE</span> <span class='boutique assoc_2 obs hidden xl:block'>MOBILE</span><span class='boutique assoc_3 obs hidden xl:block'>GROOMING SERVICE</span>
    </div>
    <div>
    </div>
  </div>

 </article>
  <!-------------------------------------------------------------------------------------------------->
  <!-- TESTIMONIALS -->
   <div class='grid lg:grid-cols-3 pt-40 post_testimonials mt-10 pb-40'>
     <div class='circle_t obs mt-5 mb-10'>
       <blockquote class='circular_text'>
         <p class='obs inner_circle'>"Absolutely amazing work! Our first cut for our girls Pippa & Bella and they are beautiful! Look forward to their next appointment" <br/><br/>- Cameron Massey</p>
       </blockquote>
     </div>
     <div class='circle_t obs mt-5 mb-10'>
      <blockquote class='circular_text'>
        <p class="obs inner_circle">"Great service, friendly, quick and great with nail cutting ( always a traumatic experience with my dogs ) highly recommend!" <br/><br/>- Danielle Patricia</p>
      </blockquote>
     </div>
     <div class='circle_t obs mt-5 mb-10'>
       <blockquote class='circular_text'>
         <p class="obs inner_circle">"Emma is so friendly and made the experience for our dog Tupac very easy. We will definately be using this service Again! 5 Stars" <br/><br/>- Rachel Hain</p>
       </blockquote>
     </div>
   </div>

  <?php
    get_footer();
  ?>
