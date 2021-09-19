<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
   <meta charset="<?php bloginfo('charset');?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head();?>
</head>


<body <?php body_class();?>>

<?php wp_body_open();?>

   <div class="header-top">
      <div class="container clearfix">
         <div class="left-col col">
            <a class="email" href="mailto:support@waxomtamplate.com"><i class="fas fa-envelope"></i> support@waxomtamplate.com</a>
            <span class="contact-num"><i class="fas fa-phone-volume"></i> +440 875369208</span>
         </div>

         <div class="right-col col">
            <div class="social-icons">
               <a href="#"><i class="fab fa-facebook-square"></i></a>
               <a href="#"><i class="fab fa-twitter"></i></a>
               <a href="#"><i class="fab fa-instagram-square"></i></a>
               <a href="#"><i class="fab fa-vimeo-v"></i></a>
            </div>
         </div>
      </div>
   </div>

   <header id="site-header" class="header-white">
      <div class="header-inner">
         <div class="clearfix">
            <div class="logo">
               <a href="#">
                  <img class="logo-black" src="img/logo-black.png" alt="Logo Black">
               </a>
            </div>

            <div class="menu-toggle">
               <i class="fas fa-bars"></i>
            </div>

            <nav id="main-menu">
               <ul class="menu">
                  <li><a href="#">Home</a></li>
                  <li class="menu-item-has-children">
                     <a href="#">Features</a>
                     <ul class="sub-menu">
                        <li><a href="#">Our Activities</a></li>
                        <li><a href="#">What We Do</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Why Waxom?</a></li>
                     </ul>
                  </li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Shop</a></li>
                  <li><a href="#">Contacts</a></li>
                  <li class="menu-item-has-children has-megamenu cols-3">
                     <a href="#">Pages</a>
                     <ul class="sub-menu">
                        <li>
                           <a href="#">Column 1</a>
                           <ul class="sub-menu">
                              <li><a href="#">Column</a></li>
                              <li><a href="#">Column 2</a></li>
                              <li><a href="#">Column 3</a></li>
                              <li><a href="#">Column 4</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#">About us</a>
                           <ul class="sub-menu">
                              <li><a href="#">About us</a></li>
                              <li><a href="#">About us 2</a></li>
                              <li><a href="#">About us 3</a></li>
                              <li><a href="#">About us 4</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#">Shortcodes</a>
                           <ul class="sub-menu">
                              <li><a href="#">Accordion</a></li>
                              <li><a href="#">Counter</a></li>
                              <li><a href="#">Table</a></li>
                              <li><a href="#">Progress bar</a></li>
                           </ul>
                        </li>
                     </ul>
                  </li>
               </ul>

               <span class="header-search"><i class="fas fa-search"></i></span>

               <form class="header-serach-form" action="" method="GET">
                  <div class="form-fields">
                     <input class="search-field" type="text" name="q" placeholder="Enter Keywords...">
                     <button type="submit"><i class="fas fa-search"></i></button>
                  </div>
               </form>
            </nav>
         </div>
      </div>
   </header>