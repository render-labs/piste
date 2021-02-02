<?php

namespace RenderLabs\Piste\Tests;

use Orchestra\Testbench\TestCase;
use RenderLabs\Piste\Piste;
use RenderLabs\Piste\PisteFacade;
use RenderLabs\Piste\PisteServiceProvider;

class PisteTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [PisteServiceProvider::class];
    }

    /** @test */
    public function test_setting_model_name()
    {
        $model = PisteFacade::on('Posts');

        $this->assertSame('App\Models\Posts', $model->model);
    }

    /** @test */
    public function test_getting_model_name()
    {
        $model = PisteFacade::on('Comments');

        $this->assertSame('App\Models\Comments', PisteFacade::getModel());
    }
}
