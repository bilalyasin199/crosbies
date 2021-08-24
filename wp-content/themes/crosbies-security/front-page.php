<?php get_header(); 
$hero_section = get_field('hero_section');
$welcome_section = get_field('welcome_section');
$welcome_brands_section = get_field('welcome_brands_section');
$about_section = get_field('about_section');
?>

   <!-- HERO SECTION-->
   <section class="hero">
        <div class="container">
          
        <?php foreach ($hero_section as $hero_sect){ ?>
          <div class="row ">
            <div class="col-lg-12 pl-5 ">
              <h1 class="security"><?php echo $hero_sect['heading'] ?></h1>
            </div>
          </div>
          <div class="row hero-txt">
            <div class="col-lg-12 d-flex justify-content-end pr-5">           
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/down-arrow.svg" alt="" >
                <div class="hero-p"><?php echo $hero_sect['sub_heading']?></div>
            </div>
          </div>

        <?php } ?>
        
        </div>
      </section>
      <!-- ======= Welcome section ======= -->
      <section>
      <div class="container"> 
        <div class="row" >
          <h2><?php echo $welcome_section['background_text'] ?></h2>
        </div>   
          <div class="row welcome">
            <div class="col-lg-6 mt-5">
                <h5 class="wel-head"><?php echo $welcome_section['heading'] ?></h5>
                <h4><?php echo $welcome_section['sub_heading'] ?></h4>
            </div>
            <div class="col-lg-6 mt-5">
              <div class="welcome-p mt-5">
              <?php echo $welcome_section['paragraph'] ?>
              </div>
              <a class="animated-arrow" href="#">
                <span class="the-arrow -left">
                  <span class="shaft"></span>
                </span>
                <span class="main">
                  <span class="text">
                  <?php if(!empty($welcome_section['link'])){ 
                   echo ($welcome_section['link']['title']);
                  } ?> 
                  </span>
                  <span class="the-arrow -right">
                    <span class="shaft"></span>
                  </span>
                </span>
              </a>
            </div>
          </div>
          <div class="row d-flex justify-content-center" >
            <p class="sme-txt"><?php echo $welcome_brands_section['heading'] ?></p>
          </div>
          <div class="row company-logos">
            <?php foreach($welcome_brands_section['brand_logos'] as $brands_section) { ?>
              <div class="col">
                <img src="<?php echo $brands_section['logo']['url'] ?>" alt="">
              </div>
            <?php } ?>
           </div>
    </section>
<!-- ======= Services section ======= -->
<section>
  <div class="container-fluid-bg">
    <div class="container service-section"> 
      <div class="d-flex justify-content-center"> 
      <div class="vl">   
      <h3 class="d-flex justify-content-center mr-5 service">Our Services.</h3> 
      </div>
      </div>
    <div class="row">
      <div class="col-lg-6 ">
      <div data-aos="zoom-in-up" data-aos-duration="3000">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ac3ff60be57965e7f37d8def4e06deb4.png" alt="" class="mt-5 service-img">
      </div>
      </div>
      <div class="col-lg-6 d-flex align-items-center">
        <div>
          <h3>Officers & Guards</h3>  
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/shield.svg" alt="" class="service-icon float-left">
          <div data-aos="fade-up"  data-aos-duration="3000">
          <p class="service-para float-right">We are recognised by our clients as a professional security firm who are committed to delivering on our client’s needs
            with integrity.<br><br>
            We are privileged to protect a vast number of clients from small to medium enterprises, right through to some of New 
            Zealand’s most well known brands.
          </p>
          </div>
        </div>
        </div>
      </div>   

    <div class="row mt-5">
      <div class="col-lg-6 d-flex align-items-center">
        <div>
          <h3 class="float-right mr-5 solar-camera">Solar Cameras</h3>  
        <div data-aos="fade-up"  data-aos-duration="3000">
          <p class="service-solar float-left pl-5">We are recognised by our clients as a professional security firm who are committed to delivering on our client’s needs
            with integrity.<br><br>
            We are privileged to protect a vast number of clients from small to medium enterprises, right through to some of New 
            Zealand’s most well known brands.
          </p>
        </div>
          <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/cctv.svg" alt="" class="service-icon float-right mr-5">
        </div>
        </div>
        <div class="col-lg-6">
          <div data-aos="zoom-in-up" data-aos-duration="3000">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/2d8d1d03aa78baa7c9f50b09a7e0653f.png" alt="" class="mt-5 service-img">
          </div>
         </div>
      </div>  


      <?php
        $homepageServices = new WP_Query(array(
          'posts_per_page' => 3,
          'post_type' => 'service'
        ));

        while($homepageServices->have_posts()){
          $homepageServices->the_post();?>
          
      <?php } ?>



      
      <div class="row mt-5">
        <div class="col-lg-6">
          <div data-aos="zoom-in-up" data-aos-duration="3000">
         <img src="<?php echo get_template_directory_uri(); ?>/assets/images/9fec9ff30c7a089f5b349e3dc6995068.png" alt="" class="mt-5 mb-5 service-img">
         </div>
        </div>
        <div class="col-lg-6 d-flex align-items-center">
          <div>
            <h3>Timelapse Camera</h3>  
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/surveillance.svg" alt="" class="service-icon float-left ">
            <div data-aos="fade-up"  data-aos-duration="3000">
            <p class="service-para float-right">We are recognised by our clients as a professional security firm who are committed to delivering on our client’s needs
              with integrity.<br><br>
              We are privileged to protect a vast number of clients from small to medium enterprises, right through to some of New 
              Zealand’s most well known brands.
            </p>
          </div>
          </div>       
          </div>
        </div>  

        
     </div>
    </div>
