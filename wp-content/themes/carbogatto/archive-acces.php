<?php
/*
Template Name: Acces
*/
?>

<?php get_header(); ?>
<?php $acc_image = get_field('acces_mobile'); ?>

<!--Корзина-->  
      <div class="modal-component __order">
         <div class="ct-mc-bg"></div>
         <div class="ct-mc-content-container">
            <!--Форма будет отправлена аяксом после как пользвоатель закончит процедуру заполнения полей заказав форму будут добавлены дополнительные поля для каждого аксессуара и байка, который пользователь положил
               в корзину. Корзина полностью работает на js. Корзина хранится в куках
               как все устроено можно посмотреть на видео
               https://monosnap.com/file/eyJUg8tCq7d7dbxlPEBp748ZVKmvVg
               и можно просто положить пару аксессуров в корзину, собрать пару байков и отправить форму, а в консоли посмотреть
               как именно были отправлены данные-->
            <form class="ct-mc-content" id="order-form" method='post' action='<?php echo esc_url( get_template_directory_uri() ); ?>/order.php'>
               <svg class="ct-mc-close">
                  <use xlink:href="#svg-close"></use>
               </svg>
               <!--Перечень товаров-->
               <div class="order-content">
                  <div class="right-text">Your shopping list will be <b>saved</b>. You can use it when you ordering from the Accessory and Create & Buy page.</div>
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
                  <!--Все таблицы заполняются динамически - js--><!--Байкиdata-bike-base-price - это базовая цена самого байка, без агрегатов, цена самой основы-->
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
<!--Корзина-->

      <section class="main accessories">
         <div class="site-container">
            <div class="items">
            	
            		<!--Loop starts-->
							<?php
								$acces=new WP_Query("post_type=acces");
								if($acces->have_posts()):
								while($acces->have_posts()):
								$acces->the_post();
							?>
			<?php	
			//проверка картинки
			$thumb_id = get_post_thumbnail_id();
			$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);
			//echo $thumb_url[1];
			
			if ($thumb_url[1] > 500) {
			?>	
			   <div class="item modal-trigger __double"  data-modal=".accessories-modal.<?php echo $thumb_id; ?>"> 
			
			<?php
		} 
		elseif ($thumb_url[1]  <= 500) {
			?>
			
		   <div class="item modal-trigger"  data-modal=".accessories-modal.<?php echo $thumb_id; ?>">
		   	
		   	<?php
		} 
				?>
			
			

				 
			<!-- <div class="item">-->
                  <img class="spacer __mobile" src="<?php echo get_field('acces_mobile')['url']; ?>" style="background-image: url(<?php echo get_field('acces_mobile')['url']; ?>)">
                  <img class="spacer __desktop" src="<?php the_post_thumbnail_url( array(420, 520) ); ?>" style="background-image: url(<?php the_post_thumbnail_url( array(420, 520) ); ?>)">
                  <div class="content">
                     <div class="title"><?php the_title(); ?></div>
                     <div class="description"><?php echo(get_the_excerpt());?></div>
                     <a class="button-component __blue" href="#">Buy for <?php echo get_field('acc_price'); ?> €</a>
                  </div>
               </div>
               
               
               
               
               <!--Для каждой позиции выводится такой блок - модальное окно-->
      <div class="accessories-modal <?php echo $thumb_id; ?>">
         <div class="bg"></div>
         <div class="content">
            <div class="site-container">
               <div class="container relative">
                  <svg class="close">
                     <use xlink:href="#svg-close"></use>
                  </svg>
                  <div class="gallery-block">
                     <div class="pager"></div>
                     <div class="next"></div>
                     <div class="prev"></div>
                     <div class="slides">
                        <!--Ширина у картинки 920-->
                        <div class="slide"><img src="<?php the_post_thumbnail_url(); ?>"></div>
                        <!--<div class="slide"><img src="http://corporationart.ru/uploads/misc/14605377050649.jpg"></div>
                        <div class="slide"><img src="http://discoverart.ru/ckfinder/userfiles/images/7889060-R3L8T8D-1000-5.jpg"></div>-->
                     </div>
                  </div>
                  <div class="text-block">
                     <div class="text-top">
                        <div class="left-col">
                           <div class="title"><?php the_title(); ?></div>
                           <p><?php echo(get_the_excerpt());?></p>
                        </div>
                        <div class="right-col"><!--<a class="button-component __cart-button __blue"  data-id="2" data-name="Grips" data-price="1000" href="#">BUY FOR <?php echo get_field('acc_price'); ?> €</a></div>-->
                    	<div class="button-component __cart-button __blue" data-id="<?php echo get_the_ID(); ?>" data-name="<?php the_title(); ?>" data-price="<?php echo get_field('acc_price'); ?>">BUY FOR <?php echo get_field('acc_price'); ?> €</div>
                    	</div>
                     </div>
                     <div class="text-bottom">
                        <div class="left-col">
                           <?php the_content(); ?> 
                                                    </div>
                        <div class="right-col">
                           <div class="table-title">Tech Specs</div>
                           <table cellspacing="0" cellpadding="0">
                              <tr>
                                 <td>Size</td>
                                 <td><?php echo get_field('size_acc'); ?></td>
                              </tr>
                              <tr>
                                 <td>Weight</td>
                                 <td><?php echo get_field('weight_acc'); ?></td>
                              </tr>
                              <tr>
                                 <td>Materials</td>
                                 <td><?php echo get_field('material_acc'); ?> </td>
                              </tr>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
 <!--Для каждой позиции выводится такой блок - модальное окно-->
				
				
							<?php
								endwhile;
								endif;
								?>
				<!--Loop Ends-->
            	
            	
            	
            	
            	

               
               
               
            </div>
         </div>
      </section>



<?php get_footer(); ?>