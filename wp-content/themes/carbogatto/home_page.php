<?php
/*
Template Name: Главная страница
*/
?>
<?php wp_reset_query();
$qo = get_queried_object();
?>

<?php get_header(); ?>

<section class="main index">
    <svg class="menu-button">
        <use xlink:href="#svg-menu-button"></use>
    </svg>
    <div class="sound">
        <audio loop src="<?php echo esc_url(get_template_directory_uri()); ?>/build/img/pages/index/sound.mp3"></audio>
        <div class="icon"></div>
    </div>
    <?php get_partial('homepage/pagination') ?>
    <?php get_partial('homepage/top') ?>
    <?php get_partial('homepage/frame') ?>
    <?php get_partial('homepage/battery') ?>
    <?php get_partial('homepage/sus-front') ?>
    <?php get_partial('homepage/sus-rear') ?>
    <?php get_partial('homepage/motor') ?>
    <?php get_partial('homepage/stand') ?>
    <?php get_partial('homepage/tyres') ?>
    <?php get_partial('homepage/create') ?>
</section>

<?php get_footer(); ?>
