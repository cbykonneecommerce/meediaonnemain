<?php
/**
*
* @package WordPress
* @subpackage nt_conversi
* @since nt_conversi 1.0
*
*/


/*************************************************
## Google Font
*************************************************/

if ( ! function_exists( 'nt_conversi_fonts_url' ) ) :
    function nt_conversi_fonts_url() {
        $fonts_url = '';

        $roboto = _x( 'on', 'Roboto font: on or off', 'nt-conversi' );
        $poppins = _x( 'on', 'Poppins font: on or off', 'nt-conversi' );

        if ( 'off' !== $roboto || 'off' !== $poppins  ) {
            $font_families = array();

            if ( 'off' !== $roboto )
            $font_families[] = 'Roboto:400,300,300italic,400italic,700';

            if ( 'off' !== $poppins )
            $font_families[] = 'Poppins:400,300,500,600,700';

            $query_args = array(
                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin,latin-ext' ),
            );
            $fonts_url = add_query_arg( $query_args, "//fonts.googleapis.com/css" );
        }

        return $fonts_url;
    }
endif;

/*************************************************
## Styles and Scripts
*************************************************/

function nt_conversi_scripts() {

    $rtl = is_rtl() ? '-rtl' : '';

    if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

    // twitter Bootstrap framework
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, '1.0');
    if ( is_rtl() ){
        wp_enqueue_style( 'bootstrap-rtl', get_template_directory_uri() . '/css/bootstrap-rtl.min.css', false, '1.0');
    }
    // font awesome icon library
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, '1.0');
    // timeline section styles
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/css/slick'.$rtl.'.css', false, '1.0');
    // animated headline styles
    wp_enqueue_style( 'nt-conversi-slick-theme', get_template_directory_uri() . '/css/slick-theme.css', false, '1.0');
    // contact popup
    wp_enqueue_style( 'jquery-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', false, '1.0');
    // general css file
    $nt_conversi_boxed 	= ( ot_get_option( 'nt_conversi_boxed' ) != '' ) ? ot_get_option( 'nt_conversi_boxed' ) : 'stretched';
    if ( $nt_conversi_boxed == 'boxed'){
        wp_enqueue_style( 'nt-conversi-main-boxed-style', get_template_directory_uri() . '/css/boxed-style'.$rtl.'.css', false, '1.0');
    }else{
        wp_enqueue_style( 'nt-conversi-main-style', get_template_directory_uri() . '/css/style'.$rtl.'.css', false, '1.0');
    }
    // extra css file
    wp_enqueue_style( 'nt-conversi-theme-style', get_template_directory_uri() . '/css/theme-style'.$rtl.'.css', false, '1.0');
    // ie older
    wp_enqueue_style( 'nt-conversi-ie-older', get_template_directory_uri() . '/css/ie-older.css', false, '1.0');

    wp_style_add_data( 'nt-conversi-ie-older', 'conditional', 'lt IE 9' );

    // visual composer css for homepage
    wp_enqueue_style( 'nt-conversi-vc', get_template_directory_uri() . '/css/blog/visual-composer'.$rtl.'.css', false, '1.0');
    // flexslider css file for blog post
    wp_enqueue_style( 'nt-conversi-flexslider', get_template_directory_uri() . '/js/flexslider/flexslider.css', false, '1.0');
    // wordpress css file for blog post
    wp_enqueue_style( 'nt-conversi-wordpress', get_template_directory_uri() . '/css/blog/wordpress'.$rtl.'.css', false, '1.0');
    // update css file
    wp_enqueue_style( 'nt-conversi-update', get_template_directory_uri() . '/css/blog/update'.$rtl.'.css', false, '1.0');
    // theme default google webfont loader
    wp_enqueue_style( 'nt-conversi-fonts-load', nt_conversi_fonts_url(), array(), '1.0.0' );

    // custom css
    wp_enqueue_style( 'nt-conversi-custom-style', get_stylesheet_uri() );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // JS plugins for this theme
    wp_register_script('nt-conversi-particleground', get_template_directory_uri() . '/js/jquery.particleground.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), '1.0', true);
    $nt_conversi_smoothscroll = ot_get_option( 'nt_conversi_smoothscroll' );
    if ( $nt_conversi_smoothscroll == 'on'){
        wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array('jquery'), '1.0', true);
    }
    wp_enqueue_script( 'response', get_template_directory_uri() . '/js/response.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'placeholder', get_template_directory_uri() . '/js/jquery.placeholder.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'imgpreload', get_template_directory_uri() . '/js/jquery.imgpreload.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.min.js', array('jquery'), '1.0', true);
    wp_register_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.0', true);
    wp_register_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.pack.js', array('jquery'), '1.0', true);
    wp_register_script( 'fancybox-media', get_template_directory_uri() . '/js/jquery.fancybox-media.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'counterup', get_template_directory_uri() . '/js/jquery.counterup.min.js', array('jquery'), '1.0', true);
    wp_register_script( 'parallax', get_template_directory_uri() . '/js/parallax.min.js', array('jquery'), '1.0', true);
    wp_register_script( 'jquery-scrollUp', get_template_directory_uri() . '/js/jquery.scrollUp.min.js', array('jquery'), '1.0', true);

    // Google maps api & customization
    $nt_conversi_map_api_key = ot_get_option( 'nt_conversi_map_api_key' );
    $nt_conversi_map_api_key_out = ( $nt_conversi_map_api_key != '') ? '' .esc_html( $nt_conversi_map_api_key ).'' : '';
    wp_register_script( 'google-map-api', 	'https://maps.googleapis.com/maps/api/js?key='. $nt_conversi_map_api_key_out .'', '3.0.0', true);
    wp_register_script( 'gmaps', get_template_directory_uri() . '/js/gmaps.js', array('jquery'), '1.0', true);

    // Settings plugin for one page shortcode
    wp_register_script( 'nt-conversi-map-set', get_template_directory_uri() . '/js/short/map-set.js', array('jquery'), '1.0', true);
    wp_register_script( 'nt-conversi-slick-set', get_template_directory_uri() . '/js/short/slick-set.js', array('jquery'), '1.0', true);
    wp_register_script( 'nt-conversi-counterup-set', get_template_directory_uri() . '/js/short/counterup-set.js', array('jquery'), '1.0', true);
    wp_register_script( 'nt-conversi-fancybox-set', get_template_directory_uri() . '/js/short/fancybox-set.js', array('jquery'), '1.0', true);
    wp_enqueue_script( 'nt-conversi-script', get_template_directory_uri() . '/js/main-script.js', array('jquery'), '1.0', true);

    // WP default scripts for theme
    wp_enqueue_script('nt-conversi-custom-flexslider', get_template_directory_uri() . '/js/flexslider/flexslider.js', array('jquery'), '1.0', true);
    wp_enqueue_script('fitvids', get_template_directory_uri() . '/js/blog/jquery.fitvids.js', array('jquery'), '1.0', true);
    wp_enqueue_script('nt-conversi-blog-settings', get_template_directory_uri() . '/js/blog/blog-settings.js', array('jquery'), '1.0', true);

    wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/blog/html5shiv.js', array('jquery'), '3.7.2', false);
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9' );
    wp_enqueue_script('respond', get_template_directory_uri()  .  '/js/blog/respond.min.js', array('jquery'), '1.4.2', false );
    wp_script_add_data('respond', 'conditional', 'lt IE 9' );

}
add_action( 'wp_enqueue_scripts', 'nt_conversi_scripts' );


