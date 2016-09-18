Laravel Testing Extended
================
[![Build Status](https://travis-ci.org/mateusjatenee/laravel-testing-extended.svg?branch=master)](https://travis-ci.org/mateusjatenee/laravel-testing-extended)

Some helpers I found useful when testing.

#### Installation via Composer
``` bash
$ composer require mateusjatenee/laravel-testing-extended
```   

#### Usage   
Just install it and then import and use the traits you want in your `TestCase.php` file. Example:   

```php

<?php

use Mateusjatenee\LaravelTestingExtended\Traits\AssertionsTrait;
use Mateusjatenee\LaravelTestingExtended\Traits\MockTrait;

abstract class TestCase extends Illuminate\Foundation\Testing\TestCase
{

    use AssertionsTrait;
    use MockTrait;

    /**
     * The base URL to use while testing the application.
     *
     * @var string
     */
    protected $baseUrl = 'http://localhost';

    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__ . '/../bootstrap/app.php';

        $app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

        return $app;
    }
}


```

#### License
This library is licensed under the MIT license. Please see [LICENSE](LICENSE.md) for more details.

#### Changelog
Please see [CHANGELOG](CHANGELOG.md) for more details.

#### Contributing
Please see [CONTRIBUTING](CONTRIBUTING.md) for more details.
