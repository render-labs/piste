<?php

namespace RenderLabs\Piste;

class Piste
{
    // Build your next great package.
    public $model;

    public $result;

    public function __construct()
    {
    }

    public function on(string $modelName)
    {
        $this->model = 'App\Models\\' . $modelName;

        return $this;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function lastWeek()
    {
        $this->result = $this->model::where('created', '>=', now()->subDays(7)->startOfDay())->count();

        return $this->result;
    }
}