/*************************************************
## Admin style and scripts
*************************************************/

function nt_conversi_admin_style() {

    // Update CSS within in Admin
    wp_enqueue_style('nt-conversi-custom-admin', get_template_directory_uri().'/css/blog/admin.css');
    wp_enqueue_script('nt-conversi-custom-admin', get_template_directory_uri() . '/js/blog/jquery.custom.admin.js');

}
add_action('admin_enqueue_scripts', 'nt_conversi_admin_style');

/*************************************************
## Theme option & Metaboxes & shortcodes
*************************************************/

// theme homepage visual composer shortcodes settings
if(function_exists('vc_set_as_theme')) {
    require_once get_template_directory() . '/includes/visual-shortcodes.php';
}

// Metabox plugin check
if ( ! function_exists( 'rwmb_meta' ) ) {
    function rwmb_meta( $key, $args = '', $post_id = null ) {
        return false;
    }
}
// Theme post and page meta plugin for customization and more features
require_once get_template_directory() . '/includes/page-metaboxes.php';

// Theme css setting file
require_once get_template_directory() . '/includes/custom-style.php';

// Theme navigation and pagination options
require_once get_template_directory() . '/includes/template-tags.php';

// Option tree controllers
if ( ! class_exists( 'OT_Loader' )){

    function ot_get_option() {
        return false;
    }

}

