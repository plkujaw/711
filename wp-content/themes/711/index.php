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
      
    <?php get_template_part('includes/header') ?>

      <section class="hero">
        <div class="hero__title">
          <p>RISE ABOVE THE REST</p>
        </div>
        <figure class="hero__smoke hero__smoke--1">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smoke-1-l.png" alt="">
        </figure>
        <!-- <figure class="hero__smoke hero__smoke--2">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smoke-1-r.png" alt="">
        </figure> -->
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

        <section class="the-building" id="building">
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


        <section class="location" id="location">

          <div class="location__copy">

            <div class="location__copy__intro">
              <h3>The avenue of opportunity with over a century of world-leading retail</h3>
            </div>

            <div class="location__copy__description">
              <p>Fifth Avenue, Manhattan. An unrivalled shopping address. Lined with luxury brands, high street heroes and pioneering tech brands, this vibrant, bustling area continues to prosper from visitor spending power, showing no signs of slowing down.</p>
            </div>
          </div>

          <div class="location__map">
            <figure class="location__map__map-image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/map.png" alt="">
            </figure>
            <figure class="location__map__over-image location__map__over-image--1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/people.png" alt="">
            </figure>
            <figure class="location__map__over-image location__map__over-image--2">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tree-1.png" alt="">
            </figure>
          </div>
        </section>
      
        <section class="contact" id="contact">
          <article class="contact__title">
            <h1>Unlock a legacy of success</h1>
          </article>

          <article class="contact__office__location">
            <p>LONDON</p>

            <div class="contact__office__location__details">
              <div class="contact__office__details">
                <ul>
                  <li>Sam Foyle</li>
                  <li><a href="mailto: SFoyle@savills.com" class="mail">SFoyle@savills.com</a></li>
                  <li><a href="tel: +44 (0)7764348689">+44 (0)7764348689</a></li>
                </ul>
              </div>
              <div class="contact__office__details">
                <ul>
                  <li>Sam Foyle</li>
                  <li><a href="mailto: SFoyle@savills.com" class="mail">SFoyle@savills.com</a></li>
                  <li><a href="tel: +44 (0)7764348689">+44 (0)7764348689</a></li>
                </ul>
              </div>
              <div class="contact__office__details">
                <ul>
                  <li> Anthony Selwyn</li>
                  <li><a href="mailto: ASelwyn@savills.com" class="mail">ASelwyn@savills.com</a></li>
                  <li><a href="tel: +44 (0)7917657747">+44 (0)7917657747</a></li>
                </ul>
              </div>
            </div>
          </article>

          <article class="contact__office__location">
            <p>NEW YORK</p>
            <div class="contact__office__location__details">
              <div class="contact__office__details">
                <ul>
                  <li>Gene Spiegelman</li>
                  <li><a href="mailto: gspiegelman@ripcony.com" class="mail">gspiegelman@ripcony.com</a></li>
                  <li><a href="tel: +1 212.219.7045">+1 212.219.7045</a></li>
                </ul>
              </div>
            </div>
          </article>
        </section>
      </div>
      
    <?php get_template_part('includes/footer') ?>
