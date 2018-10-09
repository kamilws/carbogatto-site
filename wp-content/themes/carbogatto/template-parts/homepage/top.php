<div class="top-block vh-slide __first">
  <?php get_partial('homepage/desktop-preloader') ?>
  <div class="site-container">
    <div class="container">
      <div class="video-block">
        <a href="#" class="scroll-icon"></a>
        <!--В data-duration выводим продолжительность видео. Выводим чуть меньше на пару десятых секунды, чтобы неуйти дальше чем у видео реально длинна. все уже веведено, троганить ничего не нужно-->
        <!--видео грузятся сразу preload='auto', предполагается, что они будут хорошо сжатыиначе придется что-то другое придумывать-->
        <!--К data-src станет src с расширением webm|mp4 - js это сделает-->
        <div class="preloader"></div>
        <div class="bottom-line"></div>
        <video preload="auto"
               muted
               playsinline
               data-duration="11.7"
               data-speed="40"
               data-poster="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/top-poster.jpg"
               data-poster-mob="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/top-poster-mob.jpg"
               data-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/top.mp4"
               data-src-mob="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/top-mob.mp4"></video>
      </div>
      <div class="text-block">
        <p>The City Racer gives you back your city. With its strong performance, CARBO GATTO leaves
          everything behind them. The slender design provides for true pleasure of driving and even brings
          a smile to the faces of first-time motorbike riders.</p>
      </div>
      <img class="arrow"
           src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/arrow-down.png">
    </div>
  </div>
</div>