// add filter for  options panel loader
add_filter( 'ot_show_pages', '__return_false' );
add_filter( 'ot_show_new_layout', '__return_false' );


// Theme options admin panel setings file
include_once get_template_directory() . '/includes/theme-options.php';

// Theme customize css setting file
require_once get_template_directory() . '/includes/custom-style.php';



/*************************************************
## OPTION TREE WEBFONTS API
*************************************************/

add_filter( 'ot_google_fonts_api_key', 'nt_conversi_change_ot_google_fonts_api_key' );

function nt_conversi_change_ot_google_fonts_api_key( $key ) {
    $api = ot_get_option( 'ot_font_api' );
    return "$api";
}


/*************************************************
## ADMIN NOTICES
*************************************************/


function nt_conversi_theme_activation_notice()
{
    global $current_user;

    $user_id = $current_user->ID;

    if (!get_user_meta($user_id, 'nt_conversi_theme_activation_notice')) {
        ?>
        <div class="updated notice">
            <p>
                <?php
                echo sprintf(
                    esc_html__('If you need help about demodata installation, please read docs and %s', 'nt-conversi'),
                    '<a target="_blank" href="' . esc_url('https://ninetheme.com/contact/') . '">' . esc_html__('Open a ticket', 'nt-conversi') . '</a>
                    ' . esc_html__('or', 'nt-conversi') . ' <a href="' . esc_url( wp_nonce_url( add_query_arg( 'nt-conversi-ignore-notice', 'dismiss_admin_notices' ), 'nt-conversi-dismiss-' . get_current_user_id() ) ) . '">' . esc_html__('Dismiss this notice', 'nt-conversi') . '</a>');
                ?>
            </p>
        </div>
        <?php
    }
}
add_action('admin_notices', 'nt_conversi_theme_activation_notice');


function nt_conversi_theme_activation_notice_ignore()
{
    global $current_user;

    $user_id = $current_user->ID;

    if (isset($_GET['nt-conversi-ignore-notice'])) {
        add_user_meta($user_id, 'nt_conversi_theme_activation_notice', 'true', true);
    }
}
add_action('admin_init', 'nt_conversi_theme_activation_notice_ignore');



/*************************************************
* Hide admin notifications
* that do not have dismissible features
*************************************************/
function nt_conversi_admin_only_warnings() {
    if(is_admin()) {
        echo '<style>.notice-warning:not(.is-dismissible) { display:none !important; }</style>';
    }
}
add_action('admin_head', 'nt_conversi_admin_only_warnings');


/*************************************************
## Custom body class
*************************************************/
function nt_conversi_body_classes( $classes ) {
    $nt_conversi_boxed = ot_get_option( 'nt_conversi_boxed' );
    if ( $nt_conversi_boxed == 'boxed' ){
        $classes[] = 'body-wrap';
    } else {
        $classes[] = '';
    }
    return $classes;
}
add_filter( 'body_class', 'nt_conversi_body_classes' );

/*************************************************
## Theme Setup
*************************************************/

if ( ! isset( $content_width ) ) $content_width = 960;

function nt_conversi_theme_setup() {

    /*
    * This theme styles the visual editor to resemble the theme style,
    * specifically font, colors, icons, and column width.
    */
    add_editor_style ( 'custom-editor-style.css' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
    */
    add_theme_support( 'post-thumbnails' );

    // woocommerce
    if ( class_exists( 'woocommerce' ) ) {
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
    }

    // Theme customizer and tag support
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-background' );
    add_theme_support( 'custom-header' );

    /*
    * Enable support for Post Formats.
    *
    * See: https://codex.wordpress.org/Post_Formats
    */
    add_theme_support( 'post-formats', array('gallery', 'quote', 'video', 'audio'));
    // add_post_type_support( 'portfolio', 'post-formats' );
    add_image_size( 'nt_conversi_member_thumb', 650, 650, true);

    // Make theme available for translation
    // Translations can be filed in the /languages/ directory
    load_theme_textdomain( 'nt-conversi', get_template_directory() . '/languages' );

    register_nav_menus( array(
        'primary' => 	esc_html__( 'Primary Menu', 'nt-conversi' ),
    ) );

}
add_action( 'after_setup_theme', 'nt_conversi_theme_setup' );

/*************************************************
## Widget columns
*************************************************/

function nt_conversi_widgets_init() {
    register_sidebar( array(
        'name' => esc_html__( 'Blog Sidebar', 'nt-conversi' ),
        'id' => 'sidebar-1',
        'description' => esc_html__( 'These are widgets for the Blog page.','nt-conversi' ),
        'before_widget' => '<div class="widget  %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title"><span>',
        'after_title' => '</span></h4>'
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer widgetize area', 'nt-conversi' ),
        'id' => 'nt-conversi-footer-widgetize',
        'description' => esc_html__( 'Theme footer widgetize area','nt-conversi' ),
        'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="widget-head">',
        'after_title' => '</h3>'
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer', 'nt-conversi' ),
        'id' => 'nt-conversi-footer',
        'description' => esc_html__( 'Theme footer default area','nt-conversi' ),
        'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="widget-head">',
        'after_title' => '</h3>'
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer widget area 1', 'nt-conversi' ),
        'id' => 'nt_conversi_footer_widget1',
        'description' => esc_html__( 'Theme footer widget area first column.','nt-conversi' ),
        'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="widget-head">',
        'after_title' => '</h3>'
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'Footer widget area 2', 'nt-conversi' ),
        'id' => 'nt_conversi_footer_widget2',
        'description' => esc_html__( 'Theme footer widget area second column.','nt-conversi' ),
        'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="widget-head">',
        'after_title' => '</h3>'
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'WooCommerce Single Product Page', 'nt-conversi' ),
        'id' => 'shop-single-page-sidebar',
        'description' => esc_html__( 'Widget area for WooCommerce single page','nt-conversi' ),
        'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="widget-head">',
        'after_title' => '</h3>'
    ) );
    register_sidebar( array(
        'name' => esc_html__( 'WooCommerce Shop Page', 'nt-conversi' ),
        'id' => 'shop-page-sidebar',
        'description' => esc_html__( 'Widget area for WooCommerce shop page','nt-conversi' ),
        'before_widget' => '<div class="col-md-3"><div class="widget %2$s">',
        'after_widget' => '</div></div>',
        'before_title' => '<h3 class="widget-head">',
        'after_title' => '</h3>'
    ) );
    if ( ot_get_option('nt_conversi_use_custom_footer_widget') == 'yes' ) {
        $nt_conversi_fw_widget = ot_get_option('nt_conversi_fw_widget', array());
        $count = 1;
        foreach( $nt_conversi_fw_widget as $fw ) {

            $name = isset( $fw['name'] ) != '' ? esc_html( $fw['name'] ) : 'Custom widget '.$count;
            $colmd = isset( $fw['colmd'] ) != '' || isset( $fw['colmd'] ) != '0' ? $fw['colmd'] : 3;
            $colsm = isset( $fw['colsm'] ) != '' || isset( $fw['colsm'] ) != '0'? $fw['colsm'] : 6;
            register_sidebar( array(
                'id' => 'nt_conversi_fw'.$count,
                'name' => $name,
                'description' => 'Desktop column width: '.esc_attr($colmd).', Tablet column width: '.esc_attr($colsm),
                'before_widget' => '<div class="col-sm-'.esc_attr($colsm).' col-md-'.esc_attr($colmd).'"><div class="widget %2$s">',
                'after_widget' => '</div></div>',
                'before_title' => '<h3 class="widget-head">',
                'after_title' => '</h3>'
            ) );
            $count++;
        }
    }

}
add_action( 'widgets_init', 'nt_conversi_widgets_init' );

