<?php

namespace Easy\Admin\Facades;
use Illuminate\Support\Facades\Facade;
class Packagetest extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'admin';
    }
}
