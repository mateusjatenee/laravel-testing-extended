<?php

namespace Mateusjatenee\LaravelTestingExtended\Traits;

use Illuminate\Contracts\View\View;
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

}
