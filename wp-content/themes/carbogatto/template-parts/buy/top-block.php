<div class="top-block">
  <div class="site-container">
    <div class="video-container">
      <video class="dots"
             data-mob-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/dots-mobile.mp4"
             data-desktop-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/dots-desktop.mp4"
             playsinline muted autoplay loop></video>
    </div>
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
        <?php get_partial('buy/params-table') ?>
    </div>
    <div class="button-component __blue __buy-button">Place order</div>
    <div class="to-main-view">Go to main view</div>
  </div>
  <div class="total">
    <div class="container">
      <small>Select items to customize your bike</small>
      <em><i>total:</i><b><span class="total-price">93 000</span><span>€</span></b></em>
    </div>
  </div>
</div>
