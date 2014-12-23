<?php
/**
 * Created by PhpStorm.
 * User: vasilogeswaran
 * Date: 23/12/2014
 * Time: 09:26
 */

namespace Pipindex\Facades;

use Illuminate\Support\Facades\Facade;

class PipindexRole extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'pipindexrole'; }
}