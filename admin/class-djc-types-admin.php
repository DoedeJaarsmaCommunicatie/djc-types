<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://doedejaarsma.nl
 * @since      1.0.0
 *
 * @package    Djc_Types
 * @subpackage Djc_Types/admin
 */

use PostTypes\PostType;

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Djc_Types
 * @subpackage Djc_Types/admin
 * @author     Mitch Hijlkema <mitch@doedejaarsma.nl>
 */
class Djc_Types_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}
    
    /**
     * Registers the custom post types
     *
     * @since 1.0.0
     */
	public function register_post_types() {
	    
        $dienst = new PostType(
            [
                'name'      => 'dienst',
                'singular'  => 'Dienst',
                'plural'    => 'Diensten',
                'slug'      => 'diensten'
            ]
        );
        
        $dienst->options([
            'hierarchical'  => true,
            'supports'      => ['title', 'editor', 'page-attributes', 'excerpt']
        ]);
        
        $dienst->register();
        
        $projects = new PostType(
            [
                'name'      => 'project',
                'singular'  => 'Project',
                'plural'    => 'Projecten',
                'slug'      => 'projecten'
            ]
        );
        
        $projects->options([
            'supports'  => ['title', 'editor', 'thumbnail', 'excerpt']
        ]);
        $projects->taxonomy('middel');
        
        $projects->register();
        
        $employees = new PostType('employee');
        $employees->options([
            'supports'  => ['title']
        ]);
        $employees->register();
        
        $method = new \PostTypes\Taxonomy([
            'name' => 'middel',
            'singular' => 'Middel',
            'plural' => 'Middelen',
            'slug' => 'middelen'
        ]);
        
        $method->register();
        
    }
}
