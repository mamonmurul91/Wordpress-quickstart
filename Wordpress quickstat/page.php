
<?php if(have_posts()) : ?>

	<?php while(have_posts()) : the_post(); ?>
	
		<h3><?php the_title(); ?></h3>
		<?php the_content(); ?>
	
	<?php endwhile; ?>

<?php else : ?>
	<div class="post">
		<h3><?php echo '404 Error&#58; Not Found'; ?></h3>
	</div>

<?php endif; ?>