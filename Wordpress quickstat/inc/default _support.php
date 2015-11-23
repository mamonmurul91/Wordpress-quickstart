<?php 
/*default support into function.php*/
add_theme_support('post-formats', array('aside','audio', 'video','gallery'));
add_theme_support('post-thumbnails');

add_image_size('slider_img', 1024, 330, true);
add_image_size('portfolio_thumb', 250, 190, true);

?>