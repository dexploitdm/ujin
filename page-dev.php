<?php
/*
Template Name: Макет Тестирование (dev)
Template Post Type: page
*/
get_header(); ?>
<!--<script type="text/javascript" id="ISDEKscript" src="<?php  echo get_template_directory_uri() ?>/core/cdek/widget/widjet.js"></script>-->
<script type="text/javascript" id="ISDEKscript" src="https://dexploitdm.ru/projects/widget/widjet.js"></script>

    <main>
        <div class="empty-block"></div>
<?php while( have_posts() ) : the_post(); ?>
        <div class="content box">
           <h1 class="title-h2">
			    <?php the_title(); ?>
			</h1>
			<?php the_content(); ?>
		
		
	<script type="text/javascript">
        var widjet = new ISDEKWidjet({
            defaultCity: 'Пермь',
            cityFrom: 'Омск',
            link: 'forpvz'
        });
    </script>
    	  <div id="forpvz" style="height:600px;"></div>
        </div>
<?php  endwhile; ?>
		
    </main>
<?php get_footer(); ?>