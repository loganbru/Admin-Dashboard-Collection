<?php
class WPSEO_Options_Extend {
    public static $options = array(
        'wpseo'               => 'WPSEO_Option_Wpseo',
        'wpseo_permalinks'    => 'WPSEO_Option_Permalinks',
        'wpseo_titles'        => 'WPSEO_Option_Titles',
        'wpseo_social'        => 'WPSEO_Option_Social',
        'wpseo_rss'           => 'WPSEO_Option_RSS',
        'wpseo_internallinks' => 'WPSEO_Option_InternalLinks',
        'wpseo_xml'           => 'WPSEO_Option_XML',
        'wpseo_ms'            => 'WPSEO_Option_MS',
        'wpseo_taxonomy_meta' => 'WPSEO_Taxonomy_Meta',
    );

    protected static $option_instances;

    protected static $instance;

    protected function __construct() {
        $is_multisite = is_multisite();

        foreach ( self::$options as $option_name => $option_class ) {
            $instance = call_user_func( array( $option_class, 'get_instance' ) );

            if ( ! $instance->multisite_only || $is_multisite ) {
                self::$option_instances[ $option_name ] = $instance;
            }
            else {
                unset( self::$options[ $option_name ] );
            }
        }
    }

    public static function get_instance() {
        if ( ! ( self::$instance instanceof self ) ) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public static function get_option_names() {
        static $option_names = array();
        return $option_names;
    }


    public static function get_all() {
        $all_options  = array();
        $option_names = self::get_option_names();

        if ( is_array( $option_names ) && $option_names !== array() ) {
            foreach ( $option_names as $option_name ) {
                if ( self::$option_instances[ $option_name ]->multisite_only !== true ) {
                    $option = get_option( $option_name );
                }
                else {
                    $option = get_site_option( $option_name );
                }

                if ( is_array( $option ) && $option !== array() ) {
                    $all_options = array_merge( $all_options, $option );
                }
            }
        }

        $all_options = array(
            'breadcrumbs-404crumb'      => '', // text field
            'breadcrumbs-blog-remove'   => false,
            'breadcrumbs-boldlast'      => false,
            'breadcrumbs-archiveprefix' => '', // text field
            'breadcrumbs-enable'        => false,
            'breadcrumbs-home'          => '', // text field
            'breadcrumbs-prefix'        => '', // text field
            'breadcrumbs-searchprefix'  => '', // text field
            'breadcrumbs-sep'           => ''
        );

        $all_options['breadcrumbs-404crumb']      = esc_html__('Error 404: Page not found', 'nrgnetwork');
        $all_options['breadcrumbs-archiveprefix'] = esc_html__('Archives for', 'nrgnetwork');
        $all_options['breadcrumbs-home']          = esc_html__('Home', 'nrgnetwork');
        $all_options['breadcrumbs-searchprefix']  = esc_html__('You searched for', 'nrgnetwork');

        if( is_home() && get_query_var('post_type')=='portfolio' || is_singular('portfolio') || get_query_var('portfolio_entries')!='' ){
            $all_options['breadcrumbs-home'] = TT::get_mod('portfolio_label');
        }

        return $all_options;
    }

    public static function initialize() {
        /* Make sure title_test and description_test function are available even when called
               from the isolated activation */
        require_once( WPSEO_PATH . 'inc/wpseo-non-ajax-functions.php' );

        // wpseo_title_test();
        wpseo_description_test();

        /* Force WooThemes to use WordPress SEO data. */
        if ( function_exists( 'woo_version_init' ) ) {
            update_option( 'seo_woo_use_third_party_data', 'true' );
        }
    }

    public static function reset() {
        if ( ! is_multisite() ) {
            $option_names = self::get_option_names();
            if ( is_array( $option_names ) && $option_names !== array() ) {
                foreach ( $option_names as $option_name ) {
                    delete_option( $option_name );
                    update_option( $option_name, get_option( $option_name ) );
                }
            }
        }
        else {
            // Reset MS blog based on network default blog setting
            self::reset_ms_blog( get_current_blog_id() );
        }

        self::initialize();
    }


    public static function reset_ms_blog( $blog_id ) {
        if ( is_multisite() ) {
            $options      = get_site_option( 'wpseo_ms' );
            $option_names = self::get_option_names();

            if ( is_array( $option_names ) && $option_names !== array() ) {
                $base_blog_id = $blog_id;
                if ( $options['defaultblog'] !== '' && $options['defaultblog'] != 0 ) {
                    $base_blog_id = $options['defaultblog'];
                }

                foreach ( $option_names as $option_name ) {
                    delete_blog_option( $blog_id, $option_name );

                    $new_option = get_blog_option( $base_blog_id, $option_name );

                    /* Remove sensitive, theme dependent and site dependent info */
                    if ( isset( self::$option_instances[ $option_name ] ) && self::$option_instances[ $option_name ]->ms_exclude !== array() ) {
                        foreach ( self::$option_instances[ $option_name ]->ms_exclude as $key ) {
                            unset( $new_option[ $key ] );
                        }
                    }

                    if ( $option_name === 'wpseo' ) {
                        $new_option['ms_defaults_set'] = true;
                    }

                    update_blog_option( $blog_id, $option_name, $new_option );
                }
            }
        }
    }

}


class WPSEO_Taxonomy_Meta_Extend extends WPSEO_Options_Extend {

