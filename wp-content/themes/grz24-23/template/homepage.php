<?php
    /**
     * Template Name: Homepage
     *
     * @package nf
     */
get_header(); ?>
<section class="top">
    <div class="top-heading">
        <div class="container-big">
            <div class="btn-main top-g24-btn">
                <a href="/indywidualne-zamowienie/" title="Zapytaj o wycenę">
                    Darmowa wycena <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="container-big top-banner-container">
        <div class="box">
            <div class="i-row">
                <div>
                <h1>
                    <?php echo replaceSpaceAfterSingleLetters(get_field('heading_top', '2')); ?>
                </h1>
                <p><?php the_field('heading_top_desc', '2'); ?></p></div>
            </div>
        </div>
        <?php // get_template_part('widgets/slider'); ?>
    </div>
    <div class="container-big">
        <?php get_template_part('widgets/quick-offer'); ?>
    </div>
    <div class="scroll-down">
        <a class="ps2id" href="#garaze24" title="Przewiń w dół">
            <i class="fa-solid fa-arrow-down-long"></i>
        </a>
    </div>
</section>
<section class="about" id="garaze24">
    <h2 class="gcatlist__title search-title-g24">
        <?php echo replaceSpaceAfterSingleLetters(esc_html__('Skorzystaj z wyszukiwarki wymiarów, kolorów i typów garaży', 'nf')); ?>
    </h2>
    <div class="container-big garage-wrapper">
        <div class="sf-inline">
            <div class="gcatlist">
                <div class="gcatlist__form">
                    <?php echo do_shortcode('[searchandfilter query="1" action="show-form"]'); ?>
                </div>
            </div>
        </div>

        <?php echo do_shortcode('[searchandfilter query="1" action="show-results"]'); ?>
        <script>
            jQuery(document).ready(function($) {
                function keepOnlyLastLoadMore() {
                    var $buttons = $('.load-more-g24'); // Pobierz wszystkie elementy z klasą "load-more-g24"
                    if ($buttons.length > 1) {
                        $buttons.slice(0, -1).remove(); // Usuń wszystkie oprócz ostatniego
                    }
                }

                // Obserwuj zmiany w DOM (np. dodanie nowych przycisków)
                var observer = new MutationObserver(function(mutationsList) {
                    mutationsList.forEach(function(mutation) {
                        if (mutation.type === 'childList') {
                            keepOnlyLastLoadMore(); // Sprawdź ponownie, gdy coś się zmieni
                        }
                    });
                });

                // Obserwuj zmiany w całym dokumencie
                observer.observe(document.body, {
                    childList: true,
                    subtree: true
                });
            });
        </script>
    </div>
    <!--<div class="container-big">
        <div class="service">
            <?php get_template_part('widgets/four-widgets'); ?>
        </div>
    </div>-->
</section>
<section class="config">
    <div class="container-big">
        <?php get_template_part('widgets/config'); ?>
    </div>
</section>
<section class="blog-inner">
    <div class="section-title">
        <div class="container-mid">
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-9">
                    <h2>
                        <?php esc_html_e('Artykuły, poradniki', 'nf'); ?>
                    </h2>
                    <h3>
                        <?php esc_html_e('Sprawdź naszego bloga firmowego i bądź na bieżąco z aktualnościami i nowinkami w świecie garaży blaszanych.', 'nf'); ?>
                    </h3>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-3">

                    <div class="btn-main garage__btn">
                        <a href="https://www.garaze24.com.pl/blog-firmowy/" title="Zobacz więcej artykułów">
                            <?php esc_html_e('Zobacz więcej artykułów', 'nf'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blog-list-post">
        <div class="container-big">
            <div class="row">
                <?php
                    $args = [
                        'post_type'      => 'post',
                        'category_name'  => 'blog-firmowy',
                        'posts_per_page' => 4,
                        'paged'          => $paged,
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()):
                        while ($the_query->have_posts()):
                        $the_query->the_post(); ?>

																				                <?php get_template_part('template-parts/content-archive', get_post_format()); ?>

																				            <?php endwhile;
                                                                                                endif;

                                                                                                wp_reset_postdata();
                                                                                            ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();