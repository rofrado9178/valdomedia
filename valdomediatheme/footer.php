<footer>
      <div class="container">
        <div class="footer-flex">
          <figure
            class="custom-logo"
           
          ><?php the_custom_logo(); ?></figure>

         
            <?php if ( is_active_sidebar( 'footer-logo') ) : ?>
                <div class="footer-logo">
                    <?php dynamic_sidebar( 'footer-logo' ); ?>
                </div>
              <?php endif; ?>

       

          <ul class="footer-link">
            <li>
              <a href="">home</a>
            </li>

            <li>
              <a href="">about</a>
            </li>

            <li>
              <a href="">services</a>
            </li>

            <li>
              <a href="">contact us</a>
            </li>

            <li>
              <a href="">blog</a>
            </li>
          </ul>
        </div>
        <p>© Copyright 2024</p>
      </div>
    </footer>
     <?php wp_footer();?>

      <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
      integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

        <script
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
      integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>


    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>


    <script>
    Fancybox.bind('[data-fancybox="gallery"]', {
    // Other options...
    width: 1000, // Set a specific width
    height: 1000, // Set a specific height
});
    </script>
    <script>

  
  $(".burger-menu").on("click", () => {
  
    $(".header-responsive").show("slow");
    $(".burger-menu").hide("slow");
    $(".hero-textbox").hide();
    $("html, body").css({
    overflow: "hidden",
  });
});

  $(".close").on("click", () => {
    $("header").show("slow");
    $(".header-responsive").hide("slow");
    $(".hero-textbox").show();
    $(".burger-menu").css("display", "block");
    $("html, body").css({
    overflow: "auto",
  });
});
    </script>
  </body>
</html>