<?php

namespace Ninjami\Zippilainen\Facades;

use \Illuminate\Support\Facades\Facade;

class ZippilainenFacade extends Facade {

    protected static function getFacadeAccessor() {
        return 'zippilainen';
    }
}
