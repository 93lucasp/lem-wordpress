<?php /* Template Name: portfolio */ ?>
<?php get_header(); ?>
	
	<?php 
		query_posts('post_type=portfolio');
	?>
	<?php while (have_posts()) : the_post(); ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<p><?php echo get_the_excerpt(); ?></p>
	<?php endwhile;?>
	
		
<?php get_footer(); ?>