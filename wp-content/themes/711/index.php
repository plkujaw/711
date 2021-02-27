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
              <li><a href="">THE BUILDING</a></li>
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
        <div class="hero__smoke hero__smoke--1">
          
        </div>
        <div class="hero__smoke hero__smoke--2">

        </div>
      </section>

      <div class="content">

        <div class="intro__gradient">
        </div>
        <section class="intro">
          <div class="intro__images">
            <div class="intro__image intro__image--1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/intro-1.jpg" alt="">
            </div>
            <div class="intro__image intro__image--2">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/intro-2.jpg" alt="">
            </div>
          </div>
        </section>

        <section class="the-building">
          <article class="the-building__title">
            <h1>An attraction that stands the test of time</h1>
          </article>
          <article class="the-building__copy">
            <p>
              Within an increasingly complex market, Fifth Avenue remains a magnetic attraction. New York born and bred department stores established 100 years ago such as Bergdorf Goodman and Saks Fifth Avenue are a testament to the location’s enduring success.
            </p>

            <p>
              Surrounded by Manhattan’s most valuable office space and prestigious residences, the dense population secures this legacy of success for centuries to come.
            </p>
          </article>

          <div class="the-building__images">
            <figure class="the-building__image the-building__image--1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flat-iron.png" alt="">
            </figure>
            <figure class="the-building__image the-building__image--2">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock.png" alt="">
            </figure>
          </div>

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