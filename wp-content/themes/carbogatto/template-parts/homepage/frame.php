<div class="frame-block vh-slide">
    <?php get_partial('homepage/desktop-preloader') ?>
  <div class="site-container">
    <div class="container">
      <div class="title __absolute">Frame</div>
      <div class="relative-container">
        <div class="video-container">
          <div class="top-line"></div>
          <div class="preloader"></div>
          <!--В data-duration выводим продолжительность видео на 1 десятую меньше чем на самом делевсе уже выведено правильно, трогать не нужно-->
          <video preload="auto"
                 muted
                 playsinline
                 data-duration="4.9"
                 data-speed="17"
                 data-poster="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/frame-poster.jpg"
                 data-poster-mob="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/frame-poster-mob.jpg"
                 data-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/frame.mp4"
                 data-src-mob="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/frame-mob.mp4"></video>
          <div class="bottom-line"></div>
        </div>
        <div class="carbon lozad __frame">
          <div class="line"></div>
          <div class="text">CARBON MADE FRAME WITH LIGHT WEIGHT</div>
          <div class="line"></div>
        </div>
      </div>
      <div class="text-block">
        <p>The City Racer gives you back your city. With its strong performance, CARBO GATTO leaves
          everything behind them. The slender design provides for true pleasure of driving and even brings
          a smile to the faces of first-time motorbike riders.</p>
      </div>
    </div>
  </div>
</div>