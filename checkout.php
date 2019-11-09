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
        <div id="forpvz" style="height:600px;"></div>
    </div>
        <?php endwhile; ?>

</main>
    <script type="text/javascript">
        var widjet = new ISDEKWidjet({
            defaultCity: 'Пермь',
            cityFrom: 'Омск',
            link: 'forpvz',
            servicepath: '<?php  echo get_template_directory_uri() ?>/core/cdek/widget/scripts/service.php'
        });
    </script>
<?php get_footer(); ?>