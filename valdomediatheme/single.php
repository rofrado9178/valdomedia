<?php get_header()?>

<?php 

if(have_posts()){

while(have_posts()) : the_post();

?>
<section class="blog-article">
        <div class="container">
          <figure style="background-image: url(<?php the_field('img');?>)"></figure>
          <article class="article-flex">
            <article class="info">
              <label>Date:</label>
              <p><?php the_time('d M Y');?></p>
              <label>Author:</label>
              <p><?php the_author()?></p>
            </article>

            <div class="main-article">
              <h2>
              <?php the_title();?>
              </h2>
              <p><?php the_content()?></p>
              
              
            </div>
          </article>
        </div>
      </section>



<?php 
  endwhile;

}?>
<?php get_footer()?>