 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/fzt2ywp.css">
    <title>Document</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div id="page" class="site">
      <header class="header">
        <div class="header__row">
          <div class="header__logo">
            <div class="header__logo__logomark">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
            </div>
            <div class="header__logo__logotype">
              <p>711 Fifth Avenue</p>
            </div>
          </div>
          <nav class="header__nav">
            <ul class="header__nav__list">
              <li><a href="">LOCATION</a></li>
              <li><a href="">THE BUILDNG</a></li>
              <li><a href="">CONTACT</a></li>
              <!-- <li class="nav__back-to-top"><a href="">BACK TO THE TOP</a></li> -->
            </ul>
          </nav>
        </div>
      </header>

      <section class="hero">
        <div class="hero__title">
          <p>RISE ABOVE THE REST</p>
        </div>
      </section>

      <div class="content">

        <section class="intro">


        </section>

        <section class="the-building">


        </section>


        <section class="location">


        </section>
      
        <section class="contact">
          
        </section>

      </div>


      <footer class="footer">
        <section class="footer__copy">
          <p>711 Fifth Avenue - <?php the_time('Y'); ?> - All Rights Reserved</p>
        </section>
      </footer>
    </div>
  </body>
</html>