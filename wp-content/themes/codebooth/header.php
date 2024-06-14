 <!DOCTYPE html>
 <html class="no-js" lang="en">

 <head>
     <meta charset="utf-8" />
     <title><?php wp_title(); ?></title>
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
     <header class="header sticky-bar">
         <div class="container">
             <div class="main-header">
                 <div class="header-left">
                     <div class="header-logo">
                         <a href="index.html" class="d-flex"><?php bloginfo('name'); ?></a>
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