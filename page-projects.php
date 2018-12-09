<?php /* Template Name: projects */ ?>
<?php get_header(); ?>
<body class="projects-page">
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
            <div class="tab-pane fade show active" id="nav-selectedProjects" role="tabpanel" aria-labelledby="nav-selectedProjects-tab">
                <div class="row">
                    <?php query_posts('post_type=selected_projects'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    
                        <div class="col-lg-4">
                            <div class="project" style=" background-image: url(<?php the_field('imgmain'); ?>)">
                                <div class="project__opacity"></div>
                                <div class="project__info">
                                    <a href="<?php the_permalink() ?>" class="project__title"><?php the_title(); ?></a>
                                    <p class="project__location"><?php the_field('location'); ?> <?php the_field('selected'); ?></p>
                                </div>
                            </div>
                        </div>
	                <?php endwhile;?>
        </div>
            </div>
            <div class="tab-pane fade" id="nav-allProjects" role="tabpanel" aria-labelledby="nav-allProjects-tab">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 border-bottom">
                            <h6 class="font-weight-bold">Project name</h6>
                        </div>
                        <div class="col-lg-2 border-bottom">
                            <h6 class="font-weight-bold">City</h6>
                        </div>
                        <div class="col-lg-2 border-bottom">
                            <h6 class="font-weight-bold">Country</h6>
                        </div>
                        <div class="col-lg-2 border-bottom">
                            <h6 class="font-weight-bold">Tipology</h6>
                        </div>
                        <div class="col-lg-2 border-bottom">
                            <h6 class="font-weight-bold">Year</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 border-bottom">
                            <h6 class="mb-0 py-3">Villa forte</h6>
                        </div>
                        <div class="col-lg-2 border-bottom">
                            <h6 class="mb-0 py-3">Torino</h6>
                        </div>
                        <div class="col-lg-2 border-bottom">
                            <h6 class="mb-0 py-3">Italy</h6>
                        </div>
                        <div class="col-lg-2 border-bottom">
                            <h6 class="mb-0 py-3">Residential</h6>
                        </div>
                        <div class="col-lg-2 border-bottom">
                            <h6 class="mb-0 py-3">2017-2018</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
    <?php get_footer(); ?>