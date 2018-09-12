<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package carbogatto
 */

?>
<?php global $mytheme; ?>

	</div><!-- #content -->

<footer class="main">
         <div class="site-container">
            <div class="container">
               <div class="menu">
                  <div><a href="buy">Create & Buy</a></div>
                  <div><a href="acces">Accessories</a></div>
                  <div><a href="gallery">Gallery</a></div>
                  <div><a href="about">About</a></div>
                  <div><a href="news">News</a></div>
                  <div><a href="support">Support</a></div>
               </div>
               <div class="social">
                  <!--+use('fb') == use(xlink:href='#svg-fb') - /templates/mixins/svg.pug-->
                  <a href="<?php echo $mytheme['facebook']; ?>" target="_blank">
                     <svg class="__fb">
                        <use xlink:href="#svg-fb"></use>
                     </svg>
                  </a>
                  <a href="<?php echo $mytheme['twitter']; ?>" target="_blank">
                     <svg class="__twitter">
                        <use xlink:href="#svg-twitter"></use>
                     </svg>
                  </a>
                  <a href="<?php echo $mytheme['youtube']; ?>" target="_blank">
                     <svg class="__youtube">
                        <use xlink:href="#svg-youtube"></use>
                     </svg>
                  </a>
                  <a href="<?php echo $mytheme['instagram']; ?>">
               <svg class="__instagram">
                  <use xlink:href="#svg-instagram"></use>
               </svg>
            </a>
                  <div class="copy"><a href="/legal">Legals</a><span><?php echo $mytheme['copy']; ?></span></div>
               </div>
               <div class="contacts">
                  <div class="title">Contacts</div>
                  <div><a href="tel:<?php echo $mytheme['phone']; ?>"><?php echo $mytheme['phone']; ?></a></div>
                  <a href="mailto:<?php echo $mytheme['email']; ?>"><?php echo $mytheme['email']; ?></a>
               </div>
               <div class="address">
                  <div class="title">Address</div>
                  <span><?php echo $mytheme['adress']; ?></span>
               </div>
            </div>
         </div>
      </footer>
<?php wp_footer(); ?>

<?php echo $mytheme['metrika']; ?>
</body>
</html>









