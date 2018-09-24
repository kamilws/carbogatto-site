<?php
/*
 * Template Name: News
 */
?>

<?php wp_reset_query();
$qo=get_queried_object();
?>

<?php get_header(); ?>

      <section class="main news">
      	
      	<!--Loop starts-->
							<?php
								$news=new WP_Query("post_type=news");
								if($news->have_posts()):
								while($news->have_posts()):
								$news->the_post();
							?>
							
         <article class="<?php echo get_field('back_color'); ?>">
            <!--Картинки располагаются в правом нижнем углуширина для мобайла 640
               ширина для десктопа - тут на вкус и цвет.
               Просто нужно помнить, что располагается картинка в правом нижем углу - background no-repeat right bottom-->
				
				  <div class="site-container" data-src-mobile="<?php the_post_thumbnail_url(); ?>" data-src-desktop="<?php the_post_thumbnail_url(); ?>">
               <time><span><?php the_time('j'); ?></span><span><?php the_time('F'); ?></span><span><?php the_time('Y'); ?></span></time>
               <div class="title"><?php the_title(); ?></div>
               <div class="desc"><?php echo(get_the_excerpt());?></div>
               <a class="button-component" href="<?php the_permalink(); ?>">Read more</a>
            </div>
				 </article>
				
							<?php
								endwhile;
								endif;
								?>
				<!--Loop Ends-->
				
				
				
           <!-- <div class="site-container" data-src-mobile="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/news/euro.jpg" data-src-desktop="<?php echo esc_url( get_template_directory_uri() ); ?>/build/img/pages/news/euro-d.jpg">
               <time><span>15</span><span>april</span><span>2018</span></time>
               <div class="title">see you at the Eurobike 2018 JULY 8 — 10, 2018</div>
               <div class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
               <a class="button-component" href="#">Read more</a>
            </div>-->
            
            
    
         
         
      </section>
      

<?php get_footer(); ?>