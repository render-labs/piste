<?php

namespace RenderLabs\Piste;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RenderLabs\Piste\Skeleton\SkeletonClass
 */
class PisteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'piste';
    }
}
