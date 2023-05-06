<?php

namespace Towoju5\WojuPay;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Towoju5\WojuPay\Skeleton\SkeletonClass
 */
class WojuPayFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'wojupay';
    }
}
