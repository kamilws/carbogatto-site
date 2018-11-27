<?php get_header(); ?>

  <!--Модальное окно-->
  <div class="modal-component __order">
    <div class="ct-mc-bg"></div>
    <div class="ct-mc-content-container">
      <!--Форма будет отправлена аяксом после как пользвоатель закончит процедуру заполнения полей заказав форму будут добавлены дополнительные поля для каждого аксессуара и байка, который пользователь положил
         в корзину. Корзина полностью работает на js. Корзина хранится в куках
         как все устроено можно посмотреть на видео
         https://monosnap.com/file/eyJUg8tCq7d7dbxlPEBp748ZVKmvVg
         и можно просто положить пару аксессуров в корзину, собрать пару байков и отправить форму, а в консоли посмотреть
         как именно были отправлены данные-->
      <form class="ct-mc-content" id="order-form" method='post'
            action='<?php echo esc_url(get_template_directory_uri()); ?>/order.php'>
        <svg class="ct-mc-close">
          <use xlink:href="#svg-close"></use>
        </svg>
        <!--Перечень товаров-->
        <div class="order-content">
          <div class="right-text">Your shopping list will be <b>saved</b>. You can use it when you ordering from
            the Accessory and Create & Buy page.
          </div>
          <div class="ct-mc-title">Checkout</div>
          <div class="par">Enter your details to send an invoice</div>
          <div class="clear"></div>
          <div class="form-group">
            <div class="label">Name</div>
            <input type="text" name="firstname" required>
          </div>
          <div class="form-group">
            <div class="label">Phone</div>
            <input type="text" name="tel" required>
          </div>
          <div class="form-group __last">
            <div class="label">Email</div>
            <input type="text" name="email" required>
          </div>

          <!--Все таблицы заполняются динамически - js-->
          <!--Байкиdata-bike-base-price - это базовая цена самого байка, без агрегатов, цена самой основы-->
          <table class="__bikes-table" data-bike-base-price="80000">
            <tr class="__title">
              <td>Bike & customization</td>
              <td class="__quantity">Quantity</td>
              <td class="__bikes-total"></td>
            </tr>
          </table>

          <!--Аксессуары-->
          <table class="__acc-table">
            <tr class="__title">
              <td>Accessories</td>
              <td class="__quantity">Quantity</td>
              <td class="__acc-total"></td>
            </tr>
          </table>

          <!--Итого-->
          <table>
            <tr class="__title __total">
              <td>Total</td>
              <td class="__total-price"></td>
            </tr>
          </table>

          <button class="button-component __blue">Send</button>
          <label class="checkbox">
            <input type="checkbox" required>
            <em>
              <svg>
                <use xlink:href="#svg-check"></use>
              </svg>
            </em>
            <span>Agree to the processing of personal data</span>
          </label>
          <div class="terms"><a href="#">Terms of use</a></div>
        </div>
        <!--После заказа (когда форма будет отправлена аяксом)-->
        <div class="after-order-content">
          <div class="ct-mc-title">Checkout</div>

          <p>Thank you for placing your order. We sent you email to pay for the purchase.</p>
        </div>
      </form>
    </div>
  </div>
  <!-- /Модальное окно -->

<?php
$frame_name_start = "Carbon1";
$frame_price_start = "44 000 €";

$battery_name_start = "";
$battery_price_start = "";

