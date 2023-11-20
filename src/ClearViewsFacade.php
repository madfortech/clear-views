<?php

namespace Madfortech\ClearViews;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Madfortech\ClearViews\Skeleton\SkeletonClass
 */
class ClearViewsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'clear-views';
    }
}
