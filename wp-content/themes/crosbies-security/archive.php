<?php get_header(); ?>

<!-- =======  Blogs ======= -->
<section class="blog-section">
  <div class="container">

  <?php

    while(have_posts()){
      the_post(); ?>
    <h5 class="archive-author pt-5"><?php the_author_posts_link(); ?><br>
      <span><?php the_time('F j, Y')?></span>
    </h5>

    <div class="archive-post pt-5">
        <h4><?php the_title(); ?></h4>
        <img class="mt-5 mb-5 virus-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ff5fbd656ddcf4a38ebca17de800a58e.png" alt="">
        <div class="who-para" >
        <?php the_excerpt(); ?>
        </div>
    </div>  
      
  <div class="readmore-section">
    <a class="animated-arrow" href="<?php the_permalink(); ?>">
      <span class="the-arrow -left">
      <span class="shaft"></span>
      </span>
      <span class="main">
      <span class="text">
        READ MORE 
      </span>
        <span class="the-arrow -right">
        <span class="shaft"></span>
      </span>
        </span>
      </a>
  </div>
  <hr>
  <?php } ?>
  
  </div>
</section>


<?php get_footer(); ?>