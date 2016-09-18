<?php

namespace Mateusjatenee\LaravelTestingExtended\Traits;

use Mockery as m;

trait MockTrait
{
    /**
     * Mocks a given class, swaps it in the container by the mock and returns the mock.
     *
     * @param string $class
     * @return \Mockery\MockInterface
     */
    public function mock($class)
    {
        $mock = m::mock($class);

        $this->app->instance($class, $mock);

        return $mock;
    }
}
