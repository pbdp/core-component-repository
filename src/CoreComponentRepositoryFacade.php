<?php

namespace PBDP\CoreComponentRepository;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PBDP\CoreComponentRepository\Skeleton\SkeletonClass
 */
class CoreComponentRepositoryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'core-component-repository';
    }
}
