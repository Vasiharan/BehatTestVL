<?php
/**
 * Created by PhpStorm.
 * User: vasilogeswaran
 * Date: 18/12/2014
 * Time: 18:33
 */

namespace Pipindex\Users;

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;

class User extends Eloquent implements ConfideUserInterface {
    use ConfideUser;

    public function Hello() {
        echo 'Hello!';
    }
}