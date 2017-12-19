<?php

namespace Aviator\Runnable\Tests\Fixtures;

class SubFixture extends Fixture
{
    protected static $method = 'subOther';

    public function subOther (string $string)
    {
        return $string . ' ' . $this->string . ' from the subOther method';
    }
}
