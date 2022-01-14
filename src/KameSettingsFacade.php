<?php

namespace Kamekun\KameSettings;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kamekun\KameSettings\Skeleton\SkeletonClass
 */
class KameSettingsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'kame-settings';
    }
}