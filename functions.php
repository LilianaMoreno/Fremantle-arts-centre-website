<?php
function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'test', get_stylesheet_directory_uri() . '/responsive.css' );
wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null, false);
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
    wp_enqueue_script( 'wow', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), 'null', false );


}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );
add_theme_support( 'post-thumbnails'); 

?>

<?php
	if ( get_field(' headerbackgroundimage') ) {
		echo 'style="background: url(' . get_field(' headerbackgroundimage') . ')"';
	}
?>



<?php
	if ( get_field('eventsheader') ) {
		echo 'style="background: url(' . get_field('eventsheader') . ')"';
	}
?>

<?php
	if ( get_field(' eventspageimage') ) {
		echo 'style="background: url(' . get_field(' eventspageimage') . ')"';
        echo 'style="background-repeat:no-repeat"';
	}
?>


<?php
	if ( get_field('eventsbackgroundimage') ) {
		echo 'style="background: url(' . get_field(' eventsbackgroundimage') . ')"';
	}
?>


<?php
	if ( get_field('emailrectanglemobile') ) {
		echo 'style="background: url(' . get_field(' emailrectanglemobile') . ');
        background-size:cover;
            background-repeat:no-repeat;
    background-position: center;"';
	}
?>

<?php
	if ( get_field('newsheader') ) {
		echo 'style="background: url(' . get_field(' newsheader') . ')"';
	}
?>

<?php
	if ( get_field('newspagebackground') ) {
		echo 'style="background: url(' . get_field(' newspagebackground') . ')"';
	}
?>

<?php
	if ( get_field('blackrectangle') ) {
		echo 'style="background: url(' . get_field(' blackrectangle') . ')"';
	}
?>

<?php
	if ( get_field('emailrectangle') ) {
		echo 'style="background: url(' . get_field(' emailrectangle') . ')"';
	}
?>

<?php
function add_menu_link_class( $atts, $item, $args ) {
if($args->link_class) {$atts['class'] = $args->link_class;
}
return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );
function add_menu_list_item_class($classes, $item, $args) {
if($args->list_item_class){$classes[] = $args->list_item_class;
                          }return $classes;
    }
add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);
 ?>

<?php
function contactus() {

	register_sidebar( array(
		'name'          => 'Contact Us',
		'id'            => 'contact_details',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'contactus' );
?>

<?php
function location() {

	register_sidebar( array(
		'name'          => 'Location',
		'id'            => 'location_details',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'location' );
?>

<?php
function openingtimes() {

	register_sidebar( array(
		'name'          => 'Opening Times',
		'id'            => 'opening_times',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'openingtimes' );
?>

<?php
function copyright() {

	register_sidebar( array(
		'name'          => 'Copy Right - Mobile View',
		'id'            => 'copyright_mobile',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'copyright' );
?>

<?php
add_action('wp_enqueue_scripts', 'sk_wow_init_in_footer');

function sk_wow_init_in_footer() {
add_action( 'print_footer_scripts', 'wow_init' );
 
}


function wow_init() { ?>
<script type="text/javascript">
new WOW().init();
 </script>    
   <?php }

