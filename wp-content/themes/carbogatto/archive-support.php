<?php
/*
Template Name: Support
*/
?>

<?php get_header(); ?>

      <section class="main support">
         <div class="site-container">
            <div class="container">
               <div class="page-title">How we can help you?</div>
               
               <form class="search-form" role="search" method="get" id="searchform" action="http://carbogatto.evoteka.pro/">
               	<input class="query" value="" name="s" id="s" placeholder="Search">
               	<input type="submit" id="searchsubmit" value="Search" style="display:none;" />
               	</form>
               	
               	
               	<!--TEST SEARCH
               	<form role="search" method="get" id="searchform" action="http://carbogatto.evoteka.pro/">
<div>
<label for="s">Search for:</label>
<input type="text" value="" name="s" id="s" />
<input type="hidden" value="1" name="sentence" />
<input type="hidden" value="product" name="post_type" />
<input type="submit" id="searchsubmit" value="Search" />
</div>
</form>
-->
               	
               <div class="faq-button-container">
                  <!--<div onclick="window.open('../faq');" class="button-component __blue">FAQ</div>-->
                  <a class="button-component __blue" href="<?php echo home_url(); ?>/faq">FAQ</a>
               </div>
               <div class="col">
                  <div class="block-title">Recent activity</div>
                  
                  <!--Loop-->
                   <?php
        					$story=new WP_Query( array(
								'post_type' => 'support',
								 'support_category' => 'Recent'
								 )
								 );
            					if($story->have_posts()):
        							 while($story->have_posts()):
            							$story->the_post();
            							
            							//if(function_exists('the_views')) { the_views(); } //
                						//$cur_term=getCurTerm(get_the_ID(),"story_country");//
									?>
            <div class="row">
            	<div class="num">5 </div>
                     <div class="title"><a href="<?php the_permalink()?>"><?php the_title();?></a></div>
                     
                     <div class="desc">Article created <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')).' ago'; ?></div>
                  </div>
            <?php
            endwhile;
            endif;
            ?>
            
            <!--end Loop-->
            
            
            
               </div>
               
               <!--UPGRADE-->
               <div class="col __left">
                  <div class="block-title">Upgrade</div>
                              <?php
        					$story=new WP_Query( array(
								'post_type' => 'support',
								 'support_category' => 'Upgrade'
								 )
								 );
            					if($story->have_posts()):
        							 while($story->have_posts()):
            							$story->the_post();
                						//$cur_term=getCurTerm(get_the_ID(),"story_country");//
									?>
            <div class="row">
                     <div class="title"><a href="<?php the_permalink()?>"><?php the_title();?></a></div>
                  </div>

            <?php
            endwhile;
            endif;
            ?>
                  
               </div>
                <!--END UPGRADE-->
               
               <!--REPAIRS-->
               <div class="col __right">
                  <div class="block-title">Repairs</div>
              <?php
        					$story=new WP_Query( array(
								'post_type' => 'support',
								 'support_category' => 'Repairs'
								 )
								 );
            					if($story->have_posts()):
        							 while($story->have_posts()):
            							$story->the_post();
                						//$cur_term=getCurTerm(get_the_ID(),"story_country");//
									?>
            <div class="row">
                     <div class="title"><a href="<?php the_permalink()?>"><?php the_title();?></a></div>
                  </div>

            <?php
            endwhile;
            endif;
            ?>
               </div>
               
               <!--END REPAIRS-->
               
            </div>
         </div>
      </section>



<?php get_footer(); ?>