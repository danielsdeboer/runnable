<?php

namespace Aviator\Runnable\Tests\Fixtures;

class Fixture extends AbstractFixture
{
    public $string;

    protected static $method = 'get';

    public function __construct (string $string, $method = null)
    {
        $this->string = $string;

        if ($method) {
            static::$method = $method;
        }
    }

    public function get (string $string) : string
    {
        return $string . ' ' . $this->string . ' from the get method';
    }

    public function other (string $string) : string
    {
        return $string . ' ' . $this->string . ' from the other method';
    }
}
