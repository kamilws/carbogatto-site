<?php
global $mytheme;
global $post;

if (basename(get_page_template()) === 'home_page.php') {
    $no_scroll = 'no-scroll';
    $nav_class = '__black';
    $body_class = '__black';
}
?>

<!DOCTYPE html>
<html lang="ru" class="<?= $no_scroll ?>">
<head>
  <title>Carbogatto</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="<?= css_url() ?>">
  <script src="<?= js_url() ?>"></script>
  <link rel="icon" href="<?= esc_url(get_template_directory_uri()); ?>/build/img/main/favicon.png">
</head>
<body data-sprite-path="<?= sprite_url() ?>"
      data-mup="1150"
      class="<?= $no_scroll ?> <?= $body_class ?>">
<nav class="main <?= $nav_class ?>">
  <a class="logo" href="<?php echo home_url(); ?>"></a>
  <svg class="close">
    <use xlink:href="#svg-close"></use>
  </svg>
  <div class="menu-container">
    <div class="menu">
      <a class="__home" href="<?php echo home_url(); ?>">Home</a>
        <?php
        if (basename(get_page_template()) === 'buy.php') {
            $buy = '__active';
        } elseif (basename(get_archive_template()) === 'archive-acces.php') {
            $acces = '__active';
        } elseif (basename(get_archive_template()) === 'archive-news.php') {
            $news = '__active';
        } elseif (basename(get_archive_template()) === 'support.php') {
            $support = '__active';
        } elseif (basename(get_page_template()) === 'gallery.php') {
            $gallery = '__active';
        } elseif (basename(get_page_template()) === 'about.php') {
            $about = '__active';
        }
        ?>
      <a href="<?php echo home_url(); ?>/buy" class="<?php echo $buy; ?>">Create & order</a>
      <a href="<?php echo home_url(); ?>/acces" class="<?php echo $acces; ?>">Accessories</a>
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
