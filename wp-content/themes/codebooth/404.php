<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <title>Jobhub - Job Board HTML Website Template</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg" />
    <!-- Template CSS -->
    <?php wp_head();?>

</head>

<body>
    <!-- Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <img src="assets/imgs/theme/loading.gif" alt="jobhub" />
                </div>
            </div>
        </div>
    </div> -->
    <?php get_header()?>
    <div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
        <div class="mobile-header-wrapper-inner">
            <div class="mobile-header-top">
                <div class="user-account">
                    <img src="assets/imgs/avatar/ava_1.png" alt="jobhub" />
                    <div class="content">
                        <h6 class="user-name">Howdy, <span class="text-brand">AliThemes</span></h6>
                        <p class="font-xs text-muted">You have 2 new messages</p>
                    </div>
                </div>
                <div class="burger-icon burger-icon-white">
                    <span class="burger-icon-top"></span>
                    <span class="burger-icon-mid"></span>
                    <span class="burger-icon-bottom"></span>
                </div>
            </div>
            <div class="mobile-header-content-area">
                <div class="perfect-scroll">
                    <div class="mobile-search mobile-header-border mb-30">
                        <form action="#">
                            <input type="text" placeholder="Search for items…" />
                            <i class="fi-rr-search"></i>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-border">
                        <!-- mobile menu start -->

                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-account">
                        <h6 class="mb-10">Your Account</h6>
                        <ul class="mobile-menu font-heading">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Work Preferences</a></li>
                            <li><a href="#">My Boosted Shots</a></li>
                            <li><a href="#">My Collections</a></li>
                            <li><a href="#">Account Settings</a></li>
                            <li><a href="#">Go Pro</a></li>
                            <li><a href="#">Sign Out</a></li>
                        </ul>
                    </div>
                    <div class="mobile-social-icon mb-50">
                        <h6 class="mb-25">Follow Us</h6>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-facebook.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-twitter.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-instagram.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-pinterest.svg" alt="jobhub" /></a>
                        <a href="#"><img src="assets/imgs/theme/icons/icon-youtube.svg" alt="jobhub" /></a>
                    </div>
                    <div class="site-copyright">Copyright 2022 © JobHub. <br />Designed by AliThemes.</div>
                </div>
            </div>
        </div>
    </div>
    <!--End header-->
    <!-- Content -->
    <main class="main">
        <section class="section-box">
            <div class="box-head-single">
                <div class="container">
                    <h3><?php the_title() ?></h3>
                    <ul class="breadcrumbs">
                        <li><a href="#">Home</a></li>
                        <li>Jobs listing</li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section-box mt-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="content-single">
                            404
                        </div>



                    </div>
                </div>
            </div>
        </section>




    </main>
    <!-- End Content -->
    <!-- Footer -->
    <?php get_footer();?>

    <?php wp_footer();?>
    <!-- End Footer -->

</body>

</html>