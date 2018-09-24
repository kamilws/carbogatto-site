<?php
/*
Template Name: Support FAQ
*/
?>

<?php get_header(); ?>

 <section class="main support">
         <div class="site-container">
            <div class="container">
               <div class="page-title __left">FAQ</div>
                
                <form class="search-form __left" role="search" method="get" id="searchform" action="http://carbogatto.evoteka.pro/">
               	<input class="query" value="" name="s" id="s" placeholder="Search">
               	<input type="submit" id="searchsubmit" value="Search" style="display:none;" />
               	</form>
               	
               <div class="clear"></div>
               <div class="col">
                  <div class="block-title"><a href="<?php echo home_url(); ?>/support">SUPPORT</a><em>></em><span>FAQ</span></div>
                  
                  
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
                						//$cur_term=getCurTerm(get_the_ID(),"story_country");//
									?>
            <div class="row">
            	<div class="num">30</div>
                     <div class="title"><a href="<?php the_permalink()?>"><?php the_title();?></a></div>
                     
                     <div class="desc">Article created <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')).' ago'; ?></div>
                  </div>
            <?php
            endwhile;
            endif;
            ?>
            
            <!--end Loop-->
                  
                  
                  
                  
                  
                  <!-- <div class="row">
                     <div class="num __grey">0</div>
                     <div class="title"><a href="#">Ноw I can upgrade my battery?</a></div>
                     <div class="desc">Article created 2 days ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can upgrade my battery?</a></div>
                     <div class="desc">Article created 15 minutes ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can upgrade my battery?</a></div>
                     <div class="desc">Article created 15 minutes ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can upgrade my battery?</a></div>
                     <div class="desc">Article created 15 minutes ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can upgrade my battery?</a></div>
                     <div class="desc">Article created 15 minutes ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can upgrade my battery?</a></div>
                     <div class="desc">Article created 15 minutes ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can upgrade my battery?</a></div>
                     <div class="desc">Article created 15 minutes ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can upgrade my battery?</a></div>
                     <div class="desc">Article created 15 minutes ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can upgrade my battery?</a></div>
                     <div class="desc">Article created 15 minutes ago</div>
                  </div>
               </div>-->
               
            </div>
         </div>
      </section>



<?php get_footer(); ?>