<div class="head-box">
    <div class="head-box-layout double-box box">
        <?php $functions = new WP_Query(array('post_type' => 'functions', 'order' => 'ASC')) ?>
<?php if ($functions->have_posts() ): ?>
        <div class="head-box-desc">
            <h1 class="title-h1"><?php echo  get_bloginfo ('description'); ?></h1>
            <div class="head-box-desc-boxes flex-wrap">
<?php while ($functions->have_posts()) : $functions->the_post(); ?>
                <div class="head-box-desc-boxes-item icon-fix">
                    <img src="<?php the_post_thumbnail_url(); ?>">
                    <span><?php the_title(); ?></span>
                </div>
               
<?php endwhile; ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="head-box-cover">
            <img src="<?php  echo get_template_directory_uri() ?>/assets/build/images/home-ban.png">
        </div>
    </div>
</div>