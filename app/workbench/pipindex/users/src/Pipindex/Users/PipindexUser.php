<?php
/**
 * Created by PhpStorm.
 * User: vasilogeswaran
 * Date: 19/12/2014
 * Time: 15:00
 */

namespace Pipindex\Users;

use Zizaco\Confide\ConfideUser;
use Zizaco\Confide\ConfideUserInterface;


class PipindexUser extends \Eloquent implements ConfideUserInterface {
    use ConfideUser;

    public  function Hello() {
        echo 'Hello!'  . $this->getReminderEmail();
    }
}