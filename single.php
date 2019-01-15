<?php get_header(); ?>
<body class="projects-page">
<div class="navbar">
    <div class="container d-flex align-items-center justify-contente-between">
        <a href="/">
        <img src="<?php bloginfo(template_directory); ?>/images/lem-dark.svg" alt="lem logo" class="logo">
        </a>
        <div>
            <ul class="list-unstyled d-flex">
                <li>
                    <a href="/projects" class="link-projects">Projects</a>
                </li>
                <li class="mx-3">
                    <a href="/studio">Studio</a>
                </li>
            </ul>
        </div>
    </div>
</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container projectPage">
        <div class="row">
            
            <div class="col-lg-6 mb-3 mb-lg-5 text-lg-center">
                <h1 class="projectPage__title"><?php the_title(); ?></h1>
                
                
            </div>
            <div class="col-lg-6 mb-3 mb-lg-5">
            <div class="d-flex align-items-start align-items-lg-center justify-content-between mb-2 mb-lg-3">
                    <div class="text-left w-50 ml-lg-auto">
                        <h6 class="projectPage__label">Location</h6>
                        <h6 class="projectPage__description"><?php the_field('location'); ?></h6>
                    </div>
                    <div class="text-left w-50 w-40-resp ml-auto">
                    <h6 class="projectPage__label">Tipology</h6>
                        <h6 class="projectPage__description"><?php the_field('tipology'); ?></h6>
                    </div>
                </div>
                <div class="d-flex align-items-start align-items-lg-center justify-content-between">
                    <div class="text-left w-50 ml-lg-auto">
                        <h6 class="projectPage__label">Client</h6>
                        <h6 class="projectPage__description"><?php the_field('client'); ?></h6>
                    </div>
                    <div class="text-left w-50 w-40-resp ml-auto">
                        <h6 class="projectPage__label">Size</h6>
                        <h6 class="projectPage__description"><?php the_field('size'); ?></h6>
                    </div>
                </div>

            </div>
            <div class="col-lg-12 mb-3 mb-lg-5">
                <div class="projectPage__mainImg " style="background-image: url(<?php the_field('imgmain'); ?>)"></div>
            </div>
            <div class="col-lg-5 ml-lg-auto my-3 my-lg-5">
                <p class="projectPage__description"><?php the_field('englishdescription'); ?></p>
            </div>
            <div class="col-lg-5 mr-lg-auto my-3 my-lg-5">
            <p class="projectPage__description"><?php the_field('italiandescription'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6  my-5">
                <a href="<?php the_field('img1'); ?>" rel="lightbox" data-lightbox="<?php the_field('namegallery'); ?>">
                    <div class="projectPage__images" style="background-image: url(<?php the_field('img1'); ?>)"></div>
                </a>
            </div>
            <div class="col-lg-6  my-5">
                <a href="<?php the_field('img2'); ?>" rel="lightbox" data-lightbox="<?php the_field('namegallery'); ?>">
                    <div class="projectPage__images" style="background-image: url(<?php the_field('img2'); ?>)"></div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3  mb-5">
                <a href="<?php the_field('img3'); ?>" rel="lightbox" data-lightbox="<?php the_field('namegallery'); ?>">
                    <div class="projectPage__images" style="background-image: url(<?php the_field('img3'); ?>)"></div>
                </a>
            </div>
            <div class="col-lg-9  mb-5">
                <a href="<?php the_field('img4'); ?>" rel="lightbox" data-lightbox="<?php the_field('namegallery'); ?>">
                    <div class="projectPage__images" style="background-image: url(<?php the_field('img4'); ?>)"></div>
                </a>
            </div>
        </div>
        <?php if( have_rows('images') ): ?>
            <?php while ( have_rows('images') ) : the_row();?>
                <div class="row">
                    <div class="col-lg-9  mb-5">
                        <a href="<?php the_sub_field('img5'); ?>" rel="lightbox" data-lightbox="<?php the_field('namegallery'); ?>">
                            <div class="projectPage__images" style="background-image: url(<?php the_sub_field('img5'); ?>)"></div>
                        </a>
                    </div>
                    <div class="col-lg-3  mb-5">
                        <a href="<?php the_sub_field('img6'); ?>" rel="lightbox" data-lightbox="<?php the_field('namegallery'); ?>">
                            <div class="projectPage__images" style="background-image: url(<?php the_sub_field('img6'); ?>)"></div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3  mb-5">
                        <a href="<?php the_sub_field('img7'); ?>" rel="lightbox" data-lightbox="<?php the_field('namegallery'); ?>">
                            <div class="projectPage__images" style="background-image: url(<?php the_sub_field('img7'); ?>)"></div>
                        </a>
                    </div>
                    <div class="col-lg-9  mb-5">
                        <a href="<?php the_sub_field('img8'); ?>" rel="lightbox" data-lightbox="<?php the_field('namegallery'); ?>">
                            <div class="projectPage__images" style="background-image: url(<?php the_sub_field('img8'); ?>)"></div>
                        </a>
                    </div>
                </div>
            <?php endwhile;?>
        <?php endif;?>
        <?php if( have_rows('add_col') ): ?>
        <div class="row mb-5">
        <div class="col-lg-12">
                <h5 class="font-weight-bold">Credits</h5>
            </div>
        <?php while ( have_rows('add_col') ) : the_row();?>
            <div class="col-lg-4">
                <p class="paragraph-end font-weight-bold"><?php the_sub_field('title'); ?></p>
                <p class="paragraph-end"><?php the_sub_field('description'); ?></p>
            </div>
           
            <?php endwhile;?>

        </div>
        <?php endif;?>
    </div>
        <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>