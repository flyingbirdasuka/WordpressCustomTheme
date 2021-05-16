<?php get_header(); ?>
    <br>
    <br>
    <section id="about" class="about">
          <div class="container" data-aos="fade-up">

            <div class="row">

              <h2><?php //echo get_the_title(); ?></h2>
             
                <?php

                  

                  if( have_posts() ){
                    while ( have_posts() ){
                 	    the_post();
                 	    get_template_part('template-parts/content', 'page');
                    }
                  }
                
            
                ?> 

            </div>
    </section><!-- End Section -->

<?php get_footer(); ?>
