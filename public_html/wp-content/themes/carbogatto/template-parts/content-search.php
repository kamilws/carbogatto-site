<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package carbogatto
 */

?>


<div class="row">
            	<div class="num">30</div>
                     <div class="title"><a href="<?php the_permalink()?>"><?php the_title();?></a></div>
                     
                     <div class="desc">Article created <?php echo human_time_diff(get_the_time('U'), current_time('timestamp')).' ago'; ?></div>
                  </div>


