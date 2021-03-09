<?php include(locate_template('layouts/setting-background.php')); ?>
<section id="layout-<?php echo $layout_index; ?>" class="layout data <?php echo $bg_color; ?>">
    <?php include(locate_template('layouts/component-intro.php')); ?>
    <div class="wrapper">
        <?php if(have_rows('data')): ?>
            <div class="grid">
                <?php while(have_rows('data')) : the_row(); ?>
                    <?php
                        // Settings
                        $before = get_sub_field('before');
                        $number = get_sub_field('number');
                        $after = get_sub_field('after');
                        $speed = get_sub_field('speed');
                    ?>
                    <div class="item">
                        <div class="content" data-aos="fade-up" data-aos-id="counter-<?php echo get_row_index(); ?>">
                            <span class="number"><?php if ($before) { echo $before; } ?><span id="counter_<?php echo get_row_index(); ?>" data-count="<?php echo $number; ?>" data-speed="<?php echo $speed; ?>"><?php echo $number; ?></span><?php if ($after) { echo $after; } ?></span>
                            <p><?php the_sub_field('text'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
