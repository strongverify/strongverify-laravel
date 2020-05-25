<?php 

namespace StrongVerify\SDK;

use Illuminate\Support\Facades\Facade;

class StrongVerifyFacade extends Facade {

    /**
     * Return facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'StrongVerify'; }

}