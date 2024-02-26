<?php get_header();?>


<!-- ------------------- Section HERO ----------------- -->
<section id="hero" class="hero" style="background-image: url(<?php the_field('section_hero_bg_img'); ?>);">
      <div class="container">
        <article class="hero-textbox">
          <h1><?php the_field('section_hero_title'); ?></h1>
          <h2><?php the_field('section_hero_subtitle'); ?></h2>
        </article>
      </div>
</section>
<!-- ------------------- Section HERO  END HERE----------------- -->

<!-- ------------------- Section ABOUT ----------------- -->
  <section id="about" class="about">
      <div class="container">
        <div class="about-flex">
          <figure
            class="about-image"
            style="background-image: url(<?php the_field('section_about_background_image'); ?>)"
          ></figure>
          <article class="about-preview">
            <h3><?php the_field('section_about_title'); ?></h3>
            <p>
             <?php the_field('section_about_description'); ?>
            </p>

            <?php 
            $learnMoreBtn = get_field('section_about_btn');
            $learnMoreUrl = $learnMoreBtn['url'];
            $learnMoreText = $learnMoreBtn['title'];
            $learnMoreTarget = $learnMoreBtn['target'];
            ?>
            <a href="<?php echo $learnMoreUrl ?>" class="btn" target="<?php echo $learnMoreTarget ?>"><?php echo $learnMoreText ?></a>
          </article>
        </div>
      </div>
    </section>

    <!-- ------------------- SECTION ABOUT ENDS HERE ------------------------- -->

<!-- ----------------------------- SECTION SERVICES ------------------------------- -->
<section id="services" class="our-services" style="background: url(<?php the_field('section_services_background_image')?>)rgba(120, 45, 127, 0.7)">
      <div class="container">
        <h2><?php the_field('section_services_title')?></h2>


        <div class="service-card-flex">
    <!-- custom query -->
    <?php  
    $homepageServices = new WP_Query(array(
       
      'posts_per_page' => 3,
      'post_type' => 'service',
      'orderby' => 'DESC' 

    ));

//open the loop
    while($homepageServices->have_posts()){
      $homepageServices->the_post();
    
    ?>



          <article class="service-card">
            <figure
              class="service-card-image"
              style="background-image: url(<?php the_field('section_services_background_image');?>)"
            ></figure>
            <article class="service-card-content">
              <h3><?php the_title();?></h3>
              <p>
              <?php the_field('section_services_short_description');?>
              </p>
            </article>
          </article>

      

          <?php } wp_reset_postdata();?>  
        </div>
      </div>
    </section>

    <section id="blog" class="blog">
      <div class="container">
        <h2><?php the_field('section_blog_title');?></h2>
        <div class="blog-flex">
    <?php  
    $homepageBlog = new WP_Query(array(
       
      'posts_per_page' => 3,
      'post_type' => 'post',
      'orderby' => 'DESC' 

    ));

//open the loop
    while($homepageBlog->have_posts()){
      $homepageBlog->the_post();
    
    ?>

          <article class="blog-card">
            <div class="title-box">
            <?php the_category();?>
              <h3><?php the_title();?></h3>
              <p><?php the_time('d M Y');?></p>
              <p>By <?php the_author();?></p>
            </div>
            <p>
            <?php echo wp_trim_words(get_the_excerpt(),20);?>
            </p>
            <a href="<?php the_permalink(); ?>" class="btn">Full Article</a>
          </article>

        <?php } wp_reset_postdata();?>

        </div>
      </div>
    </section>

    <section id="contact" class="contact-us">
      
      <div class="container">
        <h2><?php the_field('section_our_work_title');?></h2>
        <div class="contact-us-flex">
          <div class="left">
              <a href="<?php the_field('section_our_work_image_big');?>" data-fancybox="gallery" data-caption="store website">
              <figure
              class="img-fancy"
              style="background-image: url(<?php the_field('section_our_work_image_big');?>)"
            ></figure>
            
            </a>
            <p class="show-fancy">SHOW MORE</p>
          </div>

          <div class="right">

            <div class="contact-form">
              <h3><?php the_field('section_form_title');?></h3>
              <?php 
							
							echo apply_shortcodes('[contact-form-7 id="0a406fd" title="Contact form 1"]');
							
							?>
            </div>
          </div>
         


          <div class="work-slide">
            <!-- <a href="<?php the_field('section_our_work_image_big');?>" data-fancybox="gallery" data-caption="store website">
              <figure
              class=""
              style="background-image: url(<?php the_field('section_our_work_image_big');?>)"
            ></figure>
            </a> -->
            <a href="<?php the_field('section_our_work_image_small_1');?>" data-fancybox="gallery" data-caption="photography website">
                <figure
                class=""
                style="
                  background-image: url(<?php the_field('section_our_work_image_small_1');?>);
                "
              ></figure>
            </a>
            <a href="<?php the_field('section_our_work_image_small_2');?>" data-fancybox="gallery" data-caption="business-card logo and promotional pamflet">
                 <figure
                class=""
                style="
                  background-image: url(<?php the_field('section_our_work_image_small_2');?>);
                "
              ></figure>
            </a>
            <a href="<?php the_field('section_our_work_image_small_3');?>" data-fancybox="gallery" data-caption="figma prototype">
                  <figure
                class=""
                style="background-image: url(<?php the_field('section_our_work_image_small_3');?>)"
              ></figure>
            </a>
          </div>
        </div>
      </div>

    </section>
 

<?php get_footer();?>