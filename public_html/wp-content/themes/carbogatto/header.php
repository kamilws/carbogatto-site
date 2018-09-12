<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prestige
 */
?>

<?php global $mytheme; ?>

<?php
global $post;     // Если за пределами цикла

if ( is_page(42) ) {
	// Это дочерняя страница
	

} else {
	// Это не дочерняя страница
}
?>


<!DOCTYPE html>
<html lang="ru">
   <head>
      
      <title>Carbogatto</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--https://youtu.be/kxxFQZx3KOk?t=6m30s - принцип подключения ассетов с длинным кешированием-->
      <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/build/styles/app-323ce0d72d.css">
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/js/app-74dca62b96096ca0f387.js"></script>
   </head>
   
   <body data-sprite-path="<?php echo esc_url( get_template_directory_uri() ); ?>/build/styles/svg-sprite-9da98597f6.svg" data-mup="1150">
      <!--На главной нужно добавить класс __black блоку nav.main-->
      <nav class="main">
         <a class="logo" href="<?php echo home_url(); ?>"></a>
         <svg class="close">
            <use xlink:href="#svg-close"></use>
         </svg>
         <div class="menu-container">
            <div class="menu">
            	
            	

            	<a class="__home" href="<?php echo home_url(); ?>">Home</a>
            	
            	<?php 
            	if(basename(get_page_template()) === 'buy.php') { $buy = '__active'; } 
            	elseif(basename(get_archive_template()) === 'archive-acces.php') { $acces = '__active'; } 
            	elseif(basename(get_archive_template()) === 'archive-news.php') { $news = '__active'; } 
            	elseif(basename(get_archive_template()) === 'support.php') { $support = '__active'; }
            	elseif(basename(get_page_template()) === 'gallery.php') { $gallery = '__active'; } 
            	elseif(basename(get_page_template()) === 'about.php') { $about = '__active'; } 
            	?>
            	<a href="<?php echo home_url(); ?>/buy" class="<?php echo $buy; ?>">Create & buy</a>

            	<a href="<?php echo home_url(); ?>/acces" class="<?php echo $acces; ?>" >Accessories</a>
            	<!--<a class="__active" href="#">About</a>-->
            	<a class="<?php echo $about; ?>" href="<?php echo home_url(); ?>/about">About</a>
            	<a class="<?php echo $gallery; ?>" href="<?php echo home_url(); ?>/gallery">Gallery</a>
            	<a class="<?php echo $news; ?>" href="<?php echo home_url(); ?>/news">News</a>
            	<a class="<?php echo $support; ?>" href="<?php echo home_url(); ?>/support">Support</a>
            </div>
            
            <div class="social">
               <a href="#">
                  <svg class="__fb">
                     <use xlink:href="#svg-fb"></use>
                  </svg>
               </a>
               <a href="#">
                  <svg class="__twitter">
                     <use xlink:href="#svg-twitter"></use>
                  </svg>
               </a>
               <a href="#">
                  <svg class="__youtube">
                     <use xlink:href="#svg-youtube"></use>
                  </svg>
               </a>
            </div>
         </div>
      </nav>
      
      
      
 