/*************************************************
## SANITIZE MODIFIED VC-ELEMENTS OUTPUT
*************************************************/


if (!function_exists('nt_conversi_vc_sanitize_data')) {
    function nt_conversi_vc_sanitize_data($html_data)
    {
        return $html_data;
    }
}


/*************************************************
## Include the TGM_Plugin_Activation class.
*************************************************/

require_once get_template_directory() . '/includes/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'nt_conversi_register_required_plugins' );

function nt_conversi_register_required_plugins() {

    $plugins = array(
        array(
            'name' => esc_html__('Contact Form 7', "nt-conversi"),
            'slug' => 'contact-form-7',
        ),
        array(
            'name' => esc_html__('Breadcrumb NavXT', "nt-conversi"),
            'slug' => 'breadcrumb-navxt',
        ),
        array(
            'name' =>  esc_html__('Theme Options Panel', "nt-conversi"),
            'slug' =>  'option-tree',
            'required' =>  true,
        ),
        array(
            'name' => esc_html__('Meta Box', "nt-conversi"),
            'slug' => 'meta-box',
            'required' => true,
        ),
        array(
            'name' => esc_html__('Metabox Show/Hide', "nt-conversi"),
            'slug' => 'meta-box-show-hide',
            'source' => 'https://ninetheme.com/documentation/plugins/meta-box-show-hide.zip',
            'required' => true,
            'version' => '1.3',
        ),
        array(
            'name' => esc_html__('Envato Auto Update Theme', "nt-conversi"),
            'slug' => 'envato-market',
            'source' => 'https://ninetheme.com/documentation/plugins/envato-market.zip',
            'required' => false,
            'version' => '2.0.3',
        ),
        array(
            'name' => esc_html__('Page Builder', "nt-conversi"),
            'slug' => 'js_composer',
            'source' => 'https://ninetheme.com/documentation/plugins/js_composer.zip',
            'required' => true,
        ),
        array(
            'name' => esc_html__('Revolution Slider', "nt-conversi"),
            'slug' => 'revolution_slider',
            'source' => 'https://ninetheme.com/documentation/plugins/revolution_slider.zip',
            'required' => false,
        ),
        array(
            'name' => esc_html__('Portfolio Post Type', 'nt-conversi'),
            'slug' => 'portfolio-post-type',
            'source' => 'https://ninetheme.com/documentation/plugins/portfolio-post-type.zip',
            'required' => false,
        ),
        array(
            'name' => esc_html__('Price Tables', 'nt-conversi'),
            'slug' => 'price-table-type',
            'source' => 'https://ninetheme.com/documentation/plugins/price-table-type.zip',
            'required' => false,
        ),
        array(
            'name' => esc_html__('WP Conversi Shortcodes', "nt-conversi"),
            'slug' => 'nt-conversi-shortcodes',
            'source' => get_template_directory() . '/plugins/nt-conversi-shortcodes.zip',
            'required' => true,
            'version' => '1.2.9'
        )
    );

    $config = array(
        'id' => 'tgmpa',
        'default_path' => '',
        'menu' => 'tgmpa-install-plugins',
        'parent_slug' => apply_filters( 'ninetheme_parent_slug', 'themes.php' ),
        'has_notices' => true,
        'dismissable' => true,
        'dismiss_msg' => '',
        'is_automatic' => true,
        'message' => '',
    );

    tgmpa( $plugins, $config );
}



