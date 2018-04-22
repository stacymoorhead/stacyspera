<?php
function my_theme_enqueue_styles() {

    $parent_style = 'vision-lite-style'; // This is 'vision-lite-style' for the Vision Lite theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    
}

function stacylauren_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'vision-lite-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}


//Enqueue Google Fonts: Cookie
wp_enqueue_style( 'vision-lite-fonts', 'https://fonts.googleapis.com/css?family=Satisfy');
	
	
// Load Font Awesome
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css' );
}
	
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>