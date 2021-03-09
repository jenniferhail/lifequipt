<?php
    $display_intro = get_sub_field('display_intro');
    $title_size = get_sub_field('title_size');
    $title = get_sub_field('title');
    $subtitle = get_sub_field('subtitle');

?>
<?php if($display_intro) : ?>
    <div class="component intro">
        <div class="wrapper">
            <h2 class="title <?php echo $title_size; ?> h2"><?php echo $title; ?></h1>
            <?php if($subtitle) : ?>
                <p><?php echo $subtitle; ?></p> 
            <?php endif; ?>  
        </div>
    </div>
<?php endif; ?>