/*************************************************
## Register Menu
*************************************************/

class Nt_Conversi_Wp_Bootstrap_Navwalker extends Walker_Nav_Menu {
    /**
    * @see Walker::start_lvl()
    * @since 3.0.0
    */
    public function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat( "\t", $depth );
        $output .= "\n$indent<ul role=\"menu\" class=\"sub-menu dropdown-menu\">\n";
    }

    /**
    * @see Walker::start_el()
    * @since 3.0.0
    */
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

        /**
        * Dividers, Headers or Disabled
        */
        if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="divider item-has-children">';
        } else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="divider item-has-children">';
        } else if ( strcasecmp( $item->attr_title, 'dropdown-header item-has-children') == 0 && $depth === 1 ) {
            $output .= $indent . '<li role="presentation" class="dropdown-header item-has-children">' . esc_attr( $item->title );
        } else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {
            $output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';
        } else {

            $class_names = $value = '';

            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $classes[] = 'menu-item-' . $item->ID;

            $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

            if ( $args->has_children )
            $class_names .= 'sub item-has-children';

            if ( in_array( 'current-menu-item', $classes ) )
            $class_names .= ' active';

            $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

            $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
            $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

            $output .= $indent . '<li' . $id . $value . $class_names .'>';

            $atts = array();
            $atts['title']  = ! empty( $item->title )	? $item->title	: '';
            $atts['target'] = ! empty( $item->target )	? $item->target	: '';
            $atts['rel']    = ! empty( $item->xfn )		? $item->xfn	: '';

            // If item has_children add atts to a.
            if ( $args->has_children ) {
                $atts['href']   		= $item->url;
                $atts['data-toggle']	= 'dropdown';
                $atts['class']			= 'dropdown-toggle';
            } else {
                $atts['href'] = ! empty( $item->url ) ? $item->url : '';
            }


            $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

            $attributes = '';
            foreach ( $atts as $attr  => $value ) {
                if ( ! empty( $value ) ) {
                    $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                    $attributes .= ' ' . $attr . '="' . $value . '"';
                }
            }

            $item_output = $args->before;

            /*
            * Glyphicons
            **/
            if ( ! empty( $item->attr_title ) )
            $item_output .= '<a'. $attributes .'><span class=" ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';
            else
            $item_output .= '<a'. $attributes .'>';

            $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
            $item_output .= ( $args->has_children ) ? ' <span class="caret"></span></a>' : '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
        }
    }

    /**
    * Traverse elements to create list from elements.
    **/
    public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
        if ( ! $element )
        return;

        $id_field = $this->db_fields['id'];

        // Display this element.
        if ( is_object( $args[0] ) )
        $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

        parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
    }

    /**
    * Menu Fallback
    **/
    public static function fallback( $args ) {
        if ( current_user_can( 'manage_options' ) ) {

            extract( $args );

            $fb_output = null;

            if ( $container ) {
                $fb_output = '<' . $container;

                if ( $container_id )
                $fb_output .= ' id="' . $container_id . '"';

                if ( $container_class )
                $fb_output .= ' class="' . $container_class . '"';

                $fb_output .= '>';
            }

            $fb_output .= '<ul';

            if ( $menu_id )
            $fb_output .= ' id="' . $menu_id . '"';

            if ( $menu_class )
            $fb_output .= ' class="' . $menu_class . '"';

            $fb_output .= '>';
            $fb_output .= '<li><a href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">'. esc_html__( 'Add a menu','nt-conversi' ) .'</a></li>';
            $fb_output .= '</ul>';

            if ( $container )
            $fb_output .= '</' . $container . '>';

            echo wp_kses( $fb_output, nt_conversi_allowed_html() );
        }
    }
}

