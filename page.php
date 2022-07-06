<?php get_header(); ?>
    <br>
    <br>
    <section id="about" class="about">
          <div class="container" data-aos="fade-up">
            <div class="row">
                <?php
                  if( have_posts() ){
                    while ( have_posts() ){
                 	    the_post();
                 	    get_template_part('template-parts/content', 'page');
                      if ( is_active_sidebar( 'home_right_1' ) ) : ?>
                        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
                          <?php dynamic_sidebar( 'home_right_1' ); ?>
                        </div><!-- #primary-sidebar -->
                      <?php endif; 
                    }
                  }
                ?> 
            </div>
    </section><!-- End Section -->
<?php get_footer(); ?>
