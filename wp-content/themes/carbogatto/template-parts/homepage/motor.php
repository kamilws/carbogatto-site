<div class="motor-block vh-slide">
  <?php get_partial('homepage/scroll-icon') ?>
  <?php get_partial('homepage/desktop-preloader') ?>
  <div class="site-container">
    <div class="container">
      <div class="title __absolute">Motor</div>
      <div class="relative-container">
        <div class="video-container">
          <div class="preloader"></div>
          <div class="top-line"></div>
          <video preload="auto"
                 muted
                 playsinline
                 data-duration="6.8"
                 data-speed="24"
                 data-poster="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/motor-poster.jpg?ver=7"
                 data-poster-mob="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/motor-poster-mob.jpg?ver=7"
                 data-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/motor.mp4"
                 data-src-mob="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/motor-mob.mp4?ver=7"></video>
          <div class="bottom-line"></div>
        </div>
        <div class="icons-block lozad __motor">
          <div class="icons-line"></div>
          <div class="icons-row">
              <?php get_partial('homepage/speed-icon') ?>
            <div class="icons-title">45/25 km/h</div>
            <div class="icons-text">Speed</div>
          </div>
          <div class="icons-line"></div>
          <div class="icons-row">
            <svg class="icons-icon __power">
              <use xlink:href="#svg-power"></use>
            </svg>
            <div class="icons-title __pink">2 kW</div>
            <div class="icons-text">Power</div>
          </div>
          <div class="icons-line"></div>
          <div class="icons-row __no-border">
              <?php get_partial('homepage/features-icon') ?>
            <div class="icons-title __yellow">4&nbsp;DRIVE&nbsp;MODES</div>
            <div class="icons-text">features</div>
          </div>
          <a class="button" href="<?php echo home_url(); ?>/support">Support</a>
        </div>
      </div>
      <div class="text-block">
        <p>Back wheel hub electric motor, brushless. 45 km/h and 25 km/h to be chosen from and are perfect
          for the city centre. 2 kW. More powerful motors available upon request. 4 drive modes can be
          selected via the handlebar push-button: Eco / Custom / Sport / Wheely.</p>
      </div>
      <img class="arrow-down" src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/arrow-down.png">
    </div>
  </div>
</div>