/*************************************************
## nt_conversi Comment
*************************************************/

if ( ! function_exists( 'nt_conversi_comment' ) ) {
    function nt_conversi_comment( $comment, $args, $depth ) {
        $GLOBALS['comment'] = $comment;
        switch ( $comment->comment_type ) :
            case 'pingback' :
            case 'trackback' :
            ?>

            <article class="post pingback">
                <p><?php esc_html_e( 'Pingback:', 'nt-conversi' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( '(Edit)', 'nt-conversi' ), ' ' ); ?></p>
                <?php
                break;
                default :
                ?>
                <div class="comments">
                    <ul>
                        <li class="comment">
                            <span class="who">
                                <?php echo get_avatar( $comment, 80 ); ?>
                            </span>
                            <div class="who-comment">
                                <p class="name"><?php comment_author(); ?></p>
                                <?php comment_text(); ?>
                                <?php edit_comment_link( esc_html__( 'Edit', 'nt-conversi' ), ' ' ); ?>
                                <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
                                <span class="meta-data"><time class="comment-date" pubdate datetime="<?php comment_time( 'c' ); ?>"><?php comment_date(); ?> <?php esc_html_e( 'at', 'nt-conversi' ); ?> <?php comment_time(); ?></time></span>
                                <?php if ( $comment->comment_approved == '0' ) : ?>
                                    <em><?php esc_html_e( 'Your comment is awaiting moderation.', 'nt-conversi' ); ?></em>
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                </div>
            <?php
            break;
        endswitch;
    }
}


