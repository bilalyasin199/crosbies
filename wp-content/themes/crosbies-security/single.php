<?php get_header(); ?>

<div class="container">
<?php

while(have_posts()){
  the_post(); ?>

    <div class="blog-single pt-5 pb-5">
        <h4><?php the_title(); ?></h4>
        <img class="mt-5 mb-5 virus-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ff5fbd656ddcf4a38ebca17de800a58e.png" alt="">
        <h5>
        <?php  the_author_posts_link(); ?> <br>
        <span><?php the_time('F j, Y')?></span>
        </h5>
        <div class="who-para" >
         <?php the_content(); ?>
        </div>
    </div>
    <?php } ?>
</div>

<?php get_footer(); ?>