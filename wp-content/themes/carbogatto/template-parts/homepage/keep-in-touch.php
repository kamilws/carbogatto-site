<div class="keep-in-touch">
    <div class="thank-you-component">
      <svg class="ct-ty-close"><use xlink:href="#svg-close"></svg>
      <div class="ct-ty-title">Thank you</div>
    </div>
    <div class="keep-title">Keep in touch</div>
    <form action="<?= esc_url(get_template_directory_uri()) ?>/email-form.php" method="post" class="keep-form">
        <input type="hidden" name="form" value="Keep in touch">
        <input type="text" name="email" required placeholder="Email">
        <input type="text" name="name" required placeholder="Name">
        <button>Join us</button>
    </form>
</div>