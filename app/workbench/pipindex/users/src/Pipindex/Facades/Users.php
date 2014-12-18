<?php
/**
 * Created by PhpStorm.
 * User: vasilogeswaran
 * Date: 17/12/2014
 * Time: 11:56
 */

namespace Pipindex\Facades;

use Illuminate\Support\Facades\Facade;

class Users extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'users'; }

}