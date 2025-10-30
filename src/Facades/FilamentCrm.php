<?php

namespace Cloudifyapps\FilamentCrm\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Cloudifyapps\FilamentCrm\FilamentCrm
 */
class FilamentCrm extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Cloudifyapps\FilamentCrm\FilamentCrm::class;
    }
}
