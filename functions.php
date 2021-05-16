<?php 

function AMThemeSupport(){
  add_theme_support('title-tag');
  add_theme_support('custom-logo');    
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'AMThemeSupport');

function AMRegisterStyles(){
	$version = wp_get_theme()->get("Version");       
	wp_enqueue_style('AM-font',  "https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i");
    wp_enqueue_style('AM-animate', get_template_directory_uri() . "/assets/vendor/animate.css/animate.min.css");
	wp_enqueue_style('AM-aos', get_template_directory_uri() . "/assets/vendor/aos/aos.css");
	wp_enqueue_style('AM-bootstrap', get_template_directory_uri() . "/assets/vendor/bootstrap/css/bootstrap.min.css");
	wp_enqueue_style('AM-icons', get_template_directory_uri() . "/assets/vendor/bootstrap-icons/bootstrap-icons.css");
	wp_enqueue_style('AM-boxicons', get_template_directory_uri() . "/assets/vendor/boxicons/css/boxicons.min.css");
	wp_enqueue_style('AM-glightbox', get_template_directory_uri() . "/assets/vendor/glightbox/css/glightbox.min.css");
	wp_enqueue_style('AM-wsiper', get_template_directory_uri() . "/assets/vendor/swiper/swiper-bundle.min.css");
	wp_enqueue_style('AM-style', get_template_directory_uri() . "/style.css");
}


add_action('wp_enqueue_scripts', 'AMRegisterStyles');

 
function AMRegisterScripts(){
	wp_enqueue_script('AM-aosjs', get_template_directory_uri() .'/assets/vendor/aos/aos.js', array(), '1.0',true);
	wp_enqueue_script('AM-bootstrapjs', get_template_directory_uri() .'/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0',true);
	wp_enqueue_script('AM-hglightboxjs', get_template_directory_uri() .'/assets/vendor/glightbox/js/glightbox.min.js', array(), '1.0',true);
	wp_enqueue_script('AM-isotopejs', get_template_directory_uri() .'/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), '1.0',true);
	wp_enqueue_script('AM-emailjs', get_template_directory_uri() .'/assets/vendor/php-email-form/validate.js', array(), '1.0',true);
	wp_enqueue_script('AM-swiperjs', get_template_directory_uri() .'/assets/vendor/swiper/swiper-bundle.min.js', array(), '1.0',true);
    wp_enqueue_script('AM-mainjs', get_template_directory_uri() .'/assets/js/main.js', array(), '1.0',true);

    wp_enqueue_script('AM-footerjs', get_template_directory_uri() .'/assets/js/footer.js', array(), '1.0', true );

}


add_action('wp_enqueue_scripts', 'AMRegisterScripts');

function AMMenus(){
	$locations =array(
       'primary' => 'Desktop Primary top',
       'footer' => 'Footer Menu Items'
	);
	register_nav_menus($locations);

}

add_action('init', 'AMMenus');

function menu_set_dropdown( $sorted_menu_items, $args ) {
    $last_top = 0;
    foreach ( $sorted_menu_items as $key => $obj ) {
        // it is a top lv item?
        if ( 0 == $obj->menu_item_parent ) {
            // set the key of the parent
            $last_top = $key;
        } else {
            $sorted_menu_items[$last_top]->classes[$last_top] = 'dropdown';

            
        }
    }
    return $sorted_menu_items;
}
add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );


add_filter('nav_menu_css_class' , 'add_active_to_icon' , 10 , 2);

function add_active_to_icon ($classes, $item) {
    if (in_array('current-post-ancestor', $classes) || in_array('current-page-ancestor', $classes) || in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}

function add_class_to_href( $classes, $item ) {
    if ( in_array('current_page_item', $item->classes) ) {
        $classes['class'] = 'active';
    }
    return $classes;
}
add_filter( 'nav_menu_link_attributes', 'add_class_to_href', 10, 2 );


