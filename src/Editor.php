<?php

namespace Helick\BetterExcerpt;

use Helick\Contracts\Bootable;

final class Editor implements Bootable
{
    /**
     * Boot the service.
     *
     * @return void
     */
    public static function boot(): void
    {
        $self = new static;

        add_filter('teeny_mce_buttons', [$self, 'buttons'], 10, 2);
    }

    /**
     * Remove unused buttons from the post excerpt editor.
     *
     * @param array  $buttons
     * @param string $editorId
     *
     * @return array
     */
    public function buttons(array $buttons, string $editorId): array
    {
        if ($editorId !== 'excerpt') {
            return $buttons;
        }

        $buttons = array_values(array_diff($buttons, [
            'blockquote',
            'bullist',
            'numlist',
            'alignleft',
            'alignright',
            'aligncenter',
            'fullscreen',
        ]));

        /**
         * Control the editor buttons.
         *
         * @param array $buttons
         */
        $buttons = apply_filters('helick_better_excerpt_editor_buttons', $buttons);

        return (array)$buttons;
    }
}