$motor_name_start = "";
$motor_price_start = "";
?>
  <section class="main buy">
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
        <img class="bike"
             src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/models/standart.png">
        <img class="details"
             src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_details.png">
        <img class="links"
             src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/allim_links.png">
        <div class="params">
          <div class="container">
            <table align="center">
              <tr>
                <td><span>Details color:</span><em class="details-name"></em></td>
                <td class="details-price">0 €</td>
              </tr>
              <tr>
                <td><span>Links:</span><em class="links-name"></em></td>
                <td class="links-price">0 €</td>
              </tr>
              <tr>
                <td><span>Frame:</span><em class="frame-name"></em></td>
                <td class="frame-price">0 €</td>
              </tr>
              <tr>
                <td><span>Battery:</span><em class="battery-name"></em></td>
                <td class="battery-price">0 €</td>
              </tr>
              <tr>
                <td><span>Motor:</span><em class="motor-name"></em></td>
                <td class="motor-price">0 €</td>
              </tr>
              <tr>
                <td><span>Tyres:</span><em class="tyres-name"></em></td>
                <td class="tyres-price">0 €</td>
              </tr>
            </table>
            <div class="button">
              <!--После нажатия на эту кнопку собранные байк кладется в корзину-->
              <div class="button-component __blue __buy-button">buy</div>
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
                <input type="radio" name="color" checked value="Color: Carbon" data-name="Carbon"
                       data-price="1000" data-default="true" data-fill="carbon"
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
                <input type="radio" name="color" value="Color: Yellow" data-name="Yellow" data-price="1000"
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
                <input type="radio" name="color" value="Color: Black-red" data-name="Black-red"
                       data-price="1000" data-fill="#212121"
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
                <input type="radio" name="color" value="Color: Red" data-name="Red" data-price="1000"
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
                <input type="radio" name="color" value="Color: Blue" data-name="Blue" data-price="1000"
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
                <input type="radio" name="color" value="Color: Camo" data-name="Camo" data-price="1000"
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
              <label class="button">
                <input type="radio" name="color" value="Color: White" data-name="White" data-price="500"
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
                <!--В value помещаем id конкретной выбранной опцииdata-default - логика такая же как и у цвета-->
                <input type="radio" name="details" checked value="Handles, Supports AND Seat COLOR: Black"
                       data-default="true" data-fill="black"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_details.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_details_half.png">
                <em></em>
              </label>
              <!--При изменении радиокнопки цена из блока .price учитывается в пересчетеобщей цены (блок .total-price выше) и для вывода в шапке (блок .frame-price, .battery-price, ...)-->
              <div class="price">250 €</div>
              <div class="title __margin-top">Black</div>
            </div>
            <div class="row">
              <svg class="hex" fill="#9b2821">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <input type="radio" name="details" value="Handles, Supports AND Seat COLOR: RED"
                       data-fill="#9b2821"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/red_details.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/red_details_half.png">
                <em></em>
              </label>
              <div class="price">150 €</div>
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
                <!--В value помещаем id конкретной опцииdata-default - логика такая же как и у цвета--><input
                  type="radio" name="links" checked value="Links Color: Allunium Matted"
                  data-default="true" data-fill="#adc3c5"
                  data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/allim_links.png"
                  data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/allim_links_half.png">
                <em></em>
              </label>
              <!--При изменении радиокнопки цена из блока .price учитывается в пересчетеобщей цены (блок .total-price выше) и для вывода в шапке (блок .frame-price, .battery-price, ...)-->
              <div class="price">200 €</div>
              <div class="title __margin-top">Allunium Matted</div>
            </div>
            <div class="row">
              <svg class="hex" fill="black">
                <use xlink:href="#svg-hex"></use>
              </svg>
              <label class="button">
                <input type="radio" name="links" value="Links Color: Black Matted" data-fill="black"
                       data-side="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_links.png"
                       data-half="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/details/black_links_half.png">
                <em></em>
              </label>
              <div class="price">100 €</div>
              <div class="title __margin-top">Black Matted</div>
            </div>
            <div class="row">
              <div class="hex __gradient"></div>
              <label class="button">
                <input type="radio" name="links" value="Individual Color: " data-fill="gradient"
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
                           value="Frame: <?php echo the_title(); ?> Price: <?php echo get_field('price_conf'); ?>"
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
                           value="Frame: <?php echo the_title(); ?> Price: <?php echo get_field('price_conf'); ?>"
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
                           value="Battery: <?php echo the_title(); ?>  Price: <?php echo get_field('price_conf'); ?>"
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
                           value="Battery: <?php echo the_title(); ?>  Price: <?php echo get_field('price_conf'); ?>"
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
                           value="Motor: <?php echo the_title(); ?> Price: <?php echo get_field('price_conf'); ?>"
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
                           value="Motor: <?php echo the_title(); ?> Price: <?php echo get_field('price_conf'); ?>"
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
                           value="Tyres: <?php echo the_title(); ?> Price: <?php echo get_field('price_conf'); ?>"
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
                           value="Tyres: <?php echo the_title(); ?> Price: <?php echo get_field('price_conf'); ?>"
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