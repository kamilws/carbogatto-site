<?php get_header(); ?>
<?php get_partial('buy/order-modal') ?>
<?php
$frame_name_start = "Carbon1";
$frame_price_start = "44 000 €";

$battery_name_start = "";
$battery_price_start = "";

$motor_name_start = "";
$motor_price_start = "";
?>
  <section class="main buy">
      <?php get_partial('buy/top-block') ?>

    <div class="site-container">
      <div class="container">

        <div class="options-block">
          <!-- Color -->
          <div class="option color-block">
            <div class="block-title">Main design</div>
            <!--value - id цвета в БД data-price - цена данного цвета
               data-default - ставится только у одного цвета - цвета, который выбран по умолчанию
               у одного цвета обязательно должен сразу быть атрибут checked-->
            <div class="row">
              <svg class="hex __carbon" fill="white" fill-opacity="0.1">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <?php $price = 1000 ?>
                <input type="radio" name="color" checked value="Color: Carbon || <?= $price ?>" data-name="Carbon"
                       data-price="<?= $price ?>" data-default="true" data-fill="carbon"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/standart.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/standart_half.png">
                <em></em>
              </label>
              <div class="title __margin-top">Carbon</div>
            </div>
            <div class="row">
              <svg class="hex" fill="#e5b700">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <input type="radio" name="color" value="Color: Yellow || <?= $price ?>" data-name="Yellow" data-price="<?= $price ?>"
                       data-fill="#e5b700"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/yellow.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/yellow_half.png">
                <em></em>
              </label>
              <div class="title __margin-top">Yellow</div>
            </div>
            <div class="row">
              <svg class="hex" fill="#212121">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <input type="radio" name="color" value="Color: Black-red || <?= $price ?>" data-name="Black-red"
                       data-price="<?= $price ?>" data-fill="#212121"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/black-red.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/black-red_half.png">
                <em></em>
              </label>
              <div class="title __margin-top">Black-red</div>
            </div>
            <div class="row">
              <svg class="hex" fill="#9b2821">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <input type="radio" name="color" value="Color: Red || <?= $price ?>" data-name="Red" data-price="<?= $price ?>"
                       data-fill="#9b2821"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/red.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/red_half.png">
                <em></em>
              </label>
              <div class="title __margin-top">Red</div>
            </div>
            <div class="row">
              <svg class="hex" fill="#00a4f0">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <input type="radio" name="color" value="Color: Blue || <?= $price ?>" data-name="Blue" data-price="<?= $price ?>"
                       data-fill="#00a4f0"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/blue.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/blue_half.png">
                <em></em>
              </label>
              <div class="title __margin-top">Blue</div>
            </div>
            <div class="row">
              <svg class="hex" fill="#806b2a">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <input type="radio" name="color" value="Color: Camo || <?= $price ?>" data-name="Camo" data-price="<?= $price ?>"
                       data-fill="#806b2a"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/camo.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/camo_half.png">
                <em></em>
              </label>
              <div class="title __margin-top">Camo</div>
            </div>
            <div class="row">
              <svg class="hex" fill="white">
                <use xlink:href="#svg-hex-border-grey"></use>
              </svg>
              <?php $price = 500 ?>
              <label class="button">
                <input type="radio" name="color" value="Color: White || <?= $price ?>" data-name="White" data-price="<?= $price ?>"
                       data-fill="white"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/white.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/white_half.png">
                <em></em>
              </label>
              <div class="title __margin-top">White</div>
            </div>
          </div>
          <!-- /Color -->

          <!-- Details -->
          <div class="option details-control">
            <div class="block-title">Handles, Supports AND Seat COLOR</div>
            <div class="row">
              <svg class="hex" fill="black">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <?php $price = 250 ?>
                <!--В value помещаем id конкретной выбранной опцииdata-default - логика такая же как и у цвета-->
                <input type="radio" name="details" checked value="Handles, Supports AND Seat COLOR: Black || <?= $price ?>"
                       data-default="true" data-fill="black"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_details.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_details_half.png">
                <em></em>
              </label>
              <!--При изменении радиокнопки цена из блока .price учитывается в пересчетеобщей цены (блок .total-price выше) и для вывода в шапке (блок .frame-price, .battery-price, ...)-->
              <div class="price"><?= $price ?> €</div>
              <div class="title __margin-top">Black</div>
            </div>
            <div class="row">
              <svg class="hex" fill="#9b2821">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                  <?php $price = 150 ?>
                <input type="radio" name="details" value="Handles, Supports AND Seat COLOR: RED || <?= $price ?>"
                       data-fill="#9b2821"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/red_details.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/red_details_half.png">
                <em></em>
              </label>
              <div class="price"><?= $price ?> €</div>
              <div class="title __margin-top">Red</div>
            </div>
          </div>
          <!-- /Details -->

          <!-- Links -->
          <div class="option links-control">
            <div class="block-title">Links Color</div>
            <div class="row">
              <svg class="hex" fill="#adc3c5">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                  <?php $price = 200 ?>
                <input type="radio" name="links" checked value="Links Color: Allunium Matted || <?= $price ?>"
                  data-default="true" data-fill="#adc3c5"
                  data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/allim_links.png"
                  data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/allim_links_half.png">
                <em></em>
              </label>
              <!--При изменении радиокнопки цена из блока .price учитывается в пересчетеобщей цены (блок .total-price выше) и для вывода в шапке (блок .frame-price, .battery-price, ...)-->
              <div class="price"><?= $price ?> €</div>
              <div class="title __margin-top">Allunium Matted</div>
            </div>
            <div class="row">
              <svg class="hex" fill="black">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                  <?php $price = 100 ?>
                <input type="radio" name="links" value="Links Color: Black Matted || <?= $price ?>" data-fill="black"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_links.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_links_half.png">
                <em></em>
              </label>
              <div class="price"><?= $price ?> €</div>
              <div class="title __margin-top">Black Matted</div>
            </div>
            <div class="row">
              <div class="hex __gradient"></div>
              <label class="button">
                <input type="radio" name="links" value="Links Color: Individual Color: || 0" data-fill="gradient"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/allim_links.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/allim_links_half.png">
                <em></em>
              </label>
              <div class="title __margin-top __individual">Individual Color</div>
              <input class="individual" placeholder="Describe your wishes" form="order-form"
                     name="individual-color">
            </div>
          </div>
          <!-- /Links -->

          <!-- Frame -->
          <div class="option frame-control">
            <div class="block-title">Frame</div>
              <?php
              $acces = new WP_Query(array(
                  'post_type' => 'config',
                  'config_category' => 'FRAME'));
              if ($acces->have_posts()):
                  $acces->the_post();
                  ?>
                <div class="row">
                  <label class="button">
                    <input type="radio"
                           value="Frame: <?php echo the_title(); ?> || <?= get_field('price_conf'); ?>"
                           checked name="frame">
                    <em></em>
                  </label>
                  <div class="price"><?php echo get_field('price_conf'); ?></div>
                  <div class="title"><?php the_title(); ?></div>
                  <div class="desc">
                      <?php get_partial('buy/info-pop-up') ?>
                    <span class="info-icon"></span>
                    <span class="desc-text"><?php echo(get_the_excerpt()); ?></span>
                  </div>
                </div>
              <?php endif;
              while ($acces->have_posts()):
                  $acces->the_post();
                  ?>
                  <?php $post_id2 = get_the_ID(); ?>
                <div class="row">
                  <label class="button">
                    <input type="radio"
                           value="Frame: <?php echo the_title(); ?> || <?php echo get_field('price_conf'); ?>"
                           name="frame">
                    <em></em>
                  </label>
                  <div class="price"><?php echo get_field('price_conf'); ?></div>
                  <div class="title"><?php the_title(); ?></div>
                  <div class="desc">
                      <?php get_partial('buy/info-pop-up') ?>
                    <span class="info-icon"></span>
                    <span class="desc-text"><?php echo(get_the_excerpt()); ?></span>
                  </div>
                </div>
              <?php endwhile; ?>
          </div>
          <!-- /Frame -->

          <!-- Battery -->
          <div class="option battery-control">
            <div class="block-title">Battery</div>
              <?php
              $acces = new WP_Query(array(
                  'post_type' => 'config',
                  'config_category' => 'BATTERY'));
              if ($acces->have_posts()):
                  $acces->the_post();
                  ?>
                <div class="row">
                  <label class="button">
                    <input type="radio"
                           value="Battery: <?php echo the_title(); ?>  || <?php echo get_field('price_conf'); ?>"
                           checked name="battery">
                    <em></em>
                  </label>
                  <div class="price"><?php echo get_field('price_conf'); ?></div>
                  <div class="title"><?php the_title(); ?></div>
                  <div class="desc">
                      <?php get_partial('buy/info-pop-up') ?>
                    <span class="info-icon"></span>
                    <span class="desc-text"><?php echo(get_the_excerpt()); ?></span>
                  </div>
                </div>
              <?php endif;
              while ($acces->have_posts()):
                  $acces->the_post();
                  ?>
                <div class="row">
                  <label class="button">
                    <input type="radio"
                           value="Battery: <?php echo the_title(); ?>  || <?php echo get_field('price_conf'); ?>"
                           checked name="battery">
                    <em></em>
                  </label>
                  <div class="price"><?php echo get_field('price_conf'); ?></div>
                  <div class="title"><?php the_title(); ?></div>
                  <div class="desc">
                      <?php get_partial('buy/info-pop-up') ?>
                    <span class="info-icon"></span>
                    <span class="desc-text"><?php echo(get_the_excerpt()); ?></span>
                  </div>
                </div>
              <?php endwhile; ?>
          </div>
          <!-- /Battery -->

          <!-- Motor -->
          <div class="option motor-control">
            <div class="block-title">Motor</div>
              <?php
              $acces = new WP_Query(array(
                  'post_type' => 'config',
                  'config_category' => 'MOTOR'));
              if ($acces->have_posts()):
                  $acces->the_post();
                  ?>
                <div class="row">
                  <label class="button">
                    <input type="radio"
                           value="Motor: <?php echo the_title(); ?> || <?php echo get_field('price_conf'); ?>"
                           checked name="motor">
                    <em></em>
                  </label>
                  <div class="price"><?php echo get_field('price_conf'); ?></div>
                  <div class="title"><?php the_title(); ?></div>
                  <div class="desc">
                      <?php get_partial('buy/info-pop-up') ?>
                    <span class="info-icon"></span>
                    <span class="desc-text"><?php echo(get_the_excerpt()); ?></span>
                  </div>
                </div>
              <?php endif;
              while ($acces->have_posts()):
                  $acces->the_post();
                  ?>
                <div class="row">
                  <label class="button">
                    <input type="radio"
                           value="Motor: <?php echo the_title(); ?> || <?php echo get_field('price_conf'); ?>"
                           name="motor">
                    <em></em>
                  </label>
                  <div class="price"><?php echo get_field('price_conf'); ?></div>
                  <div class="title"><?php the_title(); ?></div>
                  <div class="desc">
                      <?php get_partial('buy/info-pop-up') ?>
                    <span class="info-icon"></span>
                    <span class="desc-text"><?php echo(get_the_excerpt()); ?></span>
                  </div>
                </div>
              <?php endwhile; ?>
          </div>
          <!-- /Motor -->

          <!-- Tyres -->
          <div class="option tyres-control">
            <div class="block-title">Tyres</div>
              <?php
              $acces = new WP_Query(array(
                  'post_type' => 'config',
                  'config_category' => 'TYRES'));
              if ($acces->have_posts()):
                  $acces->the_post();
                  ?>
                <div class="row">
                  <label class="button">
                    <input type="radio"
                           value="Tyres: <?php echo the_title(); ?> || <?php echo get_field('price_conf'); ?>"
                           checked name="tyres">
                    <em></em>
                  </label>
                  <div class="price"><?php echo get_field('price_conf'); ?></div>
                  <div class="title"><?php the_title(); ?></div>
                  <div class="desc">
                      <?php get_partial('buy/info-pop-up') ?>
                    <span class="info-icon"></span>
                    <span class="desc-text"><?php echo(get_the_excerpt()); ?></span>
                  </div>
                </div>
              <?php endif;
              while ($acces->have_posts()):
                  $acces->the_post();
                  ?>
                <div class="row">
                  <label class="button">
                    <input type="radio"
                           value="Tyres: <?php echo the_title(); ?> || <?php echo get_field('price_conf'); ?>"
                           name="tyres">
                    <em></em>
                  </label>
                  <div class="price"><?php echo get_field('price_conf'); ?></div>
                  <div class="title"><?php the_title(); ?></div>
                  <div class="desc">
                      <?php get_partial('buy/info-pop-up') ?>
                    <span class="info-icon"></span>
                    <span class="desc-text"><?php echo(get_the_excerpt()); ?></span>
                  </div>
                </div>
              <?php endwhile; ?>
          </div>
          <!-- /Tyres -->
        </div>
      </div>
    </div>
  </section>
<?php get_footer(); ?>