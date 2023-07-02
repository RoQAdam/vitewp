<?php

namespace Vitewp\Blocks;

use Kucrut\Vite;

class Testimonials
{
    const BLOCK_SLUG = 'testimonials';

    public function __construct()
    {
        $this->register();
    }

    public function register(): void
    {
        acf_register_block_type([
            'name' => self::BLOCK_SLUG,
            'title' => __('Testimonials'),
            'description' => __('Testimonials block'),
            'category' => 'vitewp',
            'icon' => 'testimonial',
            'render_template' => get_template_directory() . '/src/blocks/' . self::BLOCK_SLUG . '/template.php',
            'enqueue_assets' => [$this, 'loadScripts']
        ]);
    }

    public function loadScripts(): void
    {
        Vite\enqueue_asset(
            trailingslashit(get_template_directory()) . '/dist',
            'src/blocks/testimonials/script.js',
            [
                'handle' => 'testimonials-script-handle',
                'dependencies' => ['wp-components'],
                'css-dependencies' => ['wp-components']
            ],
        );
    }
}