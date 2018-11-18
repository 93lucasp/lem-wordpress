<?php /* Template Name: spesa */ ?>
<?php get_header(); ?>
	
	<?php 
		query_posts('post_type=lista_spesa');
	?>
	<?php while (have_posts()) : the_post(); ?>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
			<p><?php echo get_the_excerpt(); ?></p>
	<?php endwhile;?>
	
		
<?php get_footer(); ?>