<?php

namespace Vitewp;

use Vitewp\Blocks\RightLeft;
use Vitewp\Blocks\Testimonials;

class Blocks
{
    public function __construct()
    {
        new RightLeft();
        new Testimonials();

        add_filter('block_categories_all', [$this, 'registerBlockCategory']);
    }

    public function registerBlockCategory($categories): array
    {
        $categories[] = [
            'slug' => 'vitewp',
            'title' => 'ViteWP'
        ];

        return $categories;
    }
}