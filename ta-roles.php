<?php
/**
 * Plugin Name: Tiempo Argentino - Roles
 * Plugin URI:
 * Description:
 * Author: Genosha
 * Author URI: www.genosha.com.ar
 * Version: 1.0.0
 * License:
 * License URI:
 *
 *
 */

define('TA_ROLES_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

class TA_Roles_Plugin{
    static private $initialized = false;
    static private $version = "1.0.0";
    static private $roles_folder = TA_ROLES_PLUGIN_PATH . 'inc/roles';
    static private $capabilities = array(
        'portada'                   => array(
            'edit_pages'                                => true,
            'publish_pages'                             => true,
            'edit_others_pages'                         => true,
            'delete_pages'                              => true,
            'delete_others_pages'                       => true,
            'edit_published_pages'                      => true,
            'delete_published_pages'                    => true,
            'delete_private_pages'                      => true,
            'edit_private_pages'                        => true,
            'read_private_pages'                        => true,
        ),
        'micrositio_home'           => array(
            'read_micrositio_home'                      => true,
            'edit_micrositio_home'                      => true,
            'delete_micrositio_home'                    => false,
            'create_micrositios_homes'                  => false,
            'edit_micrositios_homes'                    => true,
            'publish_micrositios_homes'                 => true,
            'edit_others_micrositios_homes'             => true,
            'delete_others_micrositios_homes'           => false,
            'edit_published_micrositios_homes'          => true,
            'delete_published_micrositios_homes'        => false,
            'read_private_micrositios_homes'            => true,
            'edit_private_micrositios_homes'            => true,
            'delete_private_micrositios_homes'          => false,
        ),
        'article_section_edit'      => array(
            'manage_article_sections'                   => true,
            'edit_article_sections'                     => true,
            'delete_article_sections'                   => true,
        ),
        'article_place_edit'        => array(
            'manage_article_places'                   => true,
            'edit_article_places'                     => true,
            'delete_article_places'                   => true,
        ),
        'article_tema_edit'         => array(
            'manage_article_temas'                   => true,
            'edit_article_temas'                     => true,
            'delete_article_temas'                   => true,
        ),
        'article_tag'               => array(
            'manage_article_tags'                       => true,
            'edit_article_tags'                         => true,
            'delete_article_tags'                       => true,
        ),
        'article_author'            => array(
            'manage_article_authors'                       => true,
            'edit_article_authors'                         => true,
            'delete_article_authors'                       => true,
        ),
        'article_micrositio_edit'   => array(
            'edit_micrositios_terms'                    => true,
        ),
        'menus'                     => array(
            'edit_theme_options'                        => true,
        ),
        'articles_edit'             => array(
            'edit_articles'                             => true,
            'delete_articles'                           => true,
            'create_articles'                           => true,
            'edit_others_articles'                      => true,
            'delete_others_articles'                    => true,
            'read_private_articles'                     => true,
            'edit_private_articles'                     => true,
            'delete_private_articles'                   => true,
            'publish_articles'                          => false,
            'edit_published_articles'                   => false,
            'delete_published_articles'                 => false,
        ),
        'articles_publish'          => array(
            'publish_articles'                          => true,
            'edit_published_articles'                   => true,
            'delete_published_articles'                 => true,
        ),
        'media_uploads'             => array(
            'upload_files'                              => true,
             'delete_others_posts'  => true,
             'delete_posts' => true,
             'delete_private_posts' => true,
             'delete_published_posts'   => true,
             'edit_others_posts'    => true,
             'edit_posts'   => true,
             'edit_private_posts'   => true,
             'edit_published_posts' => true,
             'publish_posts'    => true,
             'read_private_posts'   => true,
        ),
        'ads'                       => array(
        ),
        'ed_impresa'                => array(
            'read_ed_impresa'                           => true,
            'edit_ed_impresa'                           => true,
            'delete_ed_impresa'                         => true,
            'create_eds_impresas'                        => true,
            'edit_eds_impresas'                          => true,
            'publish_eds_impresas'                       => true,
            'edit_others_eds_impresas'                   => true,
            'delete_others_eds_impresas'                 => true,
            'edit_published_eds_impresas'                => true,
            'delete_published_eds_impresas'              => true,
            'read_private_eds_impresas'                  => true,
            'edit_private_eds_impresas'                  => true,
            'delete_private_eds_impresas'                => true,
        ),
        'fotogaleria'               => array(
            'read_fotogaleria'                          => true,
            'edit_fotogaleria'                          => true,
            'delete_fotogaleria'                        => true,
            'create_fotogalerias'                       => true,
            'edit_fotogalerias'                         => true,
            'publish_fotogalerias'                      => true,
            'edit_others_fotogalerias'                  => true,
            'delete_others_fotogalerias'                => true,
            'edit_published_fotogalerias'               => true,
            'delete_published_fotogalerias'             => true,
            'read_private_fotogalerias'                 => true,
            'edit_private_fotogalerias'                 => true,
            'delete_private_fotogalerias'               => true,
        ),
        'taller'                    => array(
            'read_taller'                               => true,
            'edit_taller'                               => true,
            'delete_taller'                             => true,
            'create_talleres'                           => true,
            'edit_talleres'                             => true,
            'publish_talleres'                          => true,
            'edit_others_talleres'                      => true,
            'delete_others_talleres'                    => true,
            'edit_published_talleres'                   => true,
            'delete_published_talleres'                 => true,
            'read_private_talleres'                     => true,
            'edit_private_talleres'                     => true,
            'delete_private_talleres'                   => true,
        ),
        'memberships'               => array(
            'read_membership'                               => true,
            'edit_membership'                               => true,
            'delete_membership'                             => true,
            'create_memberships'                           => true,
            'edit_memberships'                             => true,
            'publish_memberships'                          => true,
            'edit_others_memberships'                      => true,
            'delete_others_memberships'                    => true,
            'edit_published_memberships'                   => true,
            'delete_published_memberships'                 => true,
            'read_private_memberships'                     => true,
            'edit_private_memberships'                     => true,
            'delete_private_memberships'                   => true,
        ),
        'mailtrain'                 => array(
            'read_list'                               => true,
            'edit_list'                               => true,
            'delete_list'                             => true,
            'create_lists'                           => true,
            'edit_lists'                             => true,
            'publish_lists'                          => true,
            'edit_others_lists'                      => true,
            'delete_others_lists'                    => true,
            'edit_published_lists'                   => true,
            'delete_published_lists'                 => true,
            'read_private_lists'                     => true,
            'edit_private_lists'                     => true,
            'delete_private_lists'                   => true,
        ),
        'comments'                  => array(
            'moderate_comments'                         => true,    // needs edit_posts
            'edit_comment'                              => true,
        ),
        'odoo'                      => array(
        ),
        'plugins'                   => array(
            'activate_plugins'                          => true,
            'edit_plugins'                              => true,
            'install_plugins'                           => true,
            'update_plugins'                            => true,
            'delete_plugins'                            => true,
            'upload_plugins'                            => true,
        ),
        'users'                     => array(
            'edit_users'                                => true,
            'delete_users'                              => true,
            'create_users'                              => true,
            'list_users'                                => true,
            'remove_users'                              => true,
            'add_users'                                 => true,
            'promote_users'                             => true,
        ),
        'subscriptions'             => array(
            'read_subscription'                               => true,
            'edit_subscription'                               => true,
            'delete_subscription'                             => true,
            'create_subscriptions'                           => true,
            'edit_subscriptions'                             => true,
            'publish_subscriptions'                          => true,
            'edit_others_subscriptions'                      => true,
            'delete_others_subscriptions'                    => true,
            'edit_published_subscriptions'                   => true,
            'delete_published_subscriptions'                 => true,
            'read_private_subscriptions'                     => true,
            'edit_private_subscriptions'                     => true,
            'delete_private_subscriptions'                   => true,
        ),
        'tools'                     => array(
            'import'                                    => true,
            'export'                                    => true,
        ),
        'settings'                  => array(
            'manage_options'                            => true, // AD MANAGER - MAILTRAIN API -
            'switch_themes'                             => true,
            'edit_themes'                               => true,
            'install_themes'                            => true,
            'customize'                                 => true,
            'update_themes'                             => true,
            'update_core'                               => true,
            'delete_themes'                             => true,
            'upload_themes'                             => true,
        ),
        'beneficios'                => array(
            'read_beneficio'                               => true,
            'edit_beneficio'                               => true,
            'delete_beneficio'                             => true,
            'create_beneficios'                           => true,
            'edit_beneficios'                             => true,
            'publish_beneficios'                          => true,
            'edit_others_beneficios'                      => true,
            'delete_others_beneficios'                    => true,
            'edit_published_beneficios'                   => true,
            'delete_published_beneficios'                 => true,
            'read_private_beneficios'                     => true,
            'edit_private_beneficios'                     => true,
            'delete_private_beneficios'                   => true,
            'manage_cat_beneficios'                     => true,
            'edit_cat_beneficios'                       => true,
            'delete_cat_beneficios'                     => true,
            'assign_cat_beneficios'                     => true,
        ),
        'extra'                     => array(
            'read'                                      => true,
        ),
    );

    static public function initialize(){
        if(self::$initialized)
            return false;
        self::$initialized = true;
        require_once TA_ROLES_PLUGIN_PATH . 'inc/functions.php';
        self::set_core_roles_capabilities();
        // self::set_roles();
        // add_action('wp_roles_init', array(self::class, 'set_roles'), 1, 1);
        add_action('pre_comment_approved', array(self::class, 'role_approved_comment_pre_comment_approved'));
        register_activation_hook( __FILE__, array( self::class, 'add_roles' ) );
        register_deactivation_hook( __FILE__, array( self::class, 'remove_roles' ) );
    }

    static public function remove_delete_cap(){
        // function prevent_default_theme_deletion($allcaps, $caps, $args) {
        // 	if( !isset($args[0]) || !isset($args[2]) )
        // 		return $allcaps;
        //
        // 	$post_id = $args[2];
        //     $current_status = get_post_status ( $post_id );
        // 	// var_dump(get_post_type_object('ta_article')->cap);
        // 	// er();
        //
        // 	if( $args[0] == 'delete_post' && in_array( $current_status, array( 'publish', 'future' ), true ) ){
        // 		// $allcaps[ $caps[0] ] = false;
        // 	}
        //
        //     return $allcaps;
        // }
        // add_filter ('user_has_cap', 'prevent_default_theme_deletion', 10, 3);
    }

    static private function do_custom_roles($set = true){
        // if ( get_option( 'ta_roles_version' ) !== self::$version ) {
        $wp_roles = wp_roles();
        foreach (new DirectoryIterator(TA_Roles_Plugin::$roles_folder) as $role_file) {
            if ($role_file->isDot())
                continue;

            $role_args = include_once TA_Roles_Plugin::$roles_folder . "/$role_file";
            if( $role_args && is_array($role_args) && isset($role_args[0]) && isset($role_args[1]) && isset($role_args[2]) ){
                // If the role is already set, it will not add_role (wp-includes/class-wp-roles.php line 157)
                if($set){
                    if(isset($wp_roles->roles[$role_args[0]]))
                        stablish_capabilities($role_args[0], $role_args[2] );
                    else{
                        $wp_roles->add_role( $role_args[0] , $role_args[1] , $role_args[2]);
                    }
                }
                else{
                    remove_role($role_args[0]);
                }
            }
        }
    }

    static public function add_roles(){
        self::do_custom_roles(true);
    }

    static public function remove_roles(){
        self::do_custom_roles(false);
    }

    /**
    *   Returns a set of capabilities from the $capabalities static propery
    *   @param string[] $capabilities_groups                                    Names of the group of capabilities to include. Should be an existing key
    *                                                                           in self::$capabilities.
    *   @param bool[] $overrides                                                Set of capabilities to add to the resulting array. If a key already exists
    *                                                                           from a capability group, it overrides it.
    *   @return bool[]                                                          Array with capabilities values. Keys = capability slug.
    */
    static public function get_capabilities($capabilities_groups = array(), $overrides = array()){
         $capabilities = array();
         if(!$capabilities_groups || !is_array($capabilities_groups) || empty($capabilities_groups)){
             $capabilities_groups = array_keys(self::$capabilities);
         }

         if($capabilities_groups){
             foreach ($capabilities_groups as $group_key) {
                 if( isset(self::$capabilities[$group_key]))
                    $capabilities = array_merge($capabilities, self::$capabilities[$group_key]);
             }
         }

         if($overrides && is_array($overrides)){
             $capabilities = array_merge($capabilities, $overrides);
         }

         return $capabilities;
    }

    /**
    *   When hooked to pre_comment_approved, it approves the comments of users with the
    *   role_approved_comment capability
    *   @param bool $approved                                                   If the comment is already approved.
    *   @return int                                                             1 if it has the required capability, or if it
    *                                                                           was already approved. Otherwise 0
    */
    static public function role_approved_comment_pre_comment_approved($approved){
        return !$approved && current_user_can('role_approved_comment') ? 1 : $approved; // Note: 1/0, not true/false
    }

    /**
    *   Stablishes the capabilities for the core wordpress roles.
    */
    static public function set_core_roles_capabilities(){
        stablish_capabilities('administrator', TA_Roles_Plugin::get_capabilities() );

        stablish_capabilities('editor', TA_Roles_Plugin::get_capabilities(array(
            'portada',
            'micrositio_home',
            'article_section_edit',
            'article_place_edit',
            'article_tema_edit',
            'article_tag',
            'article_author',
            'article_micrositio',
            'article_micrositio_edit',
            'menus',
            'articles_edit',
            'articles_publish',
            'media_uploads',
            'ed_impresa',
            'fotogaleria',
            'taller',
            'memberships',
            'mailtrain',
            'comments',
            'extra',
        )) );
    }

}

TA_Roles_Plugin::initialize();



// $wp_roles = wp_roles();
// var_dump(array_keys($wp_roles->role_objects));


// function author_cap_filter( $allcaps, $cap, $args ) {
//     // Bail out if we're not asking about a post:
//     if ( 'edit_post' != $args[0] )
//         return $allcaps;
//
//     // Load the post data:
//     $post = get_post( $args[2] );
//
//     if( $post->post_type != 'ta_article' )
//         return $allcaps;
//
//     // Bail out if the post isn't pending or published:
//     if ( $post->post_status != 'publish' )
//         return $allcaps;
//
//     // Bail out for users who can already edit others posts:
//     if ( $allcaps['edit_published_articles'] )
//         return $allcaps;
//
//     $allcaps[$cap[0]] = false;
//
//     return $allcaps;
//
// }
// add_filter( 'user_has_cap', 'author_cap_filter', 10, 3 );
//
// add_action('init', function(){
//     $wp_roles = wp_roles();
//     var_dump($wp_roles->get_role('ta_redactor')->capabilities['edit_published_articles']);
//     er();
// });
