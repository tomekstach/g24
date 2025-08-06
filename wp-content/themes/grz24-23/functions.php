<?php
/**
 * @package nf
 */

if (! function_exists('nf_setup')):

    function nf_setup()
{

        load_theme_textdomain('nf', get_template_directory() . '/languages');

        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        add_theme_support('post-thumbnails');

        register_nav_menus([
            'primary' => esc_html__('Primary', 'nf'),
        ]);

        add_theme_support('html5', [
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ]);

    }
endif;
add_action('after_setup_theme', 'nf_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 * @global int $content_width
 */

function nf_content_width()
{
    $GLOBALS['content_width'] = apply_filters('nf_content_width', 1200);
}
add_action('after_setup_theme', 'nf_content_width', 0);

/**
 * Register widget area.
 */

function nf_widgets_init()
{
    register_sidebar([
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'description'   => 'Dodaj widgety...',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
    register_sidebar([
        'name'          => 'Footer 1',
        'id'            => 'footer-1',
        'description'   => 'Dodaj widgety...',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
    register_sidebar([
        'name'          => 'Footer 2',
        'id'            => 'footer-2',
        'description'   => 'Dodaj widgety...',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
    register_sidebar([
        'name'          => 'Footer 3',
        'id'            => 'footer-3',
        'description'   => 'Dodaj widgety...',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
    register_sidebar([
        'name'          => 'Footer 4',
        'id'            => 'footer-4',
        'description'   => 'Dodaj widgety...',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
    register_sidebar([
        'name'          => 'Footer 5',
        'id'            => 'footer-5',
        'description'   => 'Dodaj widgety...',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
    register_sidebar([
        'name'          => 'Footer 6',
        'id'            => 'footer-6',
        'description'   => 'Dodaj widgety...',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
    register_sidebar([
        'name'          => 'Footer 7',
        'id'            => 'footer-7',
        'description'   => 'Dodaj widgety...',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
    register_sidebar([
        'name'          => 'Footer 8',
        'id'            => 'footer-8',
        'description'   => 'Dodaj widgety...',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
    register_sidebar([
        'name'          => 'Footer 9',
        'id'            => 'footer-9',
        'description'   => 'Dodaj widgety...',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'nf_widgets_init');

/**
 * Enqueue scripts and styles.
 */

function nf_scripts()
{
    wp_enqueue_style('nf-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');

    wp_enqueue_style('nf-style', get_stylesheet_uri());

    wp_enqueue_style('nf-advanced-custom-css', get_template_directory_uri() . '/css/main/acc.css?v=1.0');
    wp_enqueue_style('nf-advanced-responsive-css', get_template_directory_uri() . '/css/main/acr.css');

    wp_enqueue_style('nf-fa-fonts', get_template_directory_uri() . '/css/fa/all.css');
    wp_enqueue_style('nf-fa-fonts-min', get_template_directory_uri() . '/css/fa/all.min.css');
    wp_enqueue_style('nf-fa-fa6', get_template_directory_uri() . '/css/fa/fontawesome.css');
    wp_enqueue_style('nf-fa-fasharp', get_template_directory_uri() . '/css/fa/sharp-light.css');
    wp_enqueue_style('nf-fa-fasharp2', get_template_directory_uri() . '/css/fa/sharp-regular.css');
    wp_enqueue_style('nf-fa-fasharp3', get_template_directory_uri() . '/css/fa/sharp-solid.css');

    wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script('html5hiv', get_template_directory_uri() . '/js/html5.js', [], '3.7.0', false);
    wp_script_add_data('html5hiv', 'conditional', 'lt IE 9');

    // load bootstrap js
    wp_enqueue_script('nf-tether', get_template_directory_uri() . '/js/tether.min.js', []);
    wp_enqueue_script('nf-bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', []);
    wp_enqueue_script('nf-themejs', get_template_directory_uri() . '/js/theme-script.js', []);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'nf_scripts');

/* Extend width block in Gutenberg */

function wplab_extend_width_wp_block()
{
    echo '<style type="text/css">
.wp-block { max-width: 1248px; }
</style>';
}
add_action('admin_head', 'wplab_extend_width_wp_block');

function nf_password_form()
{
    global $post;
    $label = 'pwbox-' . (empty($post->ID) ? rand() : $post->ID);
    $o     = '<form action="' . esc_url(site_url('wp-login.php?action=postpass', 'login_post')) . '" method="post">
    <div class="d-block mb-3">' . __("To view this protected post, enter the password below:", "nf") . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __("Password:", "nf") . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__("Submit", "nf") . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter('the_password_form', 'nf_password_form');

/**
 * Load custom WordPress nav walker.
 */
if (! class_exists('wp_bootstrap_navwalker')) {
    require_once get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
}
/**
 * Load AqResizer
 */
require get_template_directory() . '/inc/aq_resizer.php';

/**
 * Load plugin compatibility file.
 */
require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';

/**
 * Owl Graphic Carousel
 */

function carousel_scripts()
{

    wp_enqueue_style('owl.carousel', get_template_directory_uri() . '/css/owl/owl.carousel.css');
    wp_enqueue_style('owl.theme', get_template_directory_uri() . '/css/owl/owl.theme.css');
    wp_enqueue_style('owl.transition', get_template_directory_uri() . '/css/owl/owl.transitions.css');
    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', ['jquery'], '20120206', true);
    wp_enqueue_script('effects', get_template_directory_uri() . '/js/effects.js', ['jquery'], '20120206', true);
}
add_action('wp_enqueue_scripts', 'carousel_scripts');

// Custom control for carousel category

if (class_exists('WP_Customize_Control')) {
    class WP_Customize_Category_Control extends WP_Customize_Control
    {

        public function render_content()
        {

            $dropdown = wp_dropdown_categories(
                [
                    'name'              => '_customize-dropdown-category-' . $this->id,
                    'echo'              => 0,
                    'show_option_none'  => __('&mdash; Select &mdash;'),
                    'option_none_value' => '0',
                    'selected'          => $this->value(),

                ]
            );

            $dropdown = str_replace('<select', '<select ' . $this->get_link(), $dropdown);

            printf(
                '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s</label>',
                $this->label,
                $dropdown
            );
        }
    }
}

// Register slider customizer section

add_action('customize_register', 'carousel_options');

function carousel_options($wp_customize)
{

    $wp_customize->add_section(
        'carousel_section',
        [
            'title'      => 'Ustawienia rotatora',
            'priority'   => 202,
            'capability' => 'edit_theme_options',
        ]
    );

    $wp_customize->add_setting(
        'carousel_setting',
        [
            'default' => '',
        ]
    );

    $wp_customize->add_control(
        new WP_Customize_category_Control(
            $wp_customize,
            'carousel_category',
            [
                'label'    => 'Kategoria',
                'settings' => 'carousel_setting',
                'section'  => 'carousel_section',
            ]
        )
    );

    $wp_customize->add_setting(
        'count_setting',
        [
            'default' => '6',

        ]
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'carousel_count',
            [
                'label'    => __('Liczba slajdów', 'theme_name'),
                'section'  => 'carousel_section',
                'settings' => 'count_setting',
                'type'     => 'text',
            ]
        )
    );

}

add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    }
    return $title;
});

/* Change excerpt length */

function wplab_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'wplab_custom_excerpt_length', 999);

function exclude_categories_from_search($query)
{
    if ($query->is_search && ! is_admin()) {
        $query->set('category__not_in', [15, 20]);
    }
    return $query;
}
add_filter('pre_get_posts', 'exclude_categories_from_search');

/* Hide pages from search results */

if (! is_admin()) {
    function wplab_search_filter($query)
    {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
        return $query;
    }
    add_filter('pre_get_posts', 'wplab_search_filter');
}

function exclude_category_from_archive($query)
{
    if ($query->is_archive() && $query->is_main_query() && ! is_admin()) {
        $query->set('category__not_in', [15, 20]);
    }
}
add_action('pre_get_posts', 'exclude_category_from_archive');

add_filter('wpcf7_form_elements', function ($content) {
    $post_id = get_the_ID();
    $cena_gb = get_field('cena_gb', $post_id);
    $content = str_replace('[acf-cena_gb]', $cena_gb, $content);
    return $content;
});

function disable_attachment_pages()
{
    if (is_attachment()) {
        wp_redirect(home_url(), 301); // Przekierowanie 301 na stronę główną
        exit;
    }
}
add_action('template_redirect', 'disable_attachment_pages');
function disable_media_self_links($link, $id)
{
    return wp_get_attachment_url($id);
}
add_filter('attachment_link', 'disable_media_self_links', 10, 2);
function custom_admin_css()
{
    echo '<style>
        .cat-checklist.category-checklist {
            min-height: 640px;
        }
    </style>';
}
add_action('admin_head', 'custom_admin_css');

function set_list_garage_check_after_bulk_edit($post_id, $post)
{
    // Sprawdź, czy użytkownik ma uprawnienia do edycji
    if (! current_user_can('edit_post', $post_id)) {
        return;
    }

    // Sprawdź, czy to masowa edycja i nie ma jeszcze ustawionej wartości
    if (isset($_REQUEST['bulk_edit']) || isset($_REQUEST['bulk_edit_nonce'])) {
        update_field('list_garage_check', 'Tak', $post_id);
    }
}
add_action('save_post', 'set_list_garage_check_after_bulk_edit', 10, 2);

// Filtrowanie kategorii do 3-ciego poziomu
function filter_categories_third_level($input_object, $sfid)
{
    echo 'cccccc';                                           // Debugging line to check if the function is called
                                                             // Sprawdź czy to pole kategorii i odpowiedni formularz
    if ($input_object['type'] == 'category' && $sfid == 1) { // zmień 123 na ID swojego formularza

        // Pobierz wszystkie kategorie
        $all_categories = get_categories([
            'hide_empty'   => false,
            'hierarchical' => true,
        ]);

        $third_level_categories = [];

        foreach ($all_categories as $category) {
            // Sprawdź poziom kategorii
            $level = get_category_level($category->term_id);

            if ($level == 3) {
                $third_level_categories[] = $category;
            }
        }

        // Zastąp domyślne kategorie tylko tymi z 3-ciego poziomu
        $input_object['options'] = [];
        foreach ($third_level_categories as $category) {
            $input_object['options'][] = [
                'value' => $category->term_id,
                'label' => $category->name,
            ];
        }
    }

    return $input_object;
}
add_filter('sf_input_object_pre', 'filter_categories_third_level', 10, 2);

// Funkcja pomocnicza do określenia poziomu kategorii
function get_category_level($category_id)
{
    echo 'cccccc'; // Debugging line to check if the function is called
    $level     = 1;
    $parent_id = wp_get_term_taxonomy_parent_id($category_id, 'category');

    while ($parent_id != 0) {
        $level++;
        $parent_id = wp_get_term_taxonomy_parent_id($parent_id, 'category');
    }

    return $level;
}

// Disable pagination for categories
function disable_pagination_for_categories($query) {
    if (!is_admin() && $query->is_main_query() && $query->is_category()) {
        $query->set('posts_per_page', -1); // Wyświetl wszystkie posty
    }
}
add_action('pre_get_posts', 'disable_pagination_for_categories');

function replaceSpaceAfterSingleLetters($text) {
    // Użyj wyrażenia regularnego, aby znaleźć pojedyncze litery z odstępem
    $pattern = '/\b([a-zA-Z])\s/'; // Szuka pojedynczej litery (np. "a", "b") z odstępem
    $replacement = '$1&nbsp;';    // Zamienia spację na &nbsp;

    // Zastosuj zamianę w całym tekście
    $result = preg_replace($pattern, $replacement, $text);

    return $result;
}
