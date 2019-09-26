<?php
/*
Template Name: Макет Проекта
Template Post Type: post
*/
get_header(); ?>
    <main>
        <div class="empty-block"></div>
<?php while( have_posts() ) : the_post(); ?>
        <div class="content box">
			<h1 class="title-h2">
			    <?php the_title(); ?>
			</h1>
            <?php the_content(); ?>
        </div>
<?php  endwhile; ?>

    </main>
<?php get_footer(); ?>