<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-6">
        <div class="c-box__left">
            <h2>
                <?php echo replaceSpaceAfterSingleLetters(get_field('heading_h1', 2)); ?>
            </h2>
            <!--<h3>
                <?php echo replaceSpaceAfterSingleLetters(get_field('heading_h3', 2)); ?>
            </h3>-->
            <div class="txt">
                <?php echo replaceSpaceAfterSingleLetters(get_field('content_h', 2)); ?>
            </div>
            <!--<div class="btn-main">
                <a href="<?php the_field('link_c', 2); ?>" title="Skonfiguruj swój garaż">
                    <?php esc_html_e('Skonfiguruj swój garaż', 'nf'); ?>
                </a>
            </div>-->
        </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-6 right-config-g24">
        <div class="c-box__right">
            <?php
            while (have_posts()):
                the_post();
                get_template_part('template-parts/content', 'page');
            endwhile; // End of the loop.
            ?>
        </div>
    </div>
</div>