<?php
/*
 * Template Name: team
 * Template Post Type: team
 */
  
 get_header();  ?>
<body class="profilePage d-flex align-items-center">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container position-relative">
        <a href="/studio" class="back"><img src="<?php bloginfo(template_directory); ?>/images/icons/close.svg" alt=""></a>
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <div class="photo" style="background-image: url(<?php the_field('photo'); ?>)"></div>
            </div>
            <div class="col-lg-6 mr-auto d-flex flex-column">
                <h1 class="title"><?php the_title(); ?></h1>
                <div class="d-flex align-items-center mb-4">


                    <div class="line mr-2"></div>
                    <h5 class="mb-0 position"><?php the_field('position'); ?></h5>
                </div>
                <p class="description"><?php the_content();?></p>
                <div class="mt-auto">
                    <p class="subtitle mb-0">Contacts</p>
                   <a href="#" class="link"><?php the_field('email'); ?></a>
                </div>
            </div>
        </div>
    </div>
        <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

