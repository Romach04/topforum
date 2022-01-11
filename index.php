<?php 
    get_header();
?>  
    <div class="container">
        <img class='zal-img' src='<?php echo bloginfo('template_url'); ?>/assets/img/zal.png'>
        <div class="content">
            <div class="popup-fade">
                <div class="popup">
                    <a class="popup-close" href="#">Close</a>
                    <p>In  order to register on Topforum, please write to our <span class="span-modal">Top-forum</span>  email.You are waiting for new people!
                    <br>Please,write you phone</p>
                    <?php echo do_shortcode('[contact-form-7 id="5" title="телефон"]');?>
                </div>		
            </div>
            <div class="text-forum">
                <p class="text"><?php the_field('about_topforum');?>  
                    <span class="end-text">campaigns that will give you superiority in your industry. Just invest in your future</span>
                </p>
            </div>
            <div class="img-icons">
                <!-- <img class="icon-item icon1" src="assets/img/Screenshot_4.png"> -->
                <!-- <img class="icon-item icon2" src="assets/img/Screenshot_5.png">
                <img class="icon-item icon3" src="assets/img/Screenshot_6.png"> -->
            </div>
            <div class="content-items">
                <img class="icon-item icon1" src="<?php echo bloginfo('template_url'); ?>/assets/img/Screenshot_4.png">
                <div class="under-btn2">
                    <div class="under-text">
                        <h2>BECOME A DELEGATE</h2>
                        <p class="p-under"> <span class="end-p2">of working hours.</span></p> 
                    </div>
                    <button class="lear-more-btn" >Learn more</button>
                    <p class="botton-btn">Wealth TOP FORUM israel 2021</p>  
                </div>
            </div>
            <div class="btn-row">
                <button class="bt bt1" >TOP FORUM CLUB</button>
                <button class="bt bt2" >SUBSCRIBE</button>
            </div>
            
        </div>
        <!-- close content -->
        <!-- contetn-slider -->
        <div
            style="
            <?php 
                $field = get_field('color_back');
                echo $field;
                if ($field =="коричневый"){
                    ?>
                        background-color: rgb(248, 243, 233);
                    <?php
                }
                if ($field =="другой"){
                    ?>
                        background-color: rgb(200, 243, 233);
                    <?php
                }

                ?>"
            class="contetn-slider" >
                <div class="wrapper-slide">
                    <h2 class="customer-h">CUSTOMER REVIEWS</h2>
                    <div class="stelSpan">
                        <span id="current">01</span>
                        <span id="total">/<?php the_field('max_value_slider');?></span>
                
                    </div>
                    <div class="offer__slider ">
                        <?php
                            $my_posts = get_posts( array(
                                'numberposts' => -1,
                                'category_name'    => 'slider',
                                'orderby'     => 'date',
                                'order'       => 'ASC',
                                'post_type'   => 'post',
                                'suppress_filters' => true, 
                            ) );

                            foreach( $my_posts as $post ){
                                setup_postdata( $post );
                                ?>
                                    <div class="item-slider item1" name="slide">
                                        <img src="<?php the_field('1_image_slider');?>" all='image'>
                                    </div>
                                    <div class="item-slider item1" name="slide">
                                        <img src="<?php the_field('2_image_slider');?>" all='image'>
                                    </div>

                                <?php

                                
                            }

                            wp_reset_postdata(); // сброс
                        ?>
                        
                        <div class="prev strelka">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/prevset.png">
                        </div>
                        <div class="next strelka">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/nextset.png">
                        </div>
                    </div>
                </div>
                    
            </div>  
        <!-- content -->

        <div class="content niz">
            <div class="video">
                <h2 class="h-promo">PROMO VIDEO</h2>
                <div class="video-content">
                    <video width="690" height="450" controls="controls">
                        <source src="<?php echo bloginfo('template_url'); ?> /assets/video/Top-forum.mp4" type="video/mp4">
                        Ваш браузер не поддерживает video.
                    </video>

                </div>
            </div>
        </div>
        <!-- close content -->
        <div class="contetn-slider slider-clients">
            <h2 class="h-client">OUR CLIENTS</h2>
            <div class="slider-place">
                <div class="slider-card g">
                    <img class="item-inner" src="<?php echo bloginfo('template_url'); ?>/assets/img/clitents1.png">
                </div>
                <div class="slider-card g">
                    <img class="item-inner" src="<?php echo bloginfo('template_url'); ?>/assets/img/clitents2.png">
                </div>
                <div class="slider-card g">
                    <img class="item-inner" src="<?php echo bloginfo('template_url'); ?>/assets/img/clitents3.png">
                </div>
                <div class="slider-card g">
                    <img class="item-inner" src="<?php echo bloginfo('template_url'); ?>/assets/img/clitents4.png">
                </div>
                <div class="slider-card g">
                    <img class="item-inner" src="<?php echo bloginfo('template_url'); ?>/assets/img/clitents5.png">
                </div>
                <div class="slider-card g">
                    <img class="item-inner" src="<?php echo bloginfo('template_url'); ?>/assets/img/clitents6.png">
                </div>
                
            </div>
        </div>
<?php
    get_footer();
?>        
        