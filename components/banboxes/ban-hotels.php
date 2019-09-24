<div class="head-box">
    <div class="head-box-web">

    </div>
    <div class="head-box-layout box">
        <div class="head-box-desc other-desc">
            <h1 class="title-h1"><?php echo get_field( "title_bannner" ); ?></h1>
			<?php $banHotels = new WP_Query(array('post_type' => 'banHotels', 'order' => 'ASC')) ?>
			<?php if ($banHotels->have_posts() ): ?>
            <div class="head-box-desc-boxes">
				<?php while ($banHotels->have_posts()) : $banHotels->the_post(); ?>
                <div class="head-box-desc-boxes-item">
                    <img src=" <?php the_post_thumbnail_url(); ?>">
                    <span><?php the_title(); ?></span>
                </div>
                <?php endwhile; ?>
            </div>
			<?php endif; ?>
            <div class="other-desc-content">
                <p>Умные квартиры и  жилые комплексы - последний тренд, на который обращают
                    внимание покупатели при выборе недвижимости от застройщика.
                </p>
            </div>
        </div>
    </div>
</div>