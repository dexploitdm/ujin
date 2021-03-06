<?php
/*
Template Name: Макет Проекты
Template Post Type: page
*/
get_header(); ?>
    <main>
        <div class="head-box" style="background-image: url(<?php the_post_thumbnail_url(); ?>">
        <div class="head-box-web">

        </div>
        <div class="head-box-layout box">
            <div class="head-box-desc other-desc">
                <h1 class="title-h1">Реализованные <br> проекты</h1>
            </div>
        </div>
        </div>

		
		
		      
		
		
		
        <div class="projects box">
           
			<div class="grid-three">

				
				<?php
                $args = array(
                    'orderby'  => 'date',
                    'order'    => 'DESC'
                );?>
                <?php if ( have_posts() ) : query_posts($args);
                    while (have_posts()) : the_post(); ?>
                <div class="projects-block">
                    <div class="projects-block-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="projects-block-cover" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">

                    </div>
                    <div class="projects-block-desc">
                        <p>
                           <?php the_excerpt(); ?>
                        </p>
                    </div>
                </div>
<? endwhile; endif; wp_reset_query(); ?>
                

            </div>
			
			
			
			
        </div>
    </main>
<?php get_footer(); ?>