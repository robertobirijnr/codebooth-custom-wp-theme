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
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="single-image-feature">
                        <figure><img alt="jobhub" src="assets/imgs/page/job-single/img-job-feature.png"
                                class="img-rd-15" />
                        </figure>
                    </div>
                    <div class="content-single">
                        <?php the_content(); ?>
                    </div>

                    <div class="single-apply-jobs">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <a href="#" class="btn btn-default mr-15">Apply now</a>
                                <a href="#" class="btn btn-border">Save job</a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
                    <div class="sidebar-shadow">
                        <div class="sidebar-heading">
                            <div class="avatar-sidebar">
                                <figure><img alt="jobhub" src="assets/imgs/page/job-single/avatar-job.png" />
                                </figure>
                                <div class="sidebar-info">
                                    <span class="sidebar-company">AliStudio, Inc</span>
                                    <span class="sidebar-website-text">alithemes.com</span>
                                    <div class="dropdowm">
                                        <button class="btn btn-dots btn-dots-abs-right dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false"></button>
                                        <ul class="dropdown-menu dropdown-menu-light">
                                            <li><a class="dropdown-item" href="#">Contact</a></li>
                                            <li><a class="dropdown-item" href="#">Bookmark</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-description mt-15">
                            We're looking to add more product designers to our growing teams.
                        </div>
                        <div class="text-start mt-20">
                            <a href="#" class="btn btn-default mr-10">Apply now</a>
                            <a href="#" class="btn btn-border">Save job</a>
                        </div>
                        <div class="sidebar-list-job">
                            <ul>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-briefcase"></i></div>
                                    <div class="sidebar-text-info">
                                        <span class="text-description">Job Type</span>
                                        <strong class="small-heading">Full-time / Remote</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-marker"></i></div>
                                    <div class="sidebar-text-info">
                                        <span class="text-description">Location</span>
                                        <strong class="small-heading">Dallas, Texas<br />Remote Friendly</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-dollar"></i></div>
                                    <div class="sidebar-text-info">
                                        <span class="text-description">Salary</span>
                                        <strong class="small-heading">$35k - $45k</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-clock"></i></div>
                                    <div class="sidebar-text-info">
                                        <span class="text-description">Date posted</span>
                                        <strong class="small-heading">1 hours ago</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="sidebar-icon-item"><i class="fi-rr-time-fast"></i></div>
                                    <div class="sidebar-text-info">
                                        <span class="text-description">Expiration date</span>
                                        <strong class="small-heading">April 06, 2022</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="sidebar-team-member pt-40">
                            <h6 class="small-heading">Team member</h6>
                            <div class="sidebar-list-member">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <figure><img alt="jobhub" src="assets/imgs/page/job-single/avatar1.png" />
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure><img alt="jobhub" src="assets/imgs/page/job-single/avatar2.png" />
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure><img alt="jobhub" src="assets/imgs/page/job-single/avatar3.png" />
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure><img alt="jobhub" src="assets/imgs/page/job-single/avatar4.png" />
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure><img alt="jobhub" src="assets/imgs/page/job-single/avatar5.png" />
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure><img alt="jobhub" src="assets/imgs/page/job-single/avatar6.png" />
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure><img alt="jobhub" src="assets/imgs/page/job-single/avatar7.png" />
                                            </figure>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <figure><img alt="jobhub" src="assets/imgs/page/job-single/avatar8.png" />
                                            </figure>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-team-member pt-40">
                            <h6 class="small-heading">Contact Info</h6>
                            <div class="info-address">
                                <span><i class="fi-rr-marker"></i> <span>Campbell Ave undefined Kent, Utah 53127
                                        United
                                        States</span></span>
                                <span><i class="fi-rr-headset"></i> <span>(+91) - 540-025-124553 </span></span>
                                <span><i class="fi-rr-paper-plane"></i> <span>contact@nestmart.com</span></span>
                                <span><i class="fi-rr-time-fast"></i> <span>10:00 - 18:00, Mon - Sat </span></span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-normal">
                        <div>
                            <h6 class="small-heading">Are you also hiring?</h6>
                            <ul class="ul-lists">
                                <li><a href="#">Writing & Translation</a></li>
                                <li><a href="#">Video & Animation</a></li>
                                <li><a href="#">Music & Audio</a></li>
                                <li><a href="#">Digital Marketing</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Programming & Tech</a></li>
                            </ul>
                        </div>
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