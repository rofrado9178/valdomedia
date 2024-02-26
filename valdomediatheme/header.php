<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Aref+Ruqaa:wght@700&family=Inter:wght@300;500;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    	<link
	  rel="stylesheet"
	  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
	/>
    <link rel="stylesheet" href="style.css" />

    <title>Valdo Media</title>

     <?php wp_head();?>

     <?php 
     
     if(is_single()){  ?>
      <style>
        header{
          background: linear-gradient(#532c7b, #d31483);
          position: static;
        }
      </style>
    <?php }   ?>
     
     
   
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-flex">
          <figure
            class="logo"
           
          ><?php the_custom_logo(); ?></figure>

           <div class="burger-menu">
					  <i class="fas fa-bars"></i>
				  </div>

          <ul class="header-link-flex">
         					<?php $args = array(
						'theme_location' => 'headernav',
						'container_class' => 'header-link-flex' //this is only if we want to remove the div but keep the class in css
					); ?>
					<?php wp_nav_menu($args);?>
          </ul> 
        </div>
      </div>
    </header>

    <header class="header-responsive">

        <div class="header-popup-container">

          <ul class="header-pop-up">
            			<?php $args = array(
						'theme_location' => 'headernav',
						'container_class' => 'header-link-flex' //this is only if we want to remove the div but keep the class in css
					); ?>
					<?php wp_nav_menu($args);?>
          </ul>

          <p class="close">X</p>
        </div>
    </header>

    