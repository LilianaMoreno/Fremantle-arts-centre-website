<?php
function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
wp_enqueue_style( 'style-css', get_template_directory_uri() . '/wordpressstyle.css' );
    wp_enqueue_style( 'test', get_stylesheet_directory_uri() . '/responsive.css' );
wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), null, false);
wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
}
 
add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

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