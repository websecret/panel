<?php

namespace Websecret\Panel;

use Illuminate\Support\Facades\Facade;

class HtmlFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'form-helper';
    }
}