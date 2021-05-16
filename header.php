<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-K3VRJD3');</script>
	<!-- End Google Tag Manager -->	
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= get_template_directory_uri(); ?>/assets/img/Asuka-logo.png" rel="icon">


  <?php wp_head();?>


</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K3VRJD3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
    	<?php 
				if(function_exists('the_custom_logo')){
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id);
				}
			  ?>
		<a href="<?= get_home_url(); ?>"><img class="logo" src="<?php echo $logo[0];?>" alt="logo"></a>
		<h1 class="logo me-auto me-lg-0"><a href="<?= get_home_url(); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
    	<nav id="navbar" class="navbar order-last order-lg-0" role="navigation">
		      

		 		<?php if ( has_nav_menu( 'primary' ) ) : ?>
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'menu_class'      => 'menu-wrapper',
								'container_class' => 'primary-menu-container',
								'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
								'fallback_cb'     => false,
							)
						);
						?>
				
				<?php endif; ?>
			<i class="bi bi-list mobile-nav-toggle"></i>
		</nav>
       <a href="order" class="order-product-btn scrollto d-none d-lg-flex">Order Asuka Method At Home</a>
    </div>
  </header><!-- End Header -->