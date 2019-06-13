<?php

namespace Helick\BetterExcerpt;

use Helick\BetterExcerpt\Contracts\Bootable;
use WP_Post;

final class MetaBox implements Bootable
{
    /**
     * Boot the service.
     *
     * @return void
     */
    public static function boot(): void
    {
        $self = new static;

        add_action('add_meta_boxes', [$self, 'replace']);
    }

    /**
     * Replace the default post excerpt meta box.
     *
     * @return void
     */
    public function replace(): void
    {
        $postTypes = get_post_types_by_support('excerpt');

        /**
         * Control the supported post types.
         *
         * @param array $postTypes
         */
        $postTypes = apply_filters('helick_better_excerpt_supported_post_types', $postTypes);

        // Remove the default post excerpt meta box
        remove_meta_box('postexcerpt', (array)$postTypes, 'normal');

        // Register the new meta box
        add_meta_box(
            'postexcerpt',
            _x('Excerpt', 'meta box heading', DOMAIN),
            [$this, 'render'],
            (array)$postTypes,
            'normal',
            'high',
            ['__back_compat_meta_box' => false]
        );
    }

    /**
     * Render the new meta box contents.
     *
     * @param WP_Post $post
     *
     * @return void
     */
    public function render(WP_Post $post): void
    {
        $settings = [
            'teeny'         => true,
            'media_buttons' => false,
            'textarea_rows' => 7,
        ];

        /**
         * Control the editor settings.
         *
         * @param array $settings
         */
        $settings = apply_filters('helick_better_excerpt_editor_settings', $settings);

        wp_editor(html_entity_decode($post->post_excerpt), 'excerpt', (array)$settings);
    }
}
