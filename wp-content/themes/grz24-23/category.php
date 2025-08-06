<?php
    /**
     *
     * @package nf
     */
    $current_category  = get_queried_object();
    $_GET['_category'] = $current_category->slug;
get_header(); ?>
<section class="page-wrapper garage-wrapper">
    <div class="container-big">
        <div class="page-title">
            <?php the_archive_title('<h1 class="entry-title">', '</h1>'); ?>
        </div>
        <div class="entry-page">
            <div class="container-mid">
            <?php
                // Wyświetl opis kategorii z ACF
                $currentCategoryID       = 'category_' . $current_category->term_id;
                $archive_description_top = get_field('kat-opis-top', $currentCategoryID);
            if ($archive_description_top): ?>
                <div class="category-description-top">
                    <?php echo $archive_description_top; ?>
                </div>
            <?php endif; ?>
                <div class="gcatlist-category">

                <?php echo do_shortcode('[searchandfilter query="1" action="show-results" default_values="category:' . $current_category->term_id . '"]'); ?>

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

            <?php
                // Wyświetl opis kategorii
                $archive_description_bottom = get_field('kat-opis-bottom', $currentCategoryID);
            if ($archive_description_bottom): ?>
                    <div class="category-description-bottom">
                        <?php echo $archive_description_bottom; ?>
                    </div>
            <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();