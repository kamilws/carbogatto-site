<?php get_header(); ?>
<?php get_partial('buy/order-modal') ?>
  <section class="main buy">
      <?php get_partial('buy/top-block') ?>

    <div class="site-container">
      <div class="container">

        <div class="options-block">
          <!-- Color -->
            <?php $price = 10000 ?>
          <div class="option color-block">
            <div class="block-title">Main design</div>
            <div class="row">
              <svg class="hex __carbon" fill="white" fill-opacity="0.1">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <!-- Кнопка-муляж для карбона. Она всегда включена. При нажатии на нее включается дефолтный цвет - карбон -->
              <label class="button __checked __carbon-button">
                <em></em>
              </label>
              <div class="price"><?= $price ?> €</div>
              <div class="title __margin-top __with-hex">Carbon</div>
              <div class="desc __margin-top">
                  <?php get_partial('buy/info-pop-up') ?>
                <span class="info-icon"></span>
                <span class="desc-text">Info about item</span>
              </div>
            </div>
            <!-- Скрытая кнопка для карбона -->
            <input hidden type="checkbox" name="color" checked value="Color: Carbon || <?= $price ?>" data-name="Carbon"
                   data-price="<?= $price ?>" data-default="true" data-fill="carbon"
                   data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/standart.png"
                   data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/standart_half.png">
            <div class="row">
              <svg class="hex" fill="#e5b700">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <!--value - id цвета в БД data-price - цена данного цвета
               data-default - ставится только у одного цвета - цвета, который выбран по умолчанию
               у одного цвета обязательно должен сразу быть атрибут checked-->
                  <?php $price = 11000 ?>
                <input type="checkbox" name="color" value="Color: Yellow || <?= $price ?>" data-name="Yellow"
                       data-price="<?= $price ?>"
                       data-fill="#e5b700"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/yellow.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/yellow_half.png">
                <em></em>
              </label>
              <div class="price"><?= $price - 10000 ?> €</div>
              <div class="title __margin-top __with-hex">Yellow</div>
              <div class="desc __margin-top">
                  <?php get_partial('buy/info-pop-up') ?>
                <span class="info-icon"></span>
                <span class="desc-text">Info about item</span>
              </div>
            </div>
            <div class="row">
              <svg class="hex" fill="#212121">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <input type="checkbox" name="color" value="Color: Black || <?= $price ?>" data-name="Black"
                       data-price="<?= $price ?>" data-fill="#212121"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/black-red.png?ver=2"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/black-red_half.png?ver=2">
                <em></em>
              </label>
              <div class="price"><?= $price  - 10000 ?> €</div>
              <div class="title __margin-top __with-hex">Black</div>
              <div class="desc __margin-top">
                  <?php get_partial('buy/info-pop-up') ?>
                <span class="info-icon"></span>
                <span class="desc-text">Info about item</span>
              </div>
            </div>
            <div class="row">
              <svg class="hex" fill="#9b2821">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <input type="checkbox" name="color" value="Color: Red || <?= $price ?>" data-name="Red"
                       data-price="<?= $price ?>"
                       data-fill="#9b2821"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/red.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/red_half.png">
                <em></em>
              </label>
              <div class="price"><?= $price - 10000 ?> €</div>
              <div class="title __margin-top __with-hex">Red</div>
              <div class="desc __margin-top">
                  <?php get_partial('buy/info-pop-up') ?>
                <span class="info-icon"></span>
                <span class="desc-text">Info about item</span>
              </div>
            </div>
            <div class="row">
              <svg class="hex" fill="#00a4f0">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <input type="checkbox" name="color" value="Color: Blue || <?= $price ?>" data-name="Blue"
                       data-price="<?= $price ?>"
                       data-fill="#00a4f0"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/blue.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/blue_half.png">
                <em></em>
              </label>
              <div class="price"><?= $price - 10000 ?> €</div>
              <div class="title __margin-top __with-hex">Blue</div>
              <div class="desc __margin-top">
                  <?php get_partial('buy/info-pop-up') ?>
                <span class="info-icon"></span>
                <span class="desc-text">Info about item</span>
              </div>
            </div>
            <div class="row">
              <svg class="hex" fill="#806b2a">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <input type="checkbox" name="color" value="Color: Camo || <?= $price ?>" data-name="Camo"
                       data-price="<?= $price ?>"
                       data-fill="#806b2a"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/camo.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/camo_half.png">
                <em></em>
              </label>
              <div class="price"><?= $price - 10000 ?> €</div>
              <div class="title __margin-top __with-hex">Camo</div>
              <div class="desc __margin-top">
                  <?php get_partial('buy/info-pop-up') ?>
                <span class="info-icon"></span>
                <span class="desc-text">Info about item</span>
              </div>
            </div>
            <div class="row">
              <svg class="hex" fill="white">
                <use xlink:href="#svg-hex-border-grey"></use>
              </svg>
                <?php $price = 10500 ?>
              <label class="button">
                <input type="checkbox"
                       name="color"
                       value="Color: White || <?= $price ?>"
                       data-name="White"
                       data-price="<?= $price ?>"
                       data-fill="white"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/white.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/white_half.png">
                <em></em>
              </label>
              <div class="price"><?= $price - 10000 ?> €</div>
              <div class="title __margin-top __with-hex">White</div>
              <div class="desc __margin-top">
                  <?php get_partial('buy/info-pop-up') ?>
                <span class="info-icon"></span>
                <span class="desc-text">Info about item</span>
              </div>
            </div>
          </div>
          <!-- /Color -->

          <!-- Details -->
          <div class="option details-control">
            <div class="block-title">Handles, Supports AND Seat COLOR</div>
            <!-- Дефолтное значение -->
            <input hidden
                   type="checkbox"
                   data-name="Base"
                   data-price="0"
                   data-default="true"
                   data-fill="white"
                   value="Handles, Supports AND Seat COLOR: Base || 0 €"
                   checked
                   data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/main/spacer-thin.png"
                   data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/main/spacer-thin.png">
            <div class="row">
              <svg class="hex" fill="black">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                  <?php $price = 250 ?>
                <!--В value помещаем id конкретной выбранной опцииdata-default - логика такая же как и у цвета-->
                <input type="checkbox"
                       name="details"
                       value="Handles, Supports AND Seat COLOR: Black || <?= $price ?>"
                       data-price="<?= $price ?>"
                       data-name="Black"
                       data-fill="black"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_details.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_details_half.png">
                <em></em>
              </label>
              <!--При изменении радиокнопки цена из блока .price учитывается в пересчетеобщей цены (блок .total-price выше) и для вывода в шапке (блок .frame-price, .battery-price, ...)-->
              <div class="price"><?= $price ?> €</div>
              <div class="title __margin-top __with-hex">Black</div>
              <div class="desc __margin-top">
                  <?php get_partial('buy/info-pop-up') ?>
                <span class="info-icon"></span>
                <span class="desc-text">Info about item</span>
              </div>
            </div>
            <div class="row">
              <svg class="hex" fill="#9b2821">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                  <?php $price = 150 ?>
                <input type="checkbox"
                       name="details"
                       value="Handles, Supports AND Seat COLOR: RED || <?= $price ?>"
                       data-name="RED"
                       data-price="<?= $price ?>"
                       data-fill="#9b2821"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/red_details.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/red_details_half.png">
                <em></em>
              </label>
              <div class="price"><?= $price ?> €</div>
              <div class="title __margin-top __with-hex">Red</div>
              <div class="desc __margin-top">
                  <?php get_partial('buy/info-pop-up') ?>
                <span class="info-icon"></span>
                <span class="desc-text">Info about item</span>
              </div>
            </div>
          </div>
          <!-- /Details -->

          <!-- Links -->
          <div class="option links-control">
            <div class="block-title">Links Color</div>
            <!-- Дефолтное значение -->
            <input hidden
                   type="checkbox"
                   data-name="Base"
                   data-price="0"
                   data-default="true"
                   data-fill="white"
                   value="Links Color: Base || 0 €"
                   checked
                   data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/main/spacer-thin.png"
                   data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/main/spacer-thin.png">
            <div class="row">
              <svg class="hex" fill="#adc3c5">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                  <?php $price = 200 ?>
                <input type="checkbox"
                       value="Links Color: Allunium Matted || <?= $price ?>"
                       data-name="Allunium Matted"
                       data-price="<?= $price ?>"
                       data-fill="#adc3c5"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/allim_links.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/allim_links_half.png">
                <em></em>
              </label>
              <!--При изменении радиокнопки цена из блока .price учитывается в пересчетеобщей цены (блок .total-price выше) и для вывода в шапке (блок .frame-price, .battery-price, ...)-->
              <div class="price"><?= $price ?> €</div>
              <div class="title __margin-top __with-hex">Allunium Matted</div>
              <div class="desc __margin-top">
                  <?php get_partial('buy/info-pop-up') ?>
                <span class="info-icon"></span>
                <span class="desc-text">Info about item</span>
              </div>
            </div>
            <div class="row">
              <svg class="hex" fill="black">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                  <?php $price = 100 ?>
                <input type="checkbox"
                       value="Links Color: Black Matted || <?= $price ?>"
                       data-name="Black Matted"
                       data-price="<?= $price ?>"
                       data-fill="black"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_links.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_links_half.png">
                <em></em>
              </label>
              <div class="price"><?= $price ?> €</div>
              <div class="title __margin-top __with-hex">Black Matted</div>
              <div class="desc __margin-top">
                  <?php get_partial('buy/info-pop-up') ?>
                <span class="info-icon"></span>
                <span class="desc-text">Info about item</span>
              </div>
            </div>
            <div class="row">
              <div class="hex __gradient"></div>
              <label class="button">
                <input type="checkbox"
                       name="links"
                       value="Links Color: Individual Color: || 0"
                       data-name="Individual Color"
                       data-price="0"
                       data-fill="gradient"
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
            <!-- Дефолтное значение -->
            <input hidden
                   type="checkbox"
                   data-name="Base"
                   data-price="0 €"
                   data-default="true"
                   value="Frame: Base || 0 €"
                   checked>
              <?php
              $acces = new WP_Query(array(
                  'post_type' => 'config',
                  'config_category' => 'FRAME'));
              while ($acces->have_posts()):
                  $acces->the_post();
                  ?>
                <div class="row">
                  <label class="button">
                    <input type="checkbox"
                           data-name="<?= the_title() ?>"
                           data-price="<?= get_field('price_conf') ?>"
                           value="Frame: <?php echo the_title(); ?> || <?php echo get_field('price_conf'); ?>">
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
            <!-- Дефолтное значение -->
            <input hidden
                   type="checkbox"
                   data-name="Base"
                   data-price="0 €"
                   data-default="true"
                   value="Battery: Base || 0 €"
                   checked>
              <?php
              $acces = new WP_Query(array(
                  'post_type' => 'config',
                  'config_category' => 'BATTERY'));
              while ($acces->have_posts()):
                  $acces->the_post();
                  ?>
                <div class="row">
                  <label class="button">
                    <input type="checkbox"
                           data-name="<?= the_title() ?>"
                           data-price="<?= get_field('price_conf') ?>"
                           value="Battery: <?php echo the_title(); ?>  || <?php echo get_field('price_conf'); ?>">
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
            <!-- Дефолтное значение -->
            <input hidden
                   type="checkbox"
                   data-name="Base"
                   data-price="0 €"
                   data-default="true"
                   value="Motor: Base || 0 €"
                   checked>
              <?php
              $acces = new WP_Query(array(
                  'post_type' => 'config',
                  'config_category' => 'MOTOR'));
              while ($acces->have_posts()):
                  $acces->the_post();
                  ?>
                <div class="row">
                  <label class="button">
                    <input type="checkbox"
                           data-name="<?= the_title() ?>"
                           data-price="<?= get_field('price_conf') ?>"
                           value="Motor: <?php echo the_title(); ?> || <?php echo get_field('price_conf'); ?>">
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
            <!-- Дефолтное значение -->
            <input hidden
                   type="checkbox"
                   data-name="Base"
                   data-price="0 €"
                   data-default="true"
                   value="Tyres: Base || 0 €"
                   checked>
              <?php
              $acces = new WP_Query(array(
                  'post_type' => 'config',
                  'config_category' => 'TYRES'));
              while ($acces->have_posts()):
                  $acces->the_post();
                  ?>
                <div class="row">
                  <label class="button">
                    <input type="checkbox"
                           data-name="<?= the_title() ?>"
                           data-price="<?= get_field('price_conf') ?>"
                           value="Tyres: <?php echo the_title(); ?> || <?php echo get_field('price_conf'); ?>">
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