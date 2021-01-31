<?php

namespace RenderLabs\Piste\Tests;

use Orchestra\Testbench\TestCase;
use RenderLabs\Piste\PisteServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PisteServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
