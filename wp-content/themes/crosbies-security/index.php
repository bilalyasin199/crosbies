<?php get_header(); ?>
<!-- =======  Blogs ======= -->
<section class="blog-section">
  <div class="container">
    <h5 class="wel-head">Blogs.</h5>
    <h4>Useful Information</h4>

    <?php
    while(have_posts()){
      the_post(); ?>

      <div class="position-relative mt-5">
        <img class="mt-5 mb-5 virus-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ff5fbd656ddcf4a38ebca17de800a58e.png" alt="">   
      <div class="blog-post blog-christmas-section">   
          <h5>01</h5>
          <div class="blog-christmas ">
          <h4><?php the_title(); ?></h4>
          <div class="who-para" >
          <?php echo wp_trim_words(get_the_content(), 25); ?>
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
        </div>
      </div>
    </div>
    <div>
      <h5 class="author-name">
        <?php the_author_posts_link(); ?> <br>
        <span><?php the_time('F j, Y')?></span>
      </h5>
    </div>
    <?php } 
    echo paginate_links();
    ?>
  </div>
</section>

<?php get_footer(); ?>