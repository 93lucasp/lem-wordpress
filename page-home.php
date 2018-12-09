
<?php /* Template Name: home */ ?>
<?php get_header(); ?>
<body class="home d-flex align-items-center justify-content-center position-relative">
<video autoplay muted loop class="video-bg">
        <source src="<?php bloginfo(template_directory); ?>/images/galaxy.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <img src="<?php bloginfo(template_directory); ?>/images/lem-white.svg" alt="" class="logo logo--absolute">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <a href="/index.php/projects/" class="cta d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <h1>Projects</h1>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </a>
            </div>
            <div class="col-lg-6">
                <a href="#" class="cta d-flex align-items-center justify-content-center">
                    <div class="text-center">
                        <h1>Studio</h1>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>

    </div>
	