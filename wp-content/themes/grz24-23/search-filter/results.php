<?php
    /**
     * Search & Filter Pro
     * Template wyników wyszukiwania
     */

    if ($query->have_posts()) {
    ?>
    <div class="search-filter-results">
        <div class="sf-result-count">
            Znaleziono&nbsp;<?php echo $query->found_posts; ?> wyników
        </div>

        <div class="sf-results-grid">
            <?php
                while ($query->have_posts()) {
                        $query->the_post();
                        $categories     = get_the_category();
                        $category_names = [];
                        if (! empty($categories)) {
                            foreach ($categories as $category) {
                                // Prepare alias from the category name
                                $category_names[] = sanitize_title($category->name);
                            }
                        }
                    ?>
                <article id="post-3865" class="post-3865 post type-post status-publish format-standard hentry<?php echo implode(' ', $category_names); ?>">
                    <div class="row">
                        <div class="col-sm-12 col-md-3 col-lg-2">
                            <div class="glist__image">
                                <a href="<?php the_permalink(); ?>" rel="bookmark">
                                    <img src="<?php echo get_field('miniatura_gb'); ?>" alt="<?php the_title(); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-5 col-lg-6">
                            <div class="glist__title">
                                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                            </div>
                            <div class="glist__meta">
                                <div class="single-line">
                                    <i class="fa-solid fa-hexagon-xmark"></i>
                                    <span class="name">Szerokość:</span>
                                    <strong><?php echo get_field('szerokosc_gb'); ?></strong>
                                    <span class="unit">m</span>
                                </div>
                                <div class="single-line">
                                    <i class="fa-solid fa-hexagon-xmark"></i>
                                    <span class="name">Długość:</span>
                                    <strong><?php echo get_field('dlugosc_gb'); ?></strong>
                                    <span class="unit">m</span>
                                </div>
                                <div class="single-line">
                                    <i class="fa-solid  fa-warehouse"></i>
                                    <span class="name">Dach:</span>
                                    <strong><?php echo get_field('dach_gb'); ?></strong>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="glist_price">
                                <?php echo get_field('cena_gb'); ?> <span>PLN</span>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 col-lg-2">
                            <div class="btn-main">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Zamawiam</a>
                            </div>
                        </div>
                    </div>
                </article>
                <?php
                    }
                        echo do_shortcode('[searchandfilter field="Załaduj więcej"]');
                    ?>
        </div>
    </div>
    <?php
        } else {
        ?>
    <div class="sf-no-results">
        <h3>Brak wyników</h3>
        <p>Nie znaleziono żadnych wyników dla wybranych kryteriów.</p>
    </div>
    <?php
    }
    ?>