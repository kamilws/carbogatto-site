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
        <div class="form-group __last-field">
          <div class="label">Delivery</div>
          <input type="text" name="delivery" required>
        </div>

        <!--Все таблицы заполняются динамически - js-->
        <!--Байкиdata-bike-base-price - это базовая цена самого байка, без агрегатов, цена самой основы-->
        <?php $base_price = 0 ?>
        <table class="__bikes-table" data-bike-base-price="<?= $base_price ?>">
          <input type="hidden" name="base-price" value="<?= $base_price ?>">
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

        <p><b>Delivery is made and paid separately</b></p>

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
        <div class="terms"><a href="/legal" target="_blank">Terms of use</a></div>
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