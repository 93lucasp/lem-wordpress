
<?php /* Template Name: home */ ?>
<?php get_header(); ?>
<body class="home d-flex align-items-center justify-content-center position-relative">
    <video autoplay muted loop playsinline class="video-bg">
        <source src="<?php bloginfo(template_directory); ?>/images/galaxy.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>
    <div class="pattern-home" style="background-image: url('<?php bloginfo(template_directory); ?>/images/pattern.png')"></div>
    <img src="<?php bloginfo(template_directory); ?>/images/lem-white.svg" alt="" class="logo logo--absolute">
    <div class="container mt-4">
        <div class="row">
            <div class="col-6 col-lg-5 ml-auto">
                <a href="/index.php/projects/" class="cta d-flex align-items-center justify-content-center">
                <div class="cta__line"></div>
                    <div class="text-center d-flex align-items-center">
                        <h1>Projects</h1>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </a>
            </div>
            <div class="col-6 col-lg-5 mr-auto">
                <a href="#" class="cta d-flex align-items-center justify-content-center">
                    <div class="cta__line"></div>
                    <div class="text-center d-flex align-items-center">
                        <h1>Studio</h1>
                        <i class="fas fa-arrow-right"></i>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <div class="footer-home py-4 mt-4">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <p>↑ 45°04'13" → 7°41'12"</p>
                <div class="footer__line"></div>
                
            </div>
            <div class="d-flex align-items-center">
                <a href="#">info@agenzialem.it</a>
                <div class="footer__line "></div>
            </div>
        </div>
    </div>
	