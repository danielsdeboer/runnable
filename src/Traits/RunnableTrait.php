<?php

namespace Aviator\Runnable\Traits;

use Aviator\Makeable\Traits\MakeableTrait;

trait RunnableTrait
{
    use MakeableTrait;

    protected static $method = 'get';

    /**
     * Static constructor.
     * @param array ...$classArgs
     * @return \Closure
     */
    public static function run (...$classArgs)
    {
        return function (...$methodArgs) use ($classArgs) {
            return static::make(...$classArgs)->{static::$method}(...$methodArgs);
        };
    }
}
