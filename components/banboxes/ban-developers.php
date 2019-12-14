<div class="head-box box-developers" style="background-image: url(<?php echo get_field( "illustrat_ban" ); ?>)">
    <div class="head-box-layout box">
		<div class="cover-ban" style="
					background-image: url(<?php the_post_thumbnail_url(); ?>);">
			
		</div>
		<div class="head-box-desc other-desc">
            <h1 class="title-h1"><?php echo get_field( "title_bannner" ); ?></h1>

			        <?php $bandev = new WP_Query(array('post_type' => 'bandev', 'order' => 'ASC')) ?>
<?php if ($bandev->have_posts() ): ?>
			<div class="head-box-desc-boxes">
<?php while ($bandev->have_posts()) : $bandev->the_post(); ?>
                <div class="head-box-desc-boxes-item">
                    <img src="<?php the_post_thumbnail_url(); ?>">
                    <span><?php the_title(); ?></span>
                </div>
				<?php endwhile; ?>
              
            </div>
				<?php endif; ?>
            <?php wp_reset_query(); ?>
            <div class="other-desc-content">
                <p><?php echo get_field( "ban_content" ); ?>
                </p>
            </div>
        </div>
    </div>
</div>