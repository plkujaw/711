<header class="header">
  <div class="header__row">
    <div class="header__logo">
      <div class="header__logo__logomark">
        <a href="<?php site_url() ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo"></a>
      </div>
      <div class="header__logo__logotype">
        <p><a href="<?php site_url() ?>">711 Fifth Avenue</a></p>
      </div>
    </div>
    <nav class="header__nav">
        <?php  wp_nav_menu( array(
        'theme_location' => 'header-nav',
        'menu_class' => 'header__nav__list',
      ) )?>
        <span class="nav__back-to-top"><a href="#">BACK TO THE TOP</a></span>
    </nav>
    <div class="header__menu">
      <div class="header__menu__button"></div>
    </div>
  </div>
</header>