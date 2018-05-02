<?php
if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	add_theme_support('post-thumbnails');
	// file exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'wordpress' ),
) );

function set_excerpt_length(){
return 20;	
}

add_filter('excerpt_length', 'set_excerpt_length');

//widget location
function wpb_init_widgets($id){
	register_sidebar(array(
		'name'  =>  'sidebar',
		'id'    =>  'sidebar',
		'before_widget'  => '<div class="box">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
		));

	register_sidebar(array(
			'name'  =>  'Box1',
			'id'    =>  'box1',
			'before_widget'  => '<div class="sidebar-module">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
			));
	register_sidebar(array(
				'name'  =>  'Box2',
				'id'    =>  'box2',
				'before_widget'  => '<div class="sidebar-module">',
				'after_widget' => '</div>',
				'before_title' => '<h4>',
				'after_title' => '</h4>',
				));
	register_sidebar(array(
					'name'  =>  'Box3',
					'id'    =>  'box3',
					'before_widget'  => '<div class="sidebar-module">',
					'after_widget' => '</div>',
					'before_title' => '<h4>',
					'after_title' => '</h4>',
				));
}
 
add_action('widgets_init', 'wpb_init_widgets');

//customizer files
require get_template_directory(). '/inc/customizer.php';