<?php get_header(); ?>
<!-- TODO gallery ->subscribe -->
<div class="thank-you-component __subscribe">
  <svg class="ct-ty-close"><use xlink:href="#svg-close"></svg>
  <div class="ct-ty-title">Thank you</div>
</div>

<section class="main subscribe">
    <video class="dots"
           data-mob-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/dots-mobile.mp4"
           data-desktop-src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/buy/dots-desktop.mp4"
           playsinline muted autoplay loop></video>
    <div class="text">Be the first to recяeive the latest news, events and product updates</div>
    <form class="form" action='<?php echo esc_url( get_template_directory_uri() ); ?>/order.php'>
        <input type="text" name="email" required placeholder="Email">
        <button>Get newsletter</button>
    </form>
</section>
<?php get_footer(); ?>
