<?php /* Template Name: studio */ ?>
<?php get_header(); ?>
<body class="studioPage">
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
                    <a href="/studio.html" class="link-studio">Studio</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="pattern" style="background-image:url('<?php bloginfo(template_directory); ?>/images/pattern-studio.png')"></div>
    <div class="container">
        <div class="header">
            <div class="row">
                <div class="col-lg-7">
                    <img src="<?php bloginfo(template_directory); ?>/images/lem-dark.svg" alt="" class="header__logo">
                    <h1 class="header__title"><?php the_field('header'); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-4 pb-4">
        <div class="row">
            <div class="col-lg-2 ml-auto">
                <h4 class="studioPage__title">About <br> LEM</h4>
                <div class="line-studio"></div>
            </div>
            <div class="col-lg-8 mr-auto">
                <p class="studioPage__text"><?php the_field('about'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="container mb-4 pb-4">
        <div class="row">
            <div class="col-lg-2 ml-auto">
                <h4 class="studioPage__title">Team</h4>
                <div class="line-studio"></div>
            </div>
            <div class="col-lg-8 mr-auto">
                <div class="row">
                <?php query_posts('post_type=team'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-lg-4">
                            <a href="<?php the_permalink() ?>" class="nounderline"> <div class="team">
                                <div class="team__photo" style="background-image: url(<?php the_field('photo'); ?>)">

                                </div>
                                <h6 class="team__name"><?php the_title(); ?></h6>
                                <p class="team__position"><?php the_field('position'); ?></p>
                            </div>
                            </a>
                        </div>
                    <?php endwhile;?>
                <?php wp_reset_query(); ?>
                  

                </div>
            </div>
        </div>
    </div>
    <div class="container mb-4 pb-4">
        <div class="row">
            <div class="col-lg-2 ml-auto">
                <h4 class="studioPage__title">Collaborators</h4>
                <div class="line-studio"></div>
            </div>
            <div class="col-lg-8 mr-auto">
                <p class="studioPage__text"><?php the_field('collaborators'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="container mb-4 pb-4">
        <div class="row">
            <div class="col-lg-2 ml-auto">
                <h4 class="studioPage__title">Partners</h4>
                <div class="line-studio"></div>
            </div>
            <div class="col-lg-8 mr-auto">
                <p class="studioPage__text"><?php the_field('partners'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="container mb-4 pb-4">
        <div class="row">
            <div class="col-lg-2 ml-auto">
                <h4 class="studioPage__title">Clients</h4>
                <div class="line-studio"></div>
            </div>
            <div class="col-lg-8 mr-auto">
                <p class="studioPage__text"><?php the_field('clients'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="container mb-4 pb-4">
        <div class="row">
            <div class="col-lg-2 ml-auto">
                <h4 class="studioPage__title">Contacts</h4>
                <div class="line-studio"></div>
            </div>
            <div class="col-lg-8 mr-auto d-lg-flex">

                <p class="studioPage__text">
                    <span class="font-weight-bold"> Head Office Italy</span> <br>
                    C.so Stati Uniti, 53 <br>
                    10129 — Torino, IT <br>
                </p>
                <p class="studioPage__text ml-lg-5">
                    <span class="font-weight-bold"> Contact us</span> <br>
                    info@agenzialem.it
                </p>

            </div>
        </div>
    </div>
    
    <?php get_footer(); ?>