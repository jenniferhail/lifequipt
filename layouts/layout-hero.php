<?php
    include(locate_template('layouts/setting-background.php'));
    $hero_font_size = get_sub_field('hero_font_size');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');

?>
<section id="layout-<?php echo $layout_index; ?>" class="layout hero <?php echo $bg_color; ?>">
    <div class="curve-wrap">
        <div class="component intro">
            <div class="wrapper">
                <h1 class="title <?php echo $hero_font_size; ?> h1"><?php echo $title; ?></h1>
                <p><?php echo $subtitle; ?> </p>  
            </div>
        </div>
    </div>
</section>