    public $option_name = 'wpseo_taxonomy_meta';
    public $include_in_all = false;
    protected $defaults = array();
    public static $name;

    public static $defaults_per_term = array(
        'wpseo_title'           => '',
        'wpseo_desc'            => '',
        'wpseo_metakey'         => '',
        'wpseo_canonical'       => '',
        'wpseo_bctitle'         => '',
        'wpseo_noindex'         => 'default',
        'wpseo_sitemap_include' => '-',
    );

    public static $no_index_options = array(
        'default' => '',
        'index'   => '',
        'noindex' => '',
    );

    public static $sitemap_include_options = array(
        '-'      => '',
        'always' => '',
        'never'  => '',
    );

    protected function __construct() {
        parent::__construct();
    }

    public static function get_instance() {
        if ( ! ( self::$instance instanceof self ) ) {
            self::$instance = new self();
            self::$name     = self::$instance->option_name;
        }

        return self::$instance;
    }


    public static function get_term_meta( $term, $taxonomy, $meta = null ) {
        /* Figure out the term id */
        if ( is_int( $term ) ) {
            $term = get_term_by( 'id', $term, $taxonomy );
        }
        elseif ( is_string( $term ) ) {
            $term = get_term_by( 'slug', $term, $taxonomy );
        }

        if ( is_object( $term ) && isset( $term->term_id ) ) {
            $term_id = $term->term_id;
        }
        else {
            return false;
        }


        $tax_meta = get_option( self::$name );

        /* If we have data for the term, merge with defaults for complete array, otherwise set defaults */
        if ( isset( $tax_meta[ $taxonomy ][ $term_id ] ) ) {
            $tax_meta = array_merge( self::$defaults_per_term, $tax_meta[ $taxonomy ][ $term_id ] );
        }
        else {
            $tax_meta = self::$defaults_per_term;
        }

        /* Either return the complete array or a single value from it or false if the value does not exist
               (shouldn't happen after merge with defaults, indicates typo in request) */
        if ( ! isset( $meta ) ) {
            return $tax_meta;
        }
        else {
            if ( isset( $tax_meta[ 'wpseo_' . $meta ] ) ) {
                return $tax_meta[ 'wpseo_' . $meta ];
            }
            else {
                return false;
            }
        }
    }

}





class WPSEO_Breadcrumbs_Extend {

    public static $instance;

    public static $before = '';

    public static $after = '';


    private $show_on_front;

    private $page_for_posts;

    private $post;

    private $options;


    private $element = 'li';

    private $separator = '';

    private $wrapper = 'ol';

    private $crumbs = array();

    private $crumb_count = 0;

    private $links = array();

    private $output;


    private function __construct() {
        $this->options        = WPSEO_Options_Extend::get_all();
        $this->post           = ( isset( $GLOBALS['post'] ) ? $GLOBALS['post'] : null );
        $this->show_on_front  = get_option( 'show_on_front' );
        $this->page_for_posts = get_option( 'page_for_posts' );

        $this->filter_element();
        $this->filter_separator();
        $this->filter_wrapper();

        $this->set_crumbs();
        $this->prepare_links();
        $this->links_to_string();
        $this->wrap_breadcrumb();
    }

