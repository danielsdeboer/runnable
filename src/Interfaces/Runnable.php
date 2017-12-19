<?php

namespace Aviator\Runnable\Interfaces;

use Aviator\Makeable\Interfaces\Makeable;

interface Runnable extends Makeable
{
    /**
     * Static constructor and handler.
     * @param array ...$args
     * @return mixed
     */
    public static function run (...$args);
}
