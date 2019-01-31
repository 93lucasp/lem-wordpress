<?php /* Template Name: projects */ ?>
<?php get_header(); ?>
<body class="projects-page">
<div class="navbar">
    <div class="container d-flex align-items-center justify-contente-between">
        <a href="/">
            <img src="<?php bloginfo(template_directory); ?>/images/lem-dark.svg" alt="lem logo" class="logo">
        </a>
        <div class="d-none d-lg-block">
            <ul class="list-unstyled d-flex">
                <li>
                    <a href="/projects" class="link-projects">Projects</a>
                </li>
                <li class="mx-3">
                    <a href="/studio">Studio</a>
                </li>
            </ul>
        </div>
        <div class="hamburger d-lg-none">
            <div class="hamburger__item"></div>
        </div>
        <div class="navbar__menu  d-lg-none">
            <ul class="list-unstyled ">
                 <li>
                    <a href="/" class="link-mobile link-home">Home</a>
                </li>
                <li>
                    <a href="/projects" class="link-mobile link-projects">Projects</a>
                </li>
                <li >
                    <a href="/studio" class="link-mobile link-studio">Studio</a>
                </li>
               
            </ul>
            <div class="contact">
                <p>Get in touch</p>
                <a href="mailto:info@agenzialem.it">info@agenzialem.it</a>
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid">
        <nav class="my-5">
            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <a class="nav-item nav-link mx-2 mx-lg-4 active" id="nav-selectedProjects-tab" data-toggle="tab" href="#nav-selectedProjects" role="tab"
                    aria-controls="nav-selectedProjects" aria-selected="true">Selected projects</a>
                <a class="nav-item nav-link mx-2 mx-lg-4" id="nav-allProjects-tab" data-toggle="tab" href="#nav-allProjects" role="tab"
                    aria-controls="nav-allProjects" aria-selected="false">All projects</a>
            </div>
        </nav>
        <div class="tab-content mb-5" id="nav-tabContent">
            <div class="tab-pane fade" id="nav-allProjects" role="tabpanel" aria-labelledby="nav-allProjects-tab">
                <div class="container ">
                <table id="listProject" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th class="font-weight-bold">Project name</th>
                                <th class="font-weight-bold d-none d-lg-block">City</th>
                                <th class="font-weight-bold d-none d-lg-block">Country</th>
                                <th class="font-weight-bold d-none d-lg-block">Tipology</th>
                                <th class="font-weight-bold">Year</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while ( have_rows('row_projects') ) : the_row();?>
                        <tr class="table--listProjects <?php the_sub_field('haslink'); ?>">
                            <td>
                                <a href="<?php the_sub_field('url'); ?>" class="d-flex align-items-center">
                                    <img src="<?php bloginfo(template_directory); ?>/images/icons/link.svg" alt="" class="mr-2 icon">
                                    <h6 class="mb-0"><?php the_sub_field('title'); ?></h6>
                                </a>
                            </td>
                            <td class="d-none d-lg-block">
                                <a href="<?php the_sub_field('url'); ?>">
                                    <h6 class="mb-0"><?php the_sub_field('city'); ?></h6>
                                </a>
                            </td>
                            <td class="d-none d-lg-block">
                                <a href="<?php the_sub_field('url'); ?>">
                                    <h6 class="mb-0"><?php the_sub_field('country'); ?></h6>
                                </a>
                            </td>
                            <td class="d-none d-lg-block">
                                <a href="<?php the_sub_field('url'); ?>">
                                    <h6 class="mb-0"><?php the_sub_field('tipology'); ?></h6>
                                </a>
                            </td>
                            <td>
                                <a href="<?php the_sub_field('url'); ?>">
                                    <h6 class="mb-0"><?php the_sub_field('year'); ?></h6>
                                </a>
                            </td>
                        </tr>
                         <?php endwhile;?>
                        </tbody>
                </table>
                    
                </div>
              
            </div>
            <div class="tab-pane fade show active" id="nav-selectedProjects" role="tabpanel" aria-labelledby="nav-selectedProjects-tab">
                <div class="row">
                    <?php query_posts('post_type=projects'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-lg-4">
                            <div class="project" style=" background-image: url(<?php the_field('imgmain'); ?>)">
                                <a href="<?php the_permalink() ?>">
                                    <div class="project__opacity"></div>
                                    <div class="project__info">
                                        <h1 class="project__title"><?php the_title(); ?></h1>
                                        <p class="project__location"><?php the_field('location'); ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endwhile;?>
                </div>
            </div>
        </div>

    </div>
    <?php get_footer(); ?>