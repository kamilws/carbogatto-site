<?php get_header();?>


<?php wp_reset_query();?>




     <section class="main support post">
         <div class="site-container">
            <div class="container">
               <div class="page-title"><?php the_title()?></div>
              
              
              <form class="search-form __left" role="search" method="get" id="searchform" action="http://carbogatto.evoteka.pro/">
               	<input class="query" value="" name="s" id="s" placeholder="Search">
               	<input type="submit" id="searchsubmit" value="Search" style="display:none;" />
               	</form>
               
               <div class="clear"></div>
               <div class="block-title"><a href="<?php echo home_url(); ?>/support">SUPPORT</a><em>></em><a href="<?php echo home_url(); ?>/faq">FAQ</a><em>></em><span><?php the_title()?></span></div>
               
               <!--<div class="user-block">
                  <div class="user-avatar"></div>
                  <div class="user-text">
                     <div class="user-name">Username</div>
                     <div class="user-time">3 month ago</div>
                  </div>
                  <a class="button-component __blue" href="#">Follow</a>
               </div>-->
               
               <div class="content-block">
               <?php the_content();?>   
                  
               </div>
               <div class="share-component">
                  <div class="ct-sc-link __fb"></div>
                  <div class="ct-sc-link __twitter"></div>
                  <div class="ct-sc-link __in"></div>
                  <div class="ct-sc-link __google"></div>
               </div>
               <div class="poll-block">
                  <p>Was this article helpful?</p>
                  <div class="buttons"><a href="#">yes</a><a href="#">no</a></div>
                  <small>10 of 23 found this helpful</small>
                  <p><span>Have more questions?</span><a href="#">Submit a request</a></p>
               </div>
            </div>
         </div>
      </section>
      
 

    </main>

<?php get_footer();?>