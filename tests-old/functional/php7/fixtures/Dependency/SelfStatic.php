<?php

namespace Tests\PHPat\unit\php7\fixtures\Dependency;

use Tests\PHPat\unit\php7\fixtures\SimpleClass;

class SelfStatic
{
    public function doSomething(): self
    {
        return $this;
    }

    public function shouldNotBeCatched(): self
    {
        $a = new SimpleClass();

        return static::doSomething();
    }
}