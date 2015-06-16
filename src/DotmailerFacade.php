<?php

namespace N2DigitalMedia\LaravelDotmailer;

use Illuminate\Support\Facades\Facade;

class DotmailerFacade extends Facade {
    /**
     * Return facade accessor
     * @return string
     */
    protected static function getFacadeAccessor() { return 'dotmailer'; }
}