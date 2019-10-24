<?php
/*
Template Name: Макет Тестирование (dev)
Template Post Type: page
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
		
			 <button class="js-yandex-form2" onclick="yaCounter55570948.reachGoal('myForm'); return true;">Событие myForm</button>
        </div>
<?php  endwhile; ?>
		
    </main>
<?php get_footer(); ?>