<?php

namespace domain\Facades\Faq;

use domain\Services\Faq\FaqService;
use Illuminate\Support\Facades\Facade;

class FaqFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return FaqService::class;
    }
}
