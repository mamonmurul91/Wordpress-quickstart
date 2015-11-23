<?php 
function sidebar_widget() {
  
	register_sidebar( array(
		'name' => 'sidebar1',
		'id' => 'widget_id',
		'before_widget' => '<div class="single_sidebar">',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
}
add_action('widgets_init', 'sidebar_widget');
?>