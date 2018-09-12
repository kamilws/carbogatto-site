<?php get_header();?>


<?php wp_reset_query();?>


<section class="main news">
         <!--Блока с картинкой-->
         <article class="<?php echo get_field('back_color'); ?>">
            <!--Картинки располагаются в правом нижнем углуширина для мобайла 640
               ширина для десктопа - тут на вкус и цвет.
               Просто нужно помнить, что располагается картинка в правом нижем углу - background no-repeat right bottom-->
            <div class="site-container" data-src-mobile="<?php the_post_thumbnail_url(); ?>" data-src-desktop="<?php the_post_thumbnail_url(); ?>">
              <time><span><?php the_time('j'); ?></span><span><?php the_time('F'); ?></span><span><?php the_time('Y'); ?></span></time>
               <div class="title"><?php the_title()?></div>
                 <div class="desc"><?php echo(get_the_excerpt());?></div>
               <div class="text-center"><a class="button-component __back" href="/news">back</a></div>
            </div>
         </article>
         <!--Контент-->
         <div class="new-content">
         	
         	
         	<?php the_content();?>
         	
         	<!--
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto doloremque doloribus dolorum et eveniet ex itaque labore natus nulla odit, optio quasi repellendus sunt vitae? Deserunt magnam officia porro!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto doloremque doloribus dolorum et eveniet ex itaque labore natus nulla odit, optio quasi repellendus sunt vitae? Deserunt magnam officia porro!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto doloremque doloribus dolorum et eveniet ex itaque labore natus nulla odit, optio quasi repellendus sunt vitae? Deserunt magnam officia porro!</p>
            <img src="http://dreempics.com/uploads/posts/2016-06/1467029644_5.jpg">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto doloremque doloribus dolorum et eveniet ex itaque labore natus nulla odit, optio quasi repellendus sunt vitae? Deserunt magnam officia porro!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto doloremque doloribus dolorum et eveniet ex itaque labore natus nulla odit, optio quasi repellendus sunt vitae? Deserunt magnam officia porro!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A architecto doloremque doloribus dolorum et eveniet ex itaque labore natus nulla odit, optio quasi repellendus sunt vitae? Deserunt magnam officia porro!</p>
            -->
            
            <div class="button-container"><a class="button-component __back" href="/news">back</a></div>
         </div>
      </section>

    </main>

<?php get_footer();?>