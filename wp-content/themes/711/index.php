 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.typekit.net/fzt2ywp.css">
    <?php wp_head(); ?>
    <title><?php echo bloginfo('name'); ?></title>
  </head>
  <body>
    <div id="page" class="site">
      
    <?php get_template_part('includes/header') ?>
    <?php get_template_part('includes/mobile-menu') ?>

      <section class="hero">
        <div class="hero__title">
          <p><?php the_field('hero_title') ?></p>
        </div>
        <figure class="hero__smoke hero__smoke--1 rellax" data-rellax-speed="4">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smoke-1-l.png" alt="">
        </figure>

        <figure class="hero__smoke hero__smoke--2 rellax">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smoke-1-r.png" alt="">
        </figure>
      </section>
    
      <main class="content">

        <div class="intro__gradient">
        </div>
        <section class="intro scroll-fade">

          <?php if(have_rows('intro_image')): ?>
            <div class="intro__images">
              <?php while(have_rows('intro_image')): the_row(); ?>

                <?php $intro_image = get_sub_field('image'); ?>
                <div class="intro__image">
                  <img src="<?php echo $intro_image['url'] ?>" alt="<?php echo $intro_image['alt'] ?>">
                </div>

    
              <?php endwhile; ?>   
            </div>
          <?php endif; ?>

        </section>

        <section class="the-building">
          <article class="the-building__title scroll-fade" id="building">
            <h1><?php the_field('building_section_title') ?></h1>
          </article>
          <article class="the-building__copy scroll-fade">
            <p><?php the_field('building_section_copy') ?></p>
          </article>

          <div class="the-building__images">
            <figure class="the-building__image the-building__image--1 img-left rellax" data-rellax-speed="-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flat-iron.png" alt="Flat Iron Building">
            </figure>

            <figure class="building-smoke-1 rellax">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smoke-building.png" alt="Flat Iron Building">
            </figure>

            <figure class="the-building__image the-building__image--2 rellax" data-rellax-speed="-1"">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/clock.png" alt="Fifth Avenue Clock">
            </figure>

            <figure class="clock-smoke-1 rellax">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smoke-building.png" alt="Flat Iron Building">
            </figure>

          </div>
            <!-- <figure class="img-prlx rellax building-smoke-1">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smoke-1-l.png" />
            </figure> -->
        </section>


        <section class="location" >

          <div class="location__copy scroll-fade" id="location">

            <div class="location__copy__intro">
              <h3><?php the_field('location_intro') ?></h3>
            </div>

            <div class="location__copy__description">
              <p><?php the_field('location_description') ?></p>
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
      
        <section class="contact" >
          <article class="contact__title scroll-fade" id="contact">
            <h1><?php the_field('contact_section_title') ?></h1>
          </article>

          <?php if(have_rows('contact_office')): ?>
            <?php while(have_rows('contact_office')): the_row(); ?>
          
              <article class="contact__office__location scroll-fade" >

                <p><?php the_sub_field('office_location'); ?></p>
                <div class="contact__office__location__details">
                  <?php if(have_rows('contact_details')): ?>
                    <?php while(have_rows('contact_details')): the_row(); ?>                
                      <div class="contact__office__details">
                      <ul>
                        <li><?php the_sub_field('name'); ?></li>
                        <li>
                            <a href="mailto: <?php the_sub_field('email'); ?>" class="mail">
                              <?php the_sub_field('email'); ?>
                            </a>
                        </li>
                        <li>
                          <a href="tel: <?php the_sub_field('telephone'); ?>"><?php the_sub_field('telephone'); ?>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>
              </article>
            <?php endwhile; ?>
          <?php endif; ?>

          
          
          
          <figure class="img-prlx img-left contact-img-left-bottom rellax">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buildings-1.png" />
          </figure>

          <figure class="img-prlx img-left contact-img-left-top rellax" data-rellax-speed="4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tree-3.png"/>
          </figure>

          <figure class="img-prlx img-right contact-img-right-bottom rellax">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/buildings-2.png">
          </figure>

          <figure class="img-prlx img-right contact-img-right-top rellax" data-rellax-speed="4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/tree-2.png">
          </figure>
    
          
        </section>
        
        <?php get_template_part('includes/footer') ?>
      </main>
    </div>
  </body>
</html>