<div class="battery-block vh-slide">
    <?php get_partial('homepage/desktop-preloader') ?>
  <div class="site-container">
    <div class="container">
      <div class="title __absolute">Battery</div>
      <div class="relative-container">
        <div class="video-container">
          <div class="preloader"></div>
          <!--В data-duration выводится продолжительность видео - это уже настроено, трогать не надов data-src - путь к видео без расширения (видео у нас 2 типа - mp4 и webm, js сам подставит нужное расширение)-->
          <video preload="auto"
                 muted
                 playsinline
                 data-duration="14.95"
                 data-speed="50"
                 data-poster="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/battery-poster.jpg"
                 data-poster-mob="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/battery-poster-mob.jpg"
                 data-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/battery.mp4"
                 data-src-mob="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/battery-mob.mp4"></video>
          <div class="bottom-line"></div>
        </div>
        <div class="icons-block lozad __battery">
          <div class="icons-line"></div>
          <div class="icons-row">
              <?php get_partial('homepage/battery-icon') ?>
            <div class="icons-title">
              <span class="__number __capacity" data-to="15">0</span>
              <span>A/h</span>
            </div>
            <div class="icons-text">Capacity</div>
          </div>
          <div class="icons-line"></div>
          <div class="icons-row">
            <svg class="icons-icon __voltage">
              <use xlink:href="#svg-voltage"></use>
            </svg>
            <div class="icons-title __pink">
              <span class="__number __voltage" data-to="36">0</span>
              <span>V</span>
            </div>
            <div class="icons-text">Voltage</div>
          </div>
          <div class="icons-line"></div>
          <div class="icons-row">
              <?php get_partial('homepage/range-icon') ?>
            <div class="icons-title __yellow">
              <span class="__number __no-margin __range-from" data-to="50">0</span>
              <span>-</span>
              <span class="__number __range-from" data-to="60">0</span>
              <span>km</span>
            </div>
            <div class="icons-text">Range</div>
          </div>
          <div class="icons-line"></div>
        </div>
      </div>
      <div class="text-block">
        <p>Relaxed travelling on your daily tour of the city with an average range of 50 to 60 kilometres. This is how
          to charge the battery: Simply remove the battery box and plug into any socket with the battery charger. The
          battery can be charged whilst the box remains inside</p>
      </div>
      <img class="arrow-down" src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/arrow-down.png">
    </div>
  </div>
</div>
