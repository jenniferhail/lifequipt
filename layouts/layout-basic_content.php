<?php
    $basic_content = get_sub_field('basic_content')
?>

<section id="layout-<?php echo $layout_index; ?>" class="layout basic-content">
    <div class="wrapper">
        <div class="content">
            <?php echo $basic_content; ?>
        </div>
    </div>
</section>
