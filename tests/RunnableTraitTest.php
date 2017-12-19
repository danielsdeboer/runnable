<?php

namespace Aviator\Runnable\Tests;

use Aviator\Runnable\Tests\Fixtures\Fixture;
use Aviator\Runnable\Tests\Fixtures\SubFixture;
use PHPUnit\Framework\TestCase;

class RunnableTraitTest extends TestCase
{
    /** @test */
    public function it_returns_a_closure ()
    {
        $instance = Fixture::run('test');

        $this->assertInstanceOf(\Closure::class, $instance);
    }

    /** @test */
    public function the_closure_constructs_the_class_and_calls_the_method ()
    {
        $result = Fixture::run('string')('test');

        $expected = 'test string from the get method';

        $this->assertSame($expected, $result);
    }
    
    /** @test */
    public function the_default_method_can_be_changed ()
    {
        $result = Fixture::run('string', 'other')('test');

        $expected = 'test string from the other method';

        $this->assertSame($expected, $result);
    }

    /** @test */
    public function the_default_method_can_be_overridden_on_inheritors ()
    {
        $result = SubFixture::run('string')('test');

        $expected = 'test string from the subOther method';

        $this->assertSame($expected, $result);
    }
}