    public static function breadcrumb( $before = '', $after = '', $display = true ) {
        if ( ! ( self::$instance instanceof self ) ) {
            self::$instance = new self();
        }
        // Remember the last used before/after for use in case the object goes __toString()
        self::$before = $before;
        self::$after  = $after;

        $output = $before . self::$instance->output . $after;

        if ( $display === true ) {
            print $output;

            return true;
        }
        else {
            return $output;
        }
    }

    public function __toString() {
        return self::$before . $this->output . self::$after;
    }

    private function filter_element() {
        $this->element = esc_attr($this->element);
    }

    private function filter_separator() {
        $separator       = $this->options['breadcrumbs-sep'];
        $this->separator = ' ' . $separator . ' ';
    }

    private function filter_wrapper() {
        $wrapper = $this->wrapper;
        $wrapper = tag_escape( $wrapper );
        if ( is_string( $wrapper ) && '' !== $wrapper ) {
            $this->wrapper = $wrapper;
        }
    }


    private function get_term_parents( $term ) {
        $tax     = $term->taxonomy;
        $parents = array();
        while ( $term->parent != 0 ) {
            $term      = get_term( $term->parent, $tax );
            $parents[] = $term;
        }

        return array_reverse( $parents );
    }

    private function find_deepest_term( $terms ) {
        $terms_by_id = array();
        foreach ( $terms as $term ) {
            $terms_by_id[ $term->term_id ] = $term;
        }
        foreach ( $terms as $term ) {
            unset( $terms_by_id[ $term->parent ] );
        }

        $parents_count = 0;
        $term_order    = 9999; // because ASC
        reset( $terms_by_id );
        $deepest_term = current( $terms_by_id );
        foreach ( $terms_by_id as $term ) {
            $parents = $this->get_term_parents( $term );

            if ( count( $parents ) >= $parents_count ) {
                $parents_count = count( $parents );

                // if higher count
                if ( count( $parents ) > $parents_count ) {
                    // reset order
                    $term_order = 9999;
                }

                $parent_order = 9999; // set default order
                foreach ( $parents as $parent ) {
                    if ( $parent->parent == 0 && isset( $parent->term_order ) ) {
                        $parent_order = $parent->term_order;
                    }
                }

                // check if parent has lowest order
                if ( $parent_order < $term_order ) {
                    $term_order = $parent_order;

                    $deepest_term = $term;
                }
            }
        }

        return $deepest_term;
    }

    private function get_post_ancestors() {
        $ancestors = array();

        if ( isset( $this->post->ancestors ) ) {
            if ( is_array( $this->post->ancestors ) ) {
                $ancestors = array_values( $this->post->ancestors );
            }
            else {
                $ancestors = array( $this->post->ancestors );
            }
        }
        elseif ( isset( $this->post->post_parent ) ) {
            $ancestors = array( $this->post->post_parent );
        }


        if ( ! is_array( $ancestors ) ) {
            trigger_error( 'The return value for the "wp_seo_get_bc_ancestors" filter should be an array.', E_USER_WARNING );
            $ancestors = (array) $ancestors;
        }

        // Reverse the order so it's oldest to newest
        $ancestors = array_reverse( $ancestors );

        return $ancestors;
    }

