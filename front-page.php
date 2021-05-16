<?php get_header(); ?>
    
        <?php 
        $id = 10; 
		$p = get_page($id);
		echo apply_filters('the_content', $p->post_content);

        ?>   

<?php
	$id = 77; 
	$p = get_page($id);
	$t = $p->post_title;
?>
<section id="info" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
	        <h2><?= apply_filters('post_title', $t); ?></h2>	       
		</div>
		<div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        	<p><?= apply_filters('the_content', $p->post_content); ?></p>
        </div>
</section>
<?php
	$id = 100; 
	$p = get_page($id);
	$t = $p->post_title;
?>
<section id="order-product" class="order-product about">
      <div class="container" data-aos="fade-up">
        
        <div class="section-title">
	        <h2><?= apply_filters('post_title', $t); ?></h2>	       
		</div>
		<div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
        	<p><?= apply_filters('the_content', $p->post_content); ?></p>
        </div>
</section>

<?php get_footer(); ?>
