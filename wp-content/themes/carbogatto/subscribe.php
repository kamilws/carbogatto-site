<?php get_header(); ?>
<div class="thank-you-component __subscribe">
  <svg class="ct-ty-close">
    <use xlink:href="#svg-close">
  </svg>
  <div class="ct-ty-title">Thank you</div>
</div>

<section class="main subscribe">
  <video class="dots"
         data-mob-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/dots-mobile.mp4"
         data-desktop-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/dots-desktop.mp4"
         playsinline muted autoplay loop></video>
  <div class="text">Be the first to receive the latest news, events and product updates</div>
  <form class="form" action="<?= esc_url(get_template_directory_uri()) ?>/email-form.php" method="post">
    <input type="hidden" name="form" value="Subscribe">
    <input type="text" name="email" required placeholder="Email">
    <button>Get newsletter</button>
  </form>
</section>
<?php get_footer(); ?>