</section>

<!-- =======  Who We Are ======= -->
<section class="whowe-section">
  <div class="container who-section">
    <h5 class="wel-head"><?php echo $about_section['heading'] ?></h5>
    <h4><?php echo $about_section['sub_heading'] ?></h4>
    <div class="row security-section">
      <div class="col-lg-5 mt-5">
        <div class="who-para">
        <?php echo $about_section['paragraph'] ?>
        </div>
        <div class="mt-5">
          <a class="animated-arrow" href="#">
            <span class="the-arrow -left">
              <span class="shaft"></span>
            </span>
            <span class="main">
              <span class="text">
              <?php if(!empty($welcome_section['link'])){ 
                   echo ($welcome_section['link']['title']);
                  } ?>  
              </span>
              <span class="the-arrow -right">
                <span class="shaft"></span>
              </span>
            </span>
          </a>
        </div>
        </div>
        <div class="col">
          <div class="row">
        <?php foreach ($about_section['section_bullets'] as $section_bullets){ ?>        
              <div class="col-4 mt-5">
                <p class="who-p who-border">
                  <?php echo $section_bullets['bullet'] ?>
                </p>
              </div>
        <?php } ?>       
          </div>
        </div>
    </div>
  </div>
</section>
<!-- =======  Blogs ======= -->
<section class="blog-section front-page">
  <div class="container">
    <h5 class="wel-head">Blogs.</h5>
    <h4>Useful Information</h4>
    <div class="blog-posts-3">
      <?php
      $homepagePosts = new WP_Query(array(
        'posts_per_page' => 2
      ));
      $count = 0;
      while($homepagePosts->have_posts()){
        $homepagePosts->the_post();
        $count++; ?>
      <div class="blog-posts-2">
        <div class="position-relative">
          <img class="mt-5 mb-5 virus-img" src="<?php echo get_template_directory_uri(); ?>/assets/images/ff5fbd656ddcf4a38ebca17de800a58e.png" alt="">   
            <div class="blog-post blog-christmas-section">   
              <h5>0<?php echo $count; ?></h5>
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
            <span><?php the_time('F j, Y');?></span>
          </h5>
        </div>
      </div>
      <?php } wp_reset_postdata(); ?>
    
    </div>
  </div>
</section>
<!-- =======  LETS TALK ======= -->
<section class="lets-talk">
  <div class="container">
      <h5>Have a project to discuss? <span class="pl-5">Lets Talk.</span></h5>
      <div class="text-center">
       <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Path160.png" alt="">
      </div>
  </div>
</section>

  <?php get_footer(); ?>