/*************************************************
## SANITIZE MODIFIED VC-ELEMENTS OUTPUT
*************************************************/

if (!function_exists('nt_conversi_vc_sanitize_data')) {
    function nt_conversi_vc_sanitize_data($html_data)
    {
        return $html_data;
    }
}

if( ! function_exists('nt_conversi_vc_inject_shortcode_css') )  {
    function nt_conversi_vc_inject_shortcode_css( $id ){
        $shortcodes_custom_css = get_post_meta( $id, '_wpb_shortcodes_custom_css', true );
        if ( ! empty( $shortcodes_custom_css ) ) {
            $shortcodes_custom_css = strip_tags( $shortcodes_custom_css );
            echo '<style type="text/css" data-type="nt-shortcodes-custom-css-page-'.$id.'">';
            echo esc_attr( $shortcodes_custom_css );
            echo '</style>';
        }
    }
    add_action('wp_head', 'nt_conversi_vc_inject_shortcode_css');
}
/**********************************
## THEME ALLOWED HTML TAG
/**********************************/

if (! function_exists('nt_conversi_allowed_html')) {
    function nt_conversi_allowed_html()
    {
        $allowed_tags = array(
            'a' => array(
                'class' => array(),
                'href' => array(),
                'rel' => array(),
                'title' => array(),
                'target' => array(),
            ),
            'abbr' => array(
                'title' => array(),
            ),
            'iframe' => array(
                'src' => array(),
            ),
            'b' => array(),
            'br' => array(),
            'blockquote' => array(
                'cite' => array(),
            ),
            'cite' => array(
                'title' => array(),
            ),
            'code' => array(),
            'del' => array(
                'datetime' => array(),
                'title' => array(),
            ),
            'dd' => array(),
            'div' => array(
                'class' => array(),
                'title' => array(),
                'style' => array(),
            ),
            'dl' => array(),
            'dt' => array(),
            'em' => array(),
            'h1' => array(),
            'h2' => array(),
            'h3' => array(),
            'h4' => array(),
            'h5' => array(),
            'h6' => array(),
            'i' => array(
                'class' => array(),
            ),
            'img' => array(
                'alt' => array(),
                'class' => array(),
                'height' => array(),
                'src' => array(),
                'width' => array(),
            ),
            'li' => array(
                'class' => array(),
            ),
            'ol' => array(
                'class' => array(),
            ),
            'p' => array(
                'class' => array(),
            ),
            'q' => array(
                'cite' => array(),
                'title' => array(),
            ),
            'span' => array(
                'class' => array(),
                'title' => array(),
                'style' => array(),
            ),
            'strike' => array(),
            'strong' => array(),
            'ul' => array(
                'class' => array(),
            ),
        );

        return $allowed_tags;
    }
}


/*************************************************
## THEME SETUP WIZARD
https://github.com/richtabor/MerlinWP
*************************************************/

require_once get_parent_theme_file_path( '/includes/merlin/admin-menu.php' );
require_once get_parent_theme_file_path( '/includes/merlin/class-merlin.php' );
require_once get_parent_theme_file_path( '/includes/demo-wizard-config.php' );

