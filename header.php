<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">

    <?php
        wp_head()
    ?>    
 
    
    <title><?php bloginfo( 'name' )?></title>
</head>
<body>
    <nav class="head">
        <div class="shapka">
            <?php 
                wp_nav_menu( [
                    'menu'            => 'Main', 
                    'container'       => 'false',
                    'menu_class'      => 'link', 
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul class="link">%3$s</ul>',
                    'depth'           => 1
                ] );
            
            // wp_nav_menu( [
            //     'menu'            => 'Main',
            //     'container'       => 'div',
            //     'container_class' => 'link',
            //     'container_id'    => '',
            //     'menu_class'      => 'link',
            //     'echo'            => true,
            //     'fallback_cb'     => 'wp_page_menu',
            //     'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            //     'depth'           => 0,
            //     'walker'          => '',
            //     ] );
            ?>
                
            <button class="top-bt" >TOP FORUM CLUB</button>
        </div>
    </nav>
    <header class="top-forum">
        <div class="logo"> <?php the_custom_logo(); ?> </div> 
        <img class="logo2" src="<?php echo bloginfo('template_url'); ?>/assets/img/Screenshot_2.png">
        <div class="events-head">
            <a class="events" href='#'><?php the_field('logo_zagolovok'); ?></a>
        </div>
        <img class="logo3" src="<?php the_field('image_contact'); ?>">
        <div class="contacts-head">
            <a href="#" class="contacts"><?php the_field('logo_kontakt'); ?></a>
        </div>
        <a class="register-link"><button class="register-btn popup-open" >REGISTER NOW</button></a>
    </header>
    