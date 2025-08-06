<?php if (have_rows('four_widgets', 2)): ?>
    <div class="row">
        <?php while (have_rows('four_widgets', 2)):
            the_row();
            // vars
            $image = get_sub_field('image');
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            $link = get_sub_field('link');
            ?>
            <div class="col-sm-6 col-md-4 col-lg-4">
                <div class="box">
                    <div class="fwb-icon">
                        <a href="<?php echo $link; ?>" title="<?php echo $title; ?>">
                            <img src="<?php echo $image; ?>" alt="<?php echo $title; ?>">
                        </a>
                    </div>
                    <div class="fwb-txt">
                        <h3>
                            <a href="<?php echo $link; ?>" title="<?php echo $title; ?>">
                                <?php echo $title; ?>
                            </a>
                        </h3>
                        <div class="fwb-txt__content">
                            <?php echo $content; ?>
                        </div>
                    </div>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
<?php endif; ?>