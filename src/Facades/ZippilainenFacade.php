<?php

namespace Joonas1234\Zippilainen\Facades;

use \Illuminate\Support\Facades\Facade;

class ZippilainenFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'zippilainen';
    }
}
