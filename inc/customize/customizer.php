<?php
/**
 * cricket-league-pro Theme Customizer
 *
 * @package cricket-league-pro
 */
/**
 * Loads custom control for layout settings
 */
function cricket_league_pro_custom_controls()
{
    require_once get_template_directory() . '/inc/customize/controls/admin/customize-texteditor-control.php';
    require_once get_template_directory() . '/inc/customize/controls/custom-controls.php';
    require_once get_template_directory() . '/inc/customize/controls/button-controls.php';

    // Inlcude the Alpha Color Picker control file.
    require_once get_template_directory() . '/inc/customize/controls/alpha-color-picker.php';
    get_stylesheet_directory_uri() . '/assets/js/alpha-color-picker.js';
    get_stylesheet_directory_uri() . '/assets/css/alpha-color-picker.css';

}
add_action('customize_register', 'cricket_league_pro_custom_controls');
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cricket_league_pro_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';

    $wp_customize->selective_refresh->add_partial('blogname', array(
        'selector' => '.logo a',
        'render_callback' => 'twentyfifteen_customize_partial_blogname',
    ));
    $wp_customize->selective_refresh->add_partial('blogdescription', array(
        'selector' => '.site-description',
        'render_callback' => 'twentyfifteen_customize_partial_blogdescription',
    ));

    $wp_customize->add_setting('cricket_league_pro_display_title', array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    )
    );
    $wp_customize->add_control('cricket_league_pro_display_title', array(
        'type' => 'checkbox',
        'label' => __('Show Title', 'cricket-league-pro'),
        'section' => 'title_tagline',
    )
    );
    $wp_customize->add_setting('cricket_league_pro_display_tagline', array(
        'default' => 'false',
        'sanitize_callback' => 'sanitize_text_field'
    )
    );
    $wp_customize->add_control('cricket_league_pro_display_tagline', array(
        'type' => 'checkbox',
        'label' => __('Show Tagline', 'cricket-league-pro'),
        'section' => 'title_tagline',
    )
    );
    //add home page setting pannel
    $wp_customize->add_panel('cricket_league_pro_panel_id', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Theme Settings', 'cricket-league-pro'),
        'description' => __('Description of what this panel does.', 'cricket-league-pro'),
    ));
    $font_array = array(
        '' => __('No Fonts', 'cricket-league-pro'),
        'Abril Fatface' => __('Abril Fatface', 'cricket-league-pro'),
        'Acme' => __('Acme', 'cricket-league-pro'),
        'Anton' => __('Anton', 'cricket-league-pro'),
        'Architects Daughter' => __('Architects Daughter', 'cricket-league-pro'),
        'Arimo' => __('Arimo', 'cricket-league-pro'),
        'Arsenal' => __('Arsenal', 'cricket-league-pro'),
        'Arvo' => __('Arvo', 'cricket-league-pro'),
        'Alegreya' => __('Alegreya', 'cricket-league-pro'),
        'Alfa Slab One' => __('Alfa Slab One', 'cricket-league-pro'),
        'Averia Serif Libre' => __('Averia Serif Libre', 'cricket-league-pro'),
        'Bangers' => __('Bangers', 'cricket-league-pro'),
        'Boogaloo' => __('Boogaloo', 'cricket-league-pro'),
        'Bad Script' => __('Bad Script', 'cricket-league-pro'),
        'Bitter' => __('Bitter', 'cricket-league-pro'),
        'Bree Serif' => __('Bree Serif', 'cricket-league-pro'),
        'BenchNine' => __('BenchNine', 'cricket-league-pro'),
        'Cabin' => __('Cabin', 'cricket-league-pro'),
        'Cardo' => __('Cardo', 'cricket-league-pro'),
        'Courgette' => __('Courgette', 'cricket-league-pro'),
        'Cherry Swash' => __('Cherry Swash', 'cricket-league-pro'),
        'Cormorant Garamond' => __('Cormorant Garamond', 'cricket-league-pro'),
        'Crimson Text' => __('Crimson Text', 'cricket-league-pro'),
        'Cuprum' => __('Cuprum', 'cricket-league-pro'),
        'Cookie' => __('Cookie', 'cricket-league-pro'),
        'Chewy' => __('Chewy', 'cricket-league-pro'),
        'Days One' => __('Days One', 'cricket-league-pro'),
        'Dosis' => __('Dosis', 'cricket-league-pro'),
        'Economica' => __('Economica', 'cricket-league-pro'),
        'Fredoka One' => __('Fredoka One', 'cricket-league-pro'),
        'Fjalla One' => __('Fjalla One', 'cricket-league-pro'),
        'Francois One' => __('Francois One', 'cricket-league-pro'),
        'Frank Ruhl Libre' => __('Frank Ruhl Libre', 'cricket-league-pro'),
        'Gloria Hallelujah' => __('Gloria Hallelujah', 'cricket-league-pro'),
        'Great Vibes' => __('Great Vibes', 'cricket-league-pro'),
        'Handlee' => __('Handlee', 'cricket-league-pro'),
        'Hammersmith One' => __('Hammersmith One', 'cricket-league-pro'),
        'Inconsolata' => __('Inconsolata', 'cricket-league-pro'),
        'Indie Flower' => __('Indie Flower', 'cricket-league-pro'),
        'IM Fell English SC' => __('IM Fell English SC', 'cricket-league-pro'),
        'Julius Sans One' => __('Julius Sans One', 'cricket-league-pro'),
        'Josefin Slab' => __('Josefin Slab', 'cricket-league-pro'),
        'Josefin Sans' => __('Josefin Sans', 'cricket-league-pro'),
        'Kanit' => __('Kanit', 'cricket-league-pro'),
        'Lobster' => __('Lobster', 'cricket-league-pro'),
        'Lato' => __('Lato', 'cricket-league-pro'),
        'Lora' => __('Lora', 'cricket-league-pro'),
        'Libre Baskerville' => __('Libre Baskerville', 'cricket-league-pro'),
        'Lobster Two' => __('Lobster Two', 'cricket-league-pro'),
        'Merriweather' => __('Merriweather', 'cricket-league-pro'),
        'Monda' => __('Monda', 'cricket-league-pro'),
        'Montserrat' => __('Montserrat', 'cricket-league-pro'),
        'Muli' => __('Muli', 'cricket-league-pro'),
        'Marck Script' => __('Marck Script', 'cricket-league-pro'),
        'Noto Serif' => __('Noto Serif', 'cricket-league-pro'),
        'Open Sans' => __('Open Sans', 'cricket-league-pro'),
        'Overpass' => __('Overpass', 'cricket-league-pro'),
        'Overpass Mono' => __('Overpass Mono', 'cricket-league-pro'),
        'Oxygen' => __('Oxygen', 'cricket-league-pro'),
        'Orbitron' => __('Orbitron', 'cricket-league-pro'),
        'Patua One' => __('Patua One', 'cricket-league-pro'),
        'Pacifico' => __('Pacifico', 'cricket-league-pro'),
        'Padauk' => __('Padauk', 'cricket-league-pro'),
        'Playball' => __('Playball', 'cricket-league-pro'),
        'Playfair Display' => __('Playfair Display', 'cricket-league-pro'),
        'PT Sans' => __('PT Sans', 'cricket-league-pro'),
        'Philosopher' => __('Philosopher', 'cricket-league-pro'),
        'Permanent Marker' => __('Permanent Marker', 'cricket-league-pro'),
        'Poiret One' => __('Poiret One', 'cricket-league-pro'),
        'Quicksand' => __('Quicksand', 'cricket-league-pro'),
        'Quattrocento Sans' => __('Quattrocento Sans', 'cricket-league-pro'),
        'Raleway' => __('Raleway', 'cricket-league-pro'),
        'Rubik' => __('Rubik', 'cricket-league-pro'),
        'Rokkitt' => __('Rokkitt', 'cricket-league-pro'),
        'Russo One' => __('Russo One', 'cricket-league-pro'),
        'Righteous' => __('Righteous', 'cricket-league-pro'),
        'Slabo' => __('Slabo', 'cricket-league-pro'),
        'Source Sans Pro' => __('Source Sans Pro', 'cricket-league-pro'),
        'Shadows Into Light Two' => __('Shadows Into Light Two', 'cricket-league-pro'),
        'Shadows Into Light' => __('Shadows Into Light', 'cricket-league-pro'),
        'Sacramento' => __('Sacramento', 'cricket-league-pro'),
        'Shrikhand' => __('Shrikhand', 'cricket-league-pro'),
        'Tangerine' => __('Tangerine', 'cricket-league-pro'),
        'Ubuntu' => __('Ubuntu', 'cricket-league-pro'),
        'VT323' => __('VT323', 'cricket-league-pro'),
        'Varela Round' => __('Varela Round', 'cricket-league-pro'),
        'Vampiro One' => __('Vampiro One', 'cricket-league-pro'),
        'Vollkorn' => __('Vollkorn', 'cricket-league-pro'),
        'Volkhov' => __('Volkhov', 'cricket-league-pro'),
        'Yanone Kaffeesatz' => __('Yanone Kaffeesatz', 'cricket-league-pro')
    );

    $Check_option = array(
        '' => __('Not Selected', 'logistics_services_pr'),
        'Check' => __('Check', 'cricket_league_pro'),
        'Uncheck' => __('Cross', 'cricket_league_pro'),
    );
    $font_weight_array = array(
        '' => __('Not Selected','cricket-league-pro'),
        '100' => __('100','cricket-league-pro'),
        '200' => __('200', 'cricket-league-pro'),
        '300' => __('300', 'cricket-league-pro'),
        '400' => __('400', 'cricket-league-pro'),
        '500' => __('500', 'cricket-league-pro'),
        '600' => __('600', 'cricket-league-pro'),
        '700' => __('700', 'cricket-league-pro'),
        '800' => __('800', 'cricket-league-pro'),
        '900' => __('900', 'cricket-league-pro'),
    );
    require_once get_template_directory() . '/inc/customize/controls/slider-line-control/slider-line-control.php';
    require_once get_template_directory() . '/inc/customize/controls/social-icons/social-icon-picker.php';

    require_once get_template_directory() . '/inc/customize/controls/customizer-text-radio-button/class/customizer-text-radio-button.php';
    require_once get_template_directory() . '/inc/customize/controls/customizer-seperator/class/customizer-seperator.php';
    require_once get_template_directory() . '/inc/customize/controls/customizer-notice/class/customizer-notice.php';

    require_once get_template_directory() . '/inc/customize/controls/customize-repeater/customize-repeater.php';

    if ((ThemeWhizzie::get_the_validation_status() === 'true') && (ThemeWhizzie::get_the_suspension_status() == 'false')) {
        require_once get_template_directory() . '/inc/customize/sections/customizer-custom-variables.php';
        // require_once get_template_directory() . '/inc/customize/sections/customizer-part-social-icons.php';
        require_once get_template_directory() . '/inc/customize/sections/customizer-part-header.php';
        require_once get_template_directory() . '/inc/customize/sections/customizer-part-slide.php';
        require_once get_template_directory() . '/inc/customize/sections/customizer-part-home.php';
        require_once get_template_directory() . '/inc/customize/sections/customizer-part-footer.php';
        require_once get_template_directory() . '/inc/customize/sections/customizer-other-page.php';

    }
}
add_action('customize_register', 'cricket_league_pro_customize_register');
//Integer
function cricket_league_pro_sanitize_integer($input)
{
    if (is_numeric($input)) {
        return intval($input);
    }
}

