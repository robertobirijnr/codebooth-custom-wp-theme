 <header class="header sticky-bar">
     <div class="container">
         <div class="main-header">
             <div class="header-left">
                 <div class="header-logo">
                     <a href="index.html" class="d-flex"><img alt="jobhub"
                             src="assets/imgs/theme/jobhub-logo.svg" /></a>
                 </div>
                 <div class="header-nav">
                     <nav class="nav-main-menu d-none d-xl-block">
                         <?php 
                           wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'main-menu'
                           ));
                           ?>
                     </nav>
                     <div class="burger-icon burger-icon-white">
                         <span class="burger-icon-top"></span>
                         <span class="burger-icon-mid"></span>
                         <span class="burger-icon-bottom"></span>
                     </div>
                 </div>
             </div>
             <div class="header-right">
                 <div class="block-signin">
                     <a href="#" class="text-link-bd-btom hover-up">Apply Now</a>
                     <a href="#" class="btn btn-default btn-shadow ml-40 hover-up">Sign in</a>
                 </div>
             </div>
         </div>
     </div>
 </header>