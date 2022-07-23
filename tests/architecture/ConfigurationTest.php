<?php

declare(strict_types=1);

namespace Tests\PHPat\architecture;

use PHPat\Configuration;
use PHPat\Selector\Selector;
use PHPat\Test\PHPat;
use PHPat\Test\Builder\Rule;

class ConfigurationTest
{
    public function test_configuration_does_not_have_dependencies(): Rule
    {
        return PHPat::rule()
            ->classes(Selector::classname(Configuration::class))
            ->shouldNotDependOn()
            ->classes(Selector::all());
    }
}
