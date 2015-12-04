<?php 
function custom_post() {
	register_post_type( 'servece',
		array(
			'labels' => array(
				'name' => __( 'serveces' ),
				'singular_name' => __( 'servece' ),
				'add_new_item' => __( 'Add New servece' )
			),
			'public' => true,
			'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'excerpt', 'page-attributes'),
			'has_archive' => true,
		)
	);

}
add_action( 'init', 'custom_post' );
function custom_post_taxonomy() {
	register_taxonomy(
		'service', //name of taxonomy 
		'servece', //post type
		array(
			'hierarchical'          => true,
			'label'                 => 'servece Category', 
			'query_var'             => true,
			'show_admin_column'     => true,
			'rewrite'               => array(
				'slug'              => 'servece-category', 
				'with_front'        => true 
				)
			)
	);
}
add_action( 'init', 'custom_post_taxonomy');   
?>
