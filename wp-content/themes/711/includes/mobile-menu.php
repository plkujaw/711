<section class="mobile-menu">

  
  <div class="header__menu">
    <div class="header__menu__button"></div>
  </div>
  <nav class="mobile-menu__nav">
    
    <?php  wp_nav_menu( array(
      'theme_location' => 'header-nav',
      'menu_class' => 'mobile-menu__nav__list',
      ) )?>

<span class="nav__back-to-top">
  <a href="#">BACK TO THE TOP</a>
</span>
</nav>


</section>