function conversi_merlin_local_import_files() {
    return array(
        array(
            'import_file_name' => 'Demo Import',
            // xml data
            'local_import_file' => get_parent_theme_file_path( 'includes/merlin/demodata/data.xml' ),
            // widget data
            'local_import_widget_file' => get_parent_theme_file_path( 'includes/merlin/demodata/widgets.wie' ),
            // option tree -> theme options
            'local_import_option_tree_file' => get_parent_theme_file_path( '/includes/merlin/demodata/optiontree.txt' ),
        )
    );
}
add_filter( 'merlin_import_files', 'conversi_merlin_local_import_files' );


/**
* Execute custom code after the whole import has finished.
*/
function conversi_merlin_after_import_setup() {
    // Assign menus to their locations.
    $primary = get_term_by( 'name', 'Menu 1', 'nav_menu' );

    set_theme_mod(
        'nav_menu_locations', array(
            'primary' => $primary->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home 1' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'merlin_after_all_import', 'conversi_merlin_after_import_setup' );

function conversi_disable_size_images_during_import() {
    add_filter( 'intermediate_image_sizes_advanced', function( $sizes ){
        unset( $sizes['thumbnail'] );
        unset( $sizes['medium'] );
        unset( $sizes['medium_large'] );
        unset( $sizes['large'] );
        unset( $sizes['1536x1536'] );
        unset( $sizes['2048x2048'] );
        unset( $sizes['woocommerce_thumbnail'] );
        unset( $sizes['woocommerce_single'] );
        unset( $sizes['woocommerce_gallery_thumbnail'] );
        unset( $sizes['shop_catalog'] );
        unset( $sizes['shop_single'] );
        unset( $sizes['shop_thumbnail'] );
        return $sizes;
    } );
}
add_action( 'import_start', 'conversi_disable_size_images_during_import');

add_action('init', 'do_output_buffer'); function do_output_buffer() { ob_start(); }

/*************************************************
## CUSTOM POST CLASS
*************************************************/

if (! function_exists('nt_conversi_post_theme_class')) {
    function nt_conversi_post_theme_class($classes)
    {

        if ( is_single() ) {
            $classes[] =  has_blocks() ? 'nt-single-has-block' : '';
        }

        return $classes;
    }
    add_filter('post_class', 'nt_conversi_post_theme_class');
}

add_action('admin_notices', 'nt_conversi_notice_for_activation');
if (!function_exists('nt_conversi_notice_for_activation')) {
    function nt_conversi_notice_for_activation() {
        global $pagenow;

        if ( !get_option('envato_purchase_code_19167381') ) {

            echo '<div class="notice notice-warning">
                <p>' . sprintf(
                esc_html__( 'Enter your Envato Purchase Code to receive agro Theme and plugin updates  %s', 'nt-conversi' ),
                '<a href="' . admin_url('admin.php?page=merlin&step=license') . '">' . esc_html__( 'Enter Purchase Code', 'nt-conversi' ) . '</a>') . '</p>
            </div>';
        }
    }
}


if ( !get_option('envato_purchase_code_19167381') ) {
    add_filter('auto_update_theme', '__return_false');
}

add_action('upgrader_process_complete', 'nt_conversi_upgrade_function', 10, 2);
if ( !function_exists('nt_conversi_upgrade_function') ) {
    function nt_conversi_upgrade_function($upgrader_object, $options) {
        $purchase_code = get_option('envato_purchase_code_19167381');

        if (($options['action'] == 'update' && $options['type'] == 'theme') && !$purchase_code) {
            wp_redirect(admin_url('admin.php?page=merlin&step=license'));
        }
    }
}

if ( !function_exists( 'nt_conversi_is_theme_registered') ) {
    function nt_conversi_is_theme_registered() {
        $purchase_code = get_option('envato_purchase_code_19167381');
        $registered_by_purchase_code = !empty($purchase_code);

        // Purchase code entered correctly.
        if ($registered_by_purchase_code) {
            return true;
        }
    }
}

function nt_conversi_deactivate_envato_plugin() {
    if (  function_exists( 'envato_market' ) && !get_option('envato_purchase_code_19167381') ) {
        deactivate_plugins('envato-market/envato-market.php');
    }
}
add_action( 'admin_init', 'nt_conversi_deactivate_envato_plugin' );
