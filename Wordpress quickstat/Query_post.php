
<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		
	<div class="single-post-item">
		<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail('thumbnail', array('class' => '')); ?>
		<h2><?php the_title(); ?></h2></a>
        <p class="post-meta"><?php the_time('M d, Y') ?></p>
		<?php the_excerpt(); ?> 
	</div>
<?php endwhile; ?>	
<?php endif; ?>