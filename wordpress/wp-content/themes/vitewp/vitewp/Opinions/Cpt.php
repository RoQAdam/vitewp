<?php

namespace Vitewp\Opinions;

class Cpt
{
    public function __construct()
    {
        self::registerCustomPostType();
    }

    public function registerCustomPostType(): void
    {
        $labels = [
            'name' => __('Opinions'),
            'singular_name' => __('Opinion'),
            'menu_name' => __('Opinions'),
            'menu_admin_bar' => __('Opinions'),
            'archives' => __('Opinions archive'),
            'attributes' => __('Opinions attributes'),
            'parent_item_colon' => __('Parent opinions:'),
            'all_items' => __('All opinions'),
            'add_new_item' => __('Add new opinion'),
            'new_item' => __('New opinion'),
            'edit_item' => __('Edit opinion'),
            'update_item' => __('Update opinion'),
            'view_item' => __('View opinion'),
            'view_items' => __('View opinions'),
            'search_items' => __('Search opinions'),            
        ];

        $args = [
            'label' => __('Opinions'),
            'description' => null,
            'labels' => $labels,
            'menu_icon' => 'dashicons-format-status',
            'supports' => ['title'],
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'has_archive' => false,
            'capability_type' => 'post',
            'rewrite' => [
                'with_front' => false
            ]
        ];

        register_post_type('opinions', $args);
    }
}