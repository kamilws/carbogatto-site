<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package carbogatto
 */

get_header();
?>


	
	
	
	<!--New PAge-->
	
	<section class="main support">
         <div class="site-container">
            <div class="container">
               <div class="page-title __left">Search</div>
               
               <form class="search-form __left" role="search" method="get" id="searchform" action="http://carbogatto.evoteka.pro/">
               	<input class="query" value="" name="s" id="s" placeholder="<?php printf( get_search_query()); ?>">
               	<input type="submit" id="searchsubmit" value="Search" style="display:none;" />
               	</form>
               
               <div class="clear"></div>
               <div class="col">
                  <div class="block-title"><a href="/support">SUPPORT</a><em>></em><span>SEARCH: <?php printf( get_search_query()); ?></span></div>
                 
                 <!--Loop-->
                 <?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
				//	printf( esc_html__( '12Search Results for: %s', 'carbogatto' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		
		<!--End Loop-->
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                <!--  <div class="row">
                     <div class="num">30</div>
                     <div class="title"><a href="#">Ноw I can buy that <span>bike</span> in USA? Ноw I can buy that bike in USA?</a></div>
                     <div class="desc">Article created 15 minuteas ago</div>
                  </div>
                  <div class="row">
                     <div class="num __grey">0</div>
                     <div class="title"><a href="#">Ноw I can <span>upgrade</span> my battery?</a></div>
                     <div class="desc">Article created 2 days ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can <span>upgrade</span> my battery?</a></div>
                     <div class="desc">Article created 15 minuteas ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can <span>upgrade</span> my battery?</a></div>
                     <div class="desc">Article created 15 minuteas ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can <span>upgrade</span> my battery?</a></div>
                     <div class="desc">Article created 15 minuteas ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can <span>upgrade</span> my battery?</a></div>
                     <div class="desc">Article created 15 minuteas ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can <span>upgrade</span> my battery?</a></div>
                     <div class="desc">Article created 15 minuteas ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can <span>upgrade</span> my battery?</a></div>
                     <div class="desc">Article created 15 minuteas ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can <span>upgrade</span> my battery?</a></div>
                     <div class="desc">Article created 15 minuteas ago</div>
                  </div>
                  <div class="row">
                     <div class="num">235</div>
                     <div class="title"><a href="#">Ноw I can <span>upgrade</span> my battery?</a></div>
                     <div class="desc">Article created 15 minuteas ago</div>
                  </div>-->
               </div>
            </div>
         </div>
      </section>
      
      <!--end new page-->
	

<?php
get_footer();
