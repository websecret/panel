<?php

namespace Websecret\Panel;

use Illuminate\Support\Facades\Facade;

class FormHelperFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return new FormHelperBuilder();
    }
}