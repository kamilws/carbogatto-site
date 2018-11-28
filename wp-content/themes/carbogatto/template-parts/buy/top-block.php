<div class="fixed-block">
  <div class="site-container relative">
    <div class="container">
      <div class="text-container">
        <div class="title">Create your carbogatto</div>
        <div class="total">
          <i>total:</i>
          <b><span class="total-price">93 000</span><span>€</span></b>
        </div>
        <div class="button-component __blue __buy-button">Place order</div>
        <div class="main-view">Go to main view</div>
      </div>
        <?php get_partial('buy/params-table') ?>

      <div class="bike-images-block">

        <video class="dots"
               src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/dots-mobile.mp4"
               playsinline muted autoplay loop></video>

        <img class="bike"
             src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/standart.png">
        <img class="details"
             src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_details.png">
        <img class="links"
             src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/allim_links.png">
      </div>
    </div>
  </div>
</div>

<!-- Top block -->
<div class="top-block">
  <video class="dots"
         data-mob-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/dots-mobile.mp4"
         data-desktop-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/dots-desktop.mp4"
         playsinline muted autoplay loop></video>
  <div class="site-container">
    <div class="title">Create your carbogatto</div>
    <div class="view">
      <div class="view-title">View</div>
      <div class="view-value">
        <label>
          <input type="radio"
                 name="view-type"
                 value="side"
                 checked>
          <span>side</span>
        </label>
        <label>
          <input type="radio"
                 name="view-type"
                 value="half">
          <span>half</span>
        </label>
      </div>
    </div>
    <div class="bike-images-block">
      <img class="bike"
           src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/standart.png">
      <img class="details"
           src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_details.png">
      <img class="links"
           src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/allim_links.png">
    </div>
    <div class="params">
      <div class="container">
          <?php get_partial('buy/params-table') ?>
        <div class="button">
          <!--После нажатия на эту кнопку собранные байк кладется в корзину-->
          <div class="button-component __blue __buy-button">Place order</div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Top block -->

<!-- Total -->
<div class="total-block">
  <div class="site-container">
    <div class="container">
      <small>Select items to customize your bike</small>
      <em><i>total:</i><b><span class="total-price">93 000</span><span>€</span></b></em></div>
  </div>
</div>
<!-- /Total -->