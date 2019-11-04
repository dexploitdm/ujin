<?php
/*
Template Name: Макет Оформление зазаза
Template Post Type: page
*/
get_header(); ?>
<main class="cart">
    <div class="empty-block"></div>
    <?php while (have_posts()) : the_post(); ?>
    <div class="content box">

        <?php the_content();  ?>

    </div>
        <?php endwhile; ?>

</main>
<?php get_footer(); ?>