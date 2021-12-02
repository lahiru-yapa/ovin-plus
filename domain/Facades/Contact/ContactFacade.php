<?php

namespace domain\Facades\Contact;

use domain\Services\Contact\ContactService;
use Illuminate\Support\Facades\Facade;

class ContactFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return ContactService::class;
    }
}
