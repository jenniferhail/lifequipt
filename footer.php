</main>

<?php if ( is_front_page() ) : ?>

    <?php
        $footer_display_intro = get_field('display_intro', 'option');
        $footer_title_size = get_field('title_size', 'option');
        $footer_title = get_field('title', 'option');
        $footer_subtitle = get_field('subtitle', 'option');

        $footer_content = get_field('footer_content', 'option');
        $sources = get_field('sources', 'option');
    ?>

    <footer class="footer bg-purple">
        <section id="contact" class="layout basic-content">
            <?php if($footer_display_intro) : ?>
                <div class="component intro">
                    <div class="wrapper">
                        <h2 class="title <?php echo $footer_title_size; ?> h1"><?php echo $footer_title; ?></h1>
                        <?php if($footer_subtitle) : ?>
                            <p><?php echo $footer_subtitle; ?></p> 
                        <?php endif; ?>  
                    </div>
                </div>
            <?php endif; ?>
            <?php if($footer_content) : ?>
                <div class="wrapper">
                    <?php echo $footer_content; ?>
                </div>
            <?php endif; ?>
        </section>

        <div class="copyright">
            <span>Lifequipt℠ © <?php echo date("Y"); ?></span>
        </div>
        

        <?php if($sources) : ?>
            <section id="layout-<?php echo $layout_index; ?>" class="layout accordion list" style="padding: 2em;">
                <div class="wrapper">
                    <div class="acc-list">
                        <div class="acc-item">
                            <div class="title">
                                <h2><?php echo $sources['title']; ?></h2>
                            </div>
                            <div class="content text-align-center">
                                <?php echo $sources['content']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        
    </footer>

<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>
