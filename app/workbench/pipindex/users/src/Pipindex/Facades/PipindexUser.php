<?php
/**
 * Created by PhpStorm.
 * User: vasilogeswaran
 * Date: 19/12/2014
 * Time: 14:45
 */

namespace Pipindex\Facades;

use Illuminate\Support\Facades\Facade;

class PipindexUser extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'pipindexuser'; }
}