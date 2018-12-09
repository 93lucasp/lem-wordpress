<?php get_header(); ?>
<body class="projects-page">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container projectPage">
        <div class="row">
            <div class="col-lg-6 mb-5">
                <div class="projectPage__mainImg " style="background-image: url(<?php the_field('imgmain'); ?>)"></div>

            </div>
            <div class="col-lg-6 mb-5">
                <h1 class="projectPage__title"><?php the_title(); ?></h1>
                <p class="projectPage__description"><?php the_content();?></p>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="text-left w-50 ml-auto">
                        <h6 class="projectPage__label">Location</h6>
                        <h6 class="projectPage__description"><?php the_field('location'); ?>,</h6>
                    </div>
                    <div class="text-left w-50 ml-auto">
                        <h6 class="projectPage__label">Team</h6>
                        <h6 class="projectPage__description"><?php the_field('team'); ?></h6>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="text-left w-50 ml-auto">
                        <h6 class="projectPage__label">Client</h6>
                        <h6 class="projectPage__description"><?php the_field('client'); ?></h6>
                    </div>
                    <div class="text-left w-50 ml-auto">
                        <h6 class="projectPage__label">Size</h6>
                        <h6 class="projectPage__description"><?php the_field('size'); ?></h6>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="text-left w-50 ml-auto">
                        <h6 class="projectPage__label">Tipology</h6>
                        <h6 class="projectPage__description"><?php the_field('tipology'); ?></h6>
                    </div>
                    <div class="text-left w-50 ml-auto">
                        <h6 class="projectPage__label">year</h6>
                        <h6 class="projectPage__description"><?php the_field('year'); ?></h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6  mb-5">
                <div class="projectPage__images" style="background-image: url(<?php the_field('img1'); ?>)">

                </div>
            </div>
            <div class="col-lg-6  mb-5">
                <div class="projectPage__images" style="background-image: url(<?php the_field('img2'); ?>)">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3  mb-5">
                <div class="projectPage__images" style="background-image: url(<?php the_field('img3'); ?>)">

                </div>
            </div>
            <div class="col-lg-9  mb-5">
                <div class="projectPage__images" style="background-image: url(<?php the_field('img4'); ?>)">

                </div>
            </div>
        </div>

    </div>
				<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>

<?php get_footer(); ?>