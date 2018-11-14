<div class="stand-block vh-slide">
    <?php get_partial('homepage/desktop-preloader') ?>
  <div class="site-container">
    <div class="container">
      <div class="title __absolute">Stand</div>
      <div class="relative-container">
        <div class="video-container">
          <div class="top-line"></div>
          <div class="preloader"></div>
          <video preload="auto"
                 muted
                 playsinline
                 data-duration="9.8"
                 data-speed="35"
                 data-poster="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/stand-poster.jpg"
                 data-poster-mob="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/stand-poster-mob.jpg"
                 data-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/stand.mp4"
                 data-src-mob="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/stand-mob.mp4"></video>
          <div class="bottom-line"></div>
        </div>
        <div class="bike lozad __stand">
            <?php get_partial('homepage/stand-bike-icon') ?>
          Integrated <br> in the design stand
        </div>
      </div>
      <div class="text-block">
        <p>Back wheel hub electric motor, brushless. 45 km/h and 25 km/h to be chosen from and are perfect
          for the city centre. 2 kW. More powerful motors available upon request. 4 drive modes can be
          selected via the handlebar push-button</p>
      </div>
      <img class="arrow-down" src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/arrow-down.png">
    </div>
  </div>
</div>
