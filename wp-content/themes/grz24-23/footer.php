<?php
/**
 *
 * @package nf
 */
?>
<section class="cta">
    <div class="container-mid">
        <?php get_template_part('widgets/cta'); ?>
    </div>
    <div class="box__img">
        <img src="<?php the_field('img_cta', '2'); ?>" alt="">
    </div>
</section>
</div>
<footer id="footer-wrapper" class="site-footer">
    <!--<div class="footer-widget">
        <div class="container-big">
            <div class="fw-inner">
                <?php // get_template_part('widgets/footer-widget'); ?>
            </div>
        </div>
    </div>-->
    <div class="footer-bottom">
        <div class="fb-top">
            <div class="container-big">
                <?php get_template_part('widgets/footer-widget2'); ?>
            </div>
        </div>
        <div class="fb-inner">
            <div class="container-big">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="footer-credits">
                            <?php echo date("Y"); ?> &copy;
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                Garaże24.com.pl
                            </a> / Wszelkie Prawa Zastrzeżone
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="footer-logo">
                            <img src="<?php the_field('logo', '2'); ?>"
                                alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="size-full">
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="scroll-top">
                            <a href="#wrapper">
                                Przewiń do góry <i class="fa-solid fa-arrow-up-long"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>

<div id="fb-root"></div>
<script>
    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v3.0&appId=111553192663737&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

</script>