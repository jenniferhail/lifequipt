<?php include(locate_template('layouts/setting-background.php')); ?>
<section id="layout-<?php echo $layout_index; ?>" class="layout slider <?php echo $bg_color; ?>">
    <div class="curve"></div>
    <?php include(locate_template('layouts/component-intro.php')); ?>
    <div class="wrapper">
        <div class="content">
            <?php if(have_rows('sliders')) : while(have_rows('sliders')) : the_row(); ?>
                <?php $images = get_sub_field('slider_one'); ?>
                <?php if($images) : ?>
                    <div class="slick-container">
                        <img class="iphone" src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/phone.png" alt="Apps">
                        <div class="slick">
                            <?php foreach($images as $image) : ?>
                                <li class="slide">
                                    <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_url($image['alt']); ?>">
                                </li>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- data-aos="slide-right" data-aos-id="logomark" -->
                <div class="logomark">
                    <?php echo do_shortcode('[bodymovin anim_id="165" autoplay_viewport="true" autostop_viewport="true" align="left"]'); ?>
                </div>
                <?php $images2 = get_sub_field('slider_two'); ?>
                <?php if($images2) : ?>
                    <div class="slick-container">
                        <img class="iphone" src="<?php echo get_template_directory_uri(); ?>/dist/assets/img/phone.png" alt="Apps">
                        <div class="slick">
                            <?php foreach($images2 as $image2) : ?>
                                <li class="slide">
                                    <img src="<?php echo esc_url($image2['sizes']['large']); ?>" alt="<?php echo $image2['alt']; ?>">
                                </li>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

