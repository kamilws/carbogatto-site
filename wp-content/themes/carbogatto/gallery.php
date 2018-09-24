<?php
/*
Template Name: Gallery
*/
?>
<?php wp_reset_query();
$qo=get_queried_object();

?>
<?php get_header(); ?>



      <div class="gallery-modal">
         <div class="bg"></div>
         <div class="content">
            <div class="site-container">
               <div class="container relative">
                  <svg class="close">
                     <use xlink:href="#svg-close"></use>
                  </svg>
                  <div class="pager"></div>
                  <div class="next"></div>
                  <div class="prev"></div>
                  <div class="slides">
                  	
                  	
                  	<?php
								$photo_gall=new WP_Query("post_type=photo");
								if($photo_gall->have_posts()):
								while($photo_gall->have_posts()):
								$photo_gall->the_post();
							?>
						
						
						<?php 
						$image_list = '';
						$image_list2 = '';
						$photo_post_id = get_the_ID();
						$gallery = get_post_gallery_images( $photo_post_id ); //массив картинок галлерей поста
				
						foreach( $gallery as $image_url ) {
		//slide images
		$image_list .= '<div class="slide">' . '<img src="' . $image_url . '" alt="slide">' . '</div>';
		
		
		//table images
		
		//Проверка каждой картинки и получение ширины
		$size = getimagesize($image_url);
		
		//сравнение правил и ширины
		$mess_txt = '';
		if ($size[0] > 1000) {
			 $mess_txt = '<h1>width=' . $size[0] . 'больше, чем 1000</h1>';
			 $image_list2 .= '<div class="item __triple">' . '<img class="spacer" src="' . $image_url . '"style="background-image: url(' . $image_url . ')"></div>';// . $mess_txt;
		} 
		elseif ($size[0]  >= 600) {
		    $mess_txt = '<h1>width=' . $size[0] . 'больше равно, чем 600</h1>';
		    $image_list2 .= '<div class="item __double">' . '<img class="spacer" src="' . $image_url . '"style="background-image: url(' . $image_url . ')"></div>';// . $mess_txt;
		} 
		elseif ($size[0] <= 600) {
		    $mess_txt = '<h1>width=' . $size[0] . 'меньше, чем 600</h1>';
		    $image_list2 .= '<div class="item">' . '<img class="spacer" src="' . $image_url . '"style="background-image: url(' . $image_url . ')"></div>';// . $mess_txt;
	}
		
		//echo '<img src="' . $attributes[0] . '" width="' . $attributes[1] . '" height="' . $attributes[2] . '">';
	//формирование таблицы картинками
	//	$image_list2 .= '<div class="item">' . '<img class="spacer" src="' . $image_url . '"style="background-image: url(' . $image_url . ')"></div>' . '<h1>width=' . $size[0] . $mess_txt .'</h1>';
							//	$image_list .= '<h3>' . $image_url . '<h3>';
						
			
	
						
						
						}//foreach
						
						
						echo $image_list ?>
							<!--End of Single gallery-->
						
								
							
                     <!--макс ширина картинки 1100
                     <div class="slide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/gallery/1.jpg"></div>
                     <div class="slide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/gallery/2.jpg"></div>
                     <div class="slide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/gallery/3.jpg"></div>
                     <div class="slide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/gallery/4.jpg"></div>
                     <div class="slide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/gallery/5.jpg"></div>
                     <div class="slide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/gallery/6.jpg"></div>-->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <section class="main gallery">
         <div class="site-container">
            <div class="items" id="grid_img">
            	
            	
            	
            	<?php echo $image_list2 ?>
            	
            	
               <!--В блоке __triple ширина картинки 1100
               <div class="item __triple"><img class="spacer" src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/main/spacer1260-520.png" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/gallery/1.jpg)"></div>
               -->
               <!--В обыяном блоке ширина картинки 400
               <div class="item"><img class="spacer" src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/main/spacer420-520.png" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/gallery/2.jpg)"></div>
               <div class="item"><img class="spacer" src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/main/spacer420-520.png" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/gallery/3.jpg)"></div>
               <div class="item"><img class="spacer" src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/main/spacer420-520.png" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/gallery/4.jpg)"></div>
               -->
               <!--В блоке ширина картинки 800
               <div class="item __double"><img class="spacer" src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/main/spacer840-520.png" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/gallery/5.jpg)"></div>
               <div class="item"><img class="spacer" src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/main/spacer420-520.png" style="background-image: url(<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/gallery/6.jpg)"></div>
          		-->	
           <?php
								endwhile;
								endif;
								?>
								

           
            </div>
         </div>
      </section>


<?php get_footer(); ?>