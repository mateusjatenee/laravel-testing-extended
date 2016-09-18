<?php

namespace Mateusjatenee\LaravelTestingExtended\Traits;

use Illuminate\Contracts\View\View;
use Mockery as m;
use PHPUnit_Framework_Assert as PHPUnit;

trait AssertionsTrait
{

    /**
     * Assert that the response view has a given name.
     *
     * @param  string $name
     * @return $this
     */
    public function assertViewIs(string $name)
    {
        if (!isset($this->response->original) || !$this->response->original instanceof View) {
            return PHPUnit::assertTrue(false, 'The response was not a view.');
        }
        PHPUnit::assertEquals($name, $this->response->original->getName());
        return $this;
    }

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
