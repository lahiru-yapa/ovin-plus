<?php

namespace domain\Facades\subcribe;

use domain\Services\subcribe\subcribeService;
use Illuminate\Support\Facades\Facade;

class subcribeFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return subcribeService::class;
    }
}