/* Logo Resizer */
load_template(trailingslashit(get_template_directory()) . '/inc/logo/logo-resizer.php');

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class cricket_league_pro_customize
{
    /**
     * Returns the instance.
     *
     * @since  1.0.0
     * @access public
     * @return object
     */
    public static function get_instance()
    {
        static $instance = null;
        if (is_null($instance)) {
            $instance = new self;
            $instance->setup_actions();
        }
        return $instance;
    }
    /**
     * Constructor method.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function __construct()
    {
    }
    /**
     * Sets up initial actions.
     *
     * @since  1.0.0
     * @access private
     * @return void
     */
    private function setup_actions()
    {
        // Register panels, sections, settings, controls, and partials.
        add_action('customize_register', array($this, 'sections'));
        add_action('customize_register', array($this, 'bundle'));
        // Register scripts and styles for the controls.
        add_action('customize_controls_enqueue_scripts', array($this, 'enqueue_control_scripts'), 0);
    }
    /**
     * Sets up the customizer sections.
     *
     * @since  1.0.0
     * @access public
     * @param  object  $manager
     * @return void
     */
    public function sections($manager)
    {
        // Load custom sections.
        load_template(trailingslashit(get_template_directory()) . '/inc/review-section.php');
        // Register custom section types.
        $manager->register_section_type('cricket_league_pro_customize_reviews_and_testimonials');
        // Register sections.
        $manager->add_section(
            new cricket_league_pro_customize_reviews_and_testimonials(
                $manager,
                'example_1',
                array(
                    'title' => esc_html__('Review & Testimonial', 'cricket-league-pro'),
                    'reviews_and_testimonials_text' => esc_html__('Rate Us', 'cricket-league-pro'),
                    'reviews_and_testimonials_url' => 'https://www.vwthemes.com/topic/reviews-and-testimonials/',
                    'priority' => 1,
                )
            )
        );
    }

    public function bundle($manager)
    {
        // Load custom sections.
        load_template(trailingslashit(get_template_directory()) . '/inc/review-section.php');
        // Register custom section types.
        $manager->register_section_type('cricket_league_pro_customize_reviews_and_testimonials');
        // Register sections.
        $manager->add_section(
            new cricket_league_pro_customize_reviews_and_testimonials(
                $manager,
                'example_2',
                array(
                    'title' => esc_html__('Theme Bundle', 'cricket-league-pro'),
                    'reviews_and_testimonials_text' => esc_html__('Buy Now', 'cricket-league-pro'),
                    'reviews_and_testimonials_url' => 'https://www.vwthemes.com/premium/theme-bundle/',
                    'priority' => 2,
                )
            )
        );
    }
    /**
     * Loads theme customizer CSS.
     *
     * @since  1.0.0
     * @access public
     * @return void
     */
    public function enqueue_control_scripts()
    {
        wp_enqueue_script('cricket-league-pro-customize-controls', trailingslashit(get_template_directory_uri()) . '/assets/js/customize-controls.js', array('customize-controls'));
        wp_enqueue_style('cricket-league-pro-customize-controls', trailingslashit(get_template_directory_uri()) . '/assets/css/customize-controls.css');
    }
}
// Doing this customizer thang!
cricket_league_pro_customize::get_instance();