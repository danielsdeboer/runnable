<?php

namespace Aviator\Runnable\Tests\Fixtures;

use Aviator\Runnable\Interfaces\Runnable;
use Aviator\Runnable\Traits\RunnableTrait;

class AbstractFixture implements Runnable
{
    use RunnableTrait;
}
