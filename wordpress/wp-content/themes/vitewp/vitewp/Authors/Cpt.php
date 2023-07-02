<?php

namespace Vitewp\Authors;

class Cpt
{
    public function __construct()
    {
        self::registerCustomPostType();
    }

    public function registerCustomPostType(): void
    {
        $labels = [
            'name' => __('Authors'),
            'singular_name' => __('Author'),
            'menu_name' => __('Authors'),
            'menu_admin_bar' => __('Authors'),
            'archives' => __('Authors archive'),
            'attributes' => __('Authors attributes'),
            'parent_item_colon' => __('Parent authors:'),
            'all_items' => __('All authors'),
            'add_new_item' => __('Add new author'),
            'new_item' => __('New author'),
            'edit_item' => __('Edit author'),
            'update_item' => __('Update author'),
            'view_item' => __('View author'),
            'view_items' => __('View authors'),
            'search_items' => __('Search authors'),            
        ];

        $args = [
            'label' => __('Authors'),
            'description' => null,
            'labels' => $labels,
            'menu_icon' => 'dashicons-groups',
            'supports' => ['title', 'thumbnail'],
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'has_archive' => false,
            'capability_type' => 'post',
            'rewrite' => [
                'with_front' => false
            ]
        ];

        register_post_type('authors', $args);
    }
}