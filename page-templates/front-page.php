<?php
/* Template Name: Strona główna */

get_header(); ?>

<main>
    <?php get_template_part('template-parts/hero'); ?>
    <?php get_template_part('template-parts/about'); ?>
    <?php get_template_part('template-parts/blog'); ?>

</main>

<?php get_footer(); ?>