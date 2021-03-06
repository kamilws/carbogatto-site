<div class="suspension-block __front vh-slide">
  <?php get_partial('homepage/scroll-icon') ?>
  <?php get_partial('homepage/desktop-preloader') ?>
  <div class="site-container">
    <div class="container">
      <div class="title __absolute">
        <span>Suspension</span>
      </div>
      <div class="relative-container">
        <div class="video-container">
          <div class="preloader"></div>
          <div class="top-line"></div>
          <video preload="auto"
                 muted
                 playsinline
                 data-duration="9.8"
                 data-speed="35"
                 data-poster="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/sus-poster.jpg?ver=7"
                 data-poster-mob="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/sus-poster-mob.jpg?ver=7"
                 data-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/sus.mp4"
                 data-src-mob="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/sus-mob.mp4?ver=7"></video>
          <div class="bottom-line"></div>
        </div>
        <div class="bike lozad __sus-bike">
          <div class="icon">
              <?php get_partial('homepage/sus-bike-icon') ?>
            <img class="shocks"
                 src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/sus-bike-front.png">
          </div>
          <span>Adjustable suspension</span>
        </div>
      </div>
      <div class="text-block">
        <div class="logos lozad __sus-logos"></div>
        <p>Relaxed travelling on your daily tour of the city with an average range of 50 to 60 kilometres.
          This is how to charge the battery: Simply remove the battery box and plug into any socket with
          the battery charger. The battery can of course be charged whilst the box remains in the CARBO
          GATTO. The battery box is secured against unauthorized access. The high quality BMS Battery
          Management System protects against short circuits and excess current.</p>
      </div>
      <img class="arrow-down" src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/arrow-down.png">
    </div>
  </div>
</div>
