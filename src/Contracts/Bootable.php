<?php

namespace Helick\BetterExcerpt\Contracts;

interface Bootable
{
    /**
     * Boot the service.
     *
     * @return void
     */
    public static function boot(): void;
}