    private function set_crumbs() {
        global $wp_query;

        $this->add_home_crumb();
        $this->maybe_add_blog_crumb();

        if ( ( $this->show_on_front === 'page' && is_front_page() ) || ( $this->show_on_front === 'posts' && is_home() ) ) {
            // do nothing
        }
        elseif ( $this->show_on_front == 'page' && is_home() ) {
            $this->add_blog_crumb();
        }
        elseif ( is_singular() ) {
            $this->maybe_add_pt_archive_crumb_for_post();

            if ( isset( $this->post->post_parent ) && 0 == $this->post->post_parent ) {
                $this->maybe_add_taxonomy_crumbs_for_post();
            }
            else {
                $this->add_post_ancestor_crumbs();
            }

            if ( isset( $this->post->ID ) ) {
                $this->add_single_post_crumb( $this->post->ID );
            }
        }
        else {
            if ( is_post_type_archive() ) {
                $this->add_ptarchive_crumb( $wp_query->query['post_type'] );
            }
            elseif ( is_tax() || is_tag() || is_category() ) {
                $this->add_crumbs_for_taxonomy();
            }
            elseif ( is_date() ) {
                if ( is_day() ) {
                    $this->add_linked_month_year_crumb();
                    $this->add_date_crumb();
                }
                elseif ( is_month() ) {
                    $this->add_month_crumb();
                }
                elseif ( is_year() ) {
                    $this->add_year_crumb();
                }
            }
            elseif ( is_author() ) {
                $user = $wp_query->get_queried_object();
                $this->add_predefined_crumb(
                    $this->options['breadcrumbs-archiveprefix'] . ' ' . $user->display_name,
                    null,
                    true
                );
            }
            elseif ( is_search() ) {
                $this->add_predefined_crumb(
                    $this->options['breadcrumbs-searchprefix'] . ' "' . esc_html( get_search_query() ) . '"',
                    null,
                    true
                );
            }
            elseif ( is_404() ) {

                if ( 0 !== get_query_var( 'year' ) || ( 0 !== get_query_var( 'monthnum' ) || 0 !== get_query_var( 'day' ) ) ) {
                    if ( 'page' == $this->show_on_front && ! is_home() ) {
                        if ( $this->page_for_posts && $this->options['breadcrumbs-blog-remove'] === false ) {
                            $this->add_blog_crumb();
                        }
                    }

                    if ( 0 !== get_query_var( 'day' ) ) {
                        $this->add_linked_month_year_crumb();

                        $date = sprintf( '%04d-%02d-%02d 00:00:00', get_query_var( 'year' ), get_query_var( 'monthnum' ), get_query_var( 'day' ) );
                        $this->add_date_crumb( $date );
                    }
                    elseif ( 0 !== get_query_var( 'monthnum' ) ) {
                        $this->add_month_crumb();
                    }
                    elseif ( 0 !== get_query_var( 'year' ) ) {
                        $this->add_year_crumb();
                    }
                }
                else {
                    $this->add_predefined_crumb(
                        $this->options['breadcrumbs-404crumb'],
                        null,
                        true
                    );
                }
            }
        }

        $this->crumb_count = count( $this->crumbs );
    }


    private function add_single_post_crumb( $id ) {
        $this->crumbs[] = array(
            'id' => $id,
        );
    }

    private function add_term_crumb( $term ) {
        $this->crumbs[] = array(
            'term' => $term,
        );
    }

    private function add_ptarchive_crumb( $pt ) {
        $this->crumbs[] = array(
            'ptarchive' => $pt,
        );
    }

    private function add_predefined_crumb( $text, $url = '', $allow_html = false ) {
        $this->crumbs[] = array(
            'text'       => $text,
            'url'        => $url,
            'allow_html' => $allow_html,
        );
    }

    private function add_home_crumb() {
        $this->add_predefined_crumb(
            $this->options['breadcrumbs-home'],
            get_home_url('/'),
            true
        );
    }

    private function add_blog_crumb() {
        $this->add_single_post_crumb( $this->page_for_posts );
    }

    private function maybe_add_blog_crumb() {
        if ( ( 'page' === $this->show_on_front && 'post' === get_post_type() ) && ( ! is_home() && ! is_search() ) ) {
            if ( $this->page_for_posts && $this->options['breadcrumbs-blog-remove'] === false ) {
                $this->add_blog_crumb();
            }
        }
    }

    private function maybe_add_pt_archive_crumb_for_post() {
        if ( isset( $this->post->post_type ) && get_post_type_archive_link( $this->post->post_type ) ) {
            $this->add_ptarchive_crumb( $this->post->post_type );
        }
    }

    private function maybe_add_taxonomy_crumbs_for_post() {
        if ( isset( $this->options[ 'post_types-' . $this->post->post_type . '-maintax' ] ) && $this->options[ 'post_types-' . $this->post->post_type . '-maintax' ] != '0' ) {
            $main_tax = $this->options[ 'post_types-' . $this->post->post_type . '-maintax' ];
            if ( isset( $this->post->ID ) ) {
                $terms = wp_get_object_terms( $this->post->ID, $main_tax );

                if ( is_array( $terms ) && $terms !== array() ) {

                    $deepest_term = $this->find_deepest_term( $terms );

                    if ( is_taxonomy_hierarchical( $main_tax ) && $deepest_term->parent != 0 ) {
                        $parent_terms = $this->get_term_parents( $deepest_term );
                        foreach ( $parent_terms as $parent_term ) {
                            $this->add_term_crumb( $parent_term );
                        }
                    }

                    $this->add_term_crumb( $deepest_term );
                }
            }
        }
    }

