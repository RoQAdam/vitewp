<?php

namespace Vitewp\Theme;

use Kucrut\Vite;

class Setup
{
    public function __construct()
    {
        $this->basicSetup();
        add_action('wp_enqueue_scripts', [$this, 'loadScripts']);
        add_filter('nav_menu_link_attributes', [$this, 'addClassesMenuLink'], 10, 3);
    }

    public function basicSetup(): void
    {
        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => esc_html__( 'Secondary menu', 'twentytwentyone' ),
			)
		);

        add_theme_support(
            'html5',
            array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
                'navigation-widgets',
            )
        );
    
        /*
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        $logo_width  = 300;
        $logo_height = 100;
    
        add_theme_support(
            'custom-logo',
            array(
                'height'               => $logo_height,
                'width'                => $logo_width,
                'flex-width'           => true,
                'flex-height'          => true,
                'unlink-homepage-logo' => true,
            )
        );
    }

    public function loadScripts(): void
    {
        Vite\enqueue_asset(
            trailingslashit(get_template_directory()) . '/dist',
            'src/main.js',
            [
                'handle' => 'my-script-handle',
                'dependencies' => ['wp-components'],
                'css-dependencies' => ['wp-components']
            ],
        );        
    }

    public function addClassesMenuLink($atts, $item, $args): array
    {
        if ($args->menu->slug == 'primary') {
            $atts['class'] = 'text-white hover:text-secondary transition';
        }

        return $atts;
    }
}