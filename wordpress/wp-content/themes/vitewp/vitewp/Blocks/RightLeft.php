<?php

namespace Vitewp\Blocks;

use Kucrut\Vite;

class RightLeft
{
    const BLOCK_SLUG = 'right-left';

    public function __construct()
    {
        $this->register();
    }

    public function register(): void
    {
        acf_register_block_type([
            'name' => self::BLOCK_SLUG,
            'title' => __('Right-Left'),
            'description' => __('Basic block with image and text'),
            'category' => 'vitewp',
            'icon' => 'id-alt',
            'render_template' => get_template_directory() . '/src/blocks/' . self::BLOCK_SLUG . '/template.php',
            'enqueue_assets' => [$this, 'loadScripts']
        ]);
    }

    public function loadScripts(): void
    {
        Vite\enqueue_asset(
            trailingslashit(get_template_directory()) . '/dist',
            'src/blocks/right-left/script.js',
            [
                'handle' => 'right-left-script-handle',
                'dependencies' => ['wp-components'],
                'css-dependencies' => ['wp-components']
            ],
        );
    }
}