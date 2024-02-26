<?php 
//Template Name: Basic Page Template
?>

<?php get_header()?>

<?php
if(have_posts()) {
while (have_posts()) : the_post();


?>
 <section class="about-hero" style="background-image: url(<?php the_field('section_about_hero_background_image');?>)">
      <div class="container"></div>
    </section>

    <section class="about-our-company">
      <div class="container">
        <h2><?php the_title();?></h2>
         <?php the_content();?>
      </div>
    </section>

<?php 
  endwhile;

}?>

<?php get_footer()?>