    private function add_post_ancestor_crumbs() {
        $ancestors = $this->get_post_ancestors();
        if ( is_array( $ancestors ) && $ancestors !== array() ) {
            foreach ( $ancestors as $ancestor ) {
                $this->add_single_post_crumb( $ancestor );
            }
        }
    }

    private function add_crumbs_for_taxonomy() {
        global $wp_query;

        $term = $wp_query->get_queried_object();

        // @todo adjust function name!!
        $this->maybe_add_preferred_term_parent_crumb( $term );

        $this->maybe_add_term_parent_crumbs( $term );

        $this->add_term_crumb( $term );
    }

    private function maybe_add_preferred_term_parent_crumb( $term ) {
        if ( isset( $this->options[ 'taxonomy-' . $term->taxonomy . '-ptparent' ] ) && $this->options[ 'taxonomy-' . $term->taxonomy . '-ptparent' ] != '0' ) {
            if ( 'post' == $this->options[ 'taxonomy-' . $term->taxonomy . '-ptparent' ] && $this->show_on_front == 'page' ) {
                if ( $this->page_for_posts ) {
                    $this->add_blog_crumb();
                }
            }
            else {
                $this->add_ptarchive_crumb( $this->options[ 'taxonomy-' . $term->taxonomy . '-ptparent' ] );
            }
        }
    }

    private function maybe_add_term_parent_crumbs( $term ) {
        if ( is_taxonomy_hierarchical( $term->taxonomy ) && $term->parent != 0 ) {
            foreach ( $this->get_term_parents( $term ) as $parent_term ) {
                $this->add_term_crumb( $parent_term );
            }
        }
    }

    private function add_linked_month_year_crumb() {
        global $wp_locale;

        $this->add_predefined_crumb(
            $wp_locale->get_month( get_query_var( 'monthnum' ) ) . ' ' . get_query_var( 'year' ),
            get_month_link( get_query_var( 'year' ), get_query_var( 'monthnum' ) )
        );
    }

    private function add_month_crumb() {
        $this->add_predefined_crumb(
            $this->options['breadcrumbs-archiveprefix'] . ' ' . esc_html( single_month_title( ' ', false ) ),
            null,
            true
        );
    }

    private function add_year_crumb() {
        $this->add_predefined_crumb(
            $this->options['breadcrumbs-archiveprefix'] . ' ' . esc_html( get_query_var( 'year' ) ),
            null,
            true
        );
    }

    private function add_date_crumb( $date = null ) {
        if ( is_null( $date ) ) {
            $date = get_the_date();
        }
        else {
            $date = mysql2date( get_option( 'date_format' ), $date, true );
            $date = apply_filters( 'get_the_date', $date, '' );
        }

        $this->add_predefined_crumb(
            $this->options['breadcrumbs-archiveprefix'] . ' ' . esc_html( $date ),
            null,
            true
        );
    }


    private function prepare_links() {
        if ( ! is_array( $this->crumbs ) || $this->crumbs === array() ) {
            return;
        }

        foreach ( $this->crumbs as $i => $crumb ) {
            $link_info = $crumb; // Keep pre-set url/text combis

            if ( isset( $crumb['id'] ) ) {
                $link_info = $this->get_link_info_for_id( $crumb['id'] );
            }
            if ( isset( $crumb['term'] ) ) {
                $link_info = $this->get_link_info_for_term( $crumb['term'] );
            }
            if ( isset( $crumb['ptarchive'] ) ) {
                $link_info = $this->get_link_info_for_ptarchive( $crumb['ptarchive'] );
            }

            $this->links[] = $this->crumb_to_link( $link_info, $i );
        }
    }

    private function get_link_info_for_id( $id ) {
        $link = array();

        $link['url']  = get_permalink( $id );
        $link['text'] = '';
        if ( $link['text'] === '' ) {
            $link['text'] = strip_tags( get_the_title( $id ) );
        }

        return $link;
    }

