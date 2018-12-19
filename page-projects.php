<?php /* Template Name: projects */ ?>
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
                    <a href="/index.php/projects/" class="link-projects">Projects</a>
                </li>
                <li class="mx-3">
                    <a href="/studio">Studio</a>
                </li>
            </ul>
        </div>
    </div>
</div>
    <div class="container-fluid">
        <nav class="my-5">
            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <a class="nav-item nav-link mx-4 active" id="nav-selectedProjects-tab" data-toggle="tab" href="#nav-selectedProjects" role="tab"
                    aria-controls="nav-selectedProjects" aria-selected="true">Selected projects</a>
                <a class="nav-item nav-link mx-4" id="nav-allProjects-tab" data-toggle="tab" href="#nav-allProjects" role="tab"
                    aria-controls="nav-allProjects" aria-selected="false">All projects</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade" id="nav-allProjects" role="tabpanel" aria-labelledby="nav-allProjects-tab">
                <div class="container ">
                    <div class="row">
                        <div class="col-5 col-lg-4 border-bottom">
                            <h6 class="font-weight-bold" >Project name</h6>
                        </div>
                        <div class="col-2 border-bottom" >
                            <h6 class="font-weight-bold">City</h6>
                        </div>
                        <div class="col-2 border-bottom" >
                            <h6 class="font-weight-bold">Country</h6>
                        </div>
                        <div class="col-3 col-lg-2 border-bottom">
                            <h6 class="font-weight-bold">Tipology</h6>
                        </div>
                        <div class="col-2 border-bottom d-none d-lg-block">
                            <h6 class="font-weight-bold">Year</h6>
                        </div>
                    </div>
                </div>
                <div class="container">
                
                    <?php while ( have_rows('row_projects') ) : the_row();?>
                    <a href="<?php the_sub_field('url'); ?>" class="table--listProjects <?php the_sub_field('haslink'); ?>">
                        <div class="row">
                            <div class="col-5 col-lg-4 border-bottom d-flex">
                                <img src="<?php bloginfo(template_directory); ?>/images/icons/link.svg" alt="" class="mr-2 icon">
                                <h6 class="mb-0 py-3"><?php the_sub_field('title'); ?></h6>
                            </div>
                            <div class="col-2 border-bottom">
                                <h6 class="mb-0 py-3"><?php the_sub_field('city'); ?></h6>
                            </div>
                            <div class="col-2 border-bottom">
                                <h6 class="mb-0 py-3"><?php the_sub_field('country'); ?></h6>
                            </div>
                            <div class="col-3 col-lg-2 border-bottom">
                                <h6 class="mb-0 py-3"><?php the_sub_field('tipology'); ?></h6>
                            </div>
                            <div class="col-2 border-bottom d-none d-lg-block">
                                <h6 class="mb-0 py-3"><?php the_sub_field('year'); ?></h6>
                            </div>
                        </div>
                    </a>
                        
                    
                    <?php endwhile;?>
                </div>
            </div>
            <div class="tab-pane fade show active" id="nav-selectedProjects" role="tabpanel" aria-labelledby="nav-selectedProjects-tab">
                <div class="row">
                    <?php query_posts('post_type=projects'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-lg-4">
                            <div class="project" style=" background-image: url(<?php the_field('imgmain'); ?>)">
                                <div class="project__opacity"></div>
                                <div class="project__info">
                                    <a href="<?php the_permalink() ?>" class="project__title"><?php the_title(); ?></a>
                                    <p class="project__location"><?php the_field('location'); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>

    </div>
    <?php get_footer(); ?>