<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */
  
 get_header();  ?>
 ciao
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class( 'class-name' ); ?>>
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p>Specific</p>
					<?php the_content();?>
					
					<span class="post-meta">Posted by <?php the_author(' ');?> on <?php the_time('l, F jS, Y')?></span>
					<img src="<?php the_field('wow'); ?>" alt="">
				</div><!-- .post --> 
				<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>