    private function get_link_info_for_term( $term ) {
        $link = array();

        $bctitle = WPSEO_Taxonomy_Meta_Extend::get_term_meta( $term, $term->taxonomy, 'bctitle' );
        if ( ! is_string( $bctitle ) || $bctitle === '' ) {
            $bctitle = $term->name;
        }

        $link['url']  = get_term_link( $term );
        $link['text'] = $bctitle;

        return $link;
    }

    private function get_link_info_for_ptarchive( $pt ) {
        $link          = array();
        $archive_title = '';

        if ( isset( $this->options[ 'bctitle-ptarchive-' . $pt ] ) && $this->options[ 'bctitle-ptarchive-' . $pt ] !== '' ) {

            $archive_title = $this->options[ 'bctitle-ptarchive-' . $pt ];
        }
        else {
            $post_type_obj = get_post_type_object( $pt );
            if ( is_object( $post_type_obj ) ) {
                if ( isset( $post_type_obj->label ) && $post_type_obj->label !== '' ) {
                    $archive_title = $post_type_obj->label;
                }
                elseif ( isset( $post_type_obj->labels->menu_name ) && $post_type_obj->labels->menu_name !== '' ) {
                    $archive_title = $post_type_obj->labels->menu_name;
                }
                else {
                    $archive_title = $post_type_obj->name;
                }
            }
        }

        $link['url']  = get_post_type_archive_link( $pt );
        $link['text'] = $archive_title;

        return $link;
    }

    private function crumb_to_link( $link, $i ) {
        global $paged; // @todo ? -> only works for archives, not for paged articles

        $link_output = '';

        if ( isset( $link['text'] ) && ( is_string( $link['text'] ) && $link['text'] !== '' ) ) {

            $link['text'] = trim( $link['text'] );
            if ( ! isset( $link['allow_html'] ) || $link['allow_html'] !== true ) {
                $link['text'] = esc_html( $link['text'] );
            }

            $inner_elm = 'span';
            if ( $this->options['breadcrumbs-boldlast'] === true && $i === ( $this->crumb_count - 1 ) ) {
                $inner_elm = 'strong';
            }

            $class = '';
            if ( $i === ( $this->crumb_count - 1 ) ) {
                $class = ' class="breadcrumb_last"';
            }


            $link_output = '<' . $this->element . ' typeof="v:Breadcrumb">';

            if ( ( isset( $link['url'] ) && ( is_string( $link['url'] ) && $link['url'] !== '' ) ) &&
                ( $i < ( $this->crumb_count - 1 ) || $paged )
            ) {
                $link_output .= '<a href="' . esc_url( $link['url'] ) . '"' . $class . ' rel="v:url" property="v:title">' . $link['text'] . '</a>';
            }
            else {
                $link_output .= '<' . $inner_elm . $class . ' property="v:title">' . $link['text'] . '</' . $inner_elm . '>';
            }

            $link_output .= '</' . $this->element . '>';

        }

        return $link_output;
    }


    private function links_to_string() {
        if ( is_array( $this->links ) && $this->links !== array() ) {
            // Remove any effectively empty links
            $links = array_map( 'trim', $this->links );
            $links = array_filter( $links );

            $this->output = implode( $this->separator, $links );
        }
    }

    private function wrap_breadcrumb() {
        if ( is_string( $this->output ) && $this->output !== '' ) {
            $output = '
        <' . $this->wrapper . $this->get_output_id() . $this->get_output_class() . ' prefix="v: http://rdf.data-vocabulary.org/#">
            ' . $this->output . '
        </' . $this->wrapper . '>';

            if ( $this->options['breadcrumbs-prefix'] !== '' ) {
                $output = "\t" . $this->options['breadcrumbs-prefix'] . "\n" . $output;
            }

            $this->output = $output;
        }
    }

    private function get_output_id() {
        $id = '';
        if ( is_string( $id ) && '' !== $id ) {
            $id = ' id="' . esc_attr( $id ) . '"';
        }

        return $id;
    }

    private function get_output_class() {
        $class = 'breadcrumb';
        if ( is_string( $class ) && '' !== $class ) {
            $class = ' class="' . esc_attr( $class ) . '"';
        }

        return $class;
    }


}




function tt_theme_breadcrumb( $before = '', $after = '', $display = true ) {
    return WPSEO_Breadcrumbs_Extend::breadcrumb( $before, $after, $display );
}