<?php
/**
 * Created by PhpStorm.
 * User: vasilogeswaran
 * Date: 18/12/2014
 * Time: 11:32
 */

Route::get('/users', function() {
    return Users::SaySomething('From users routes.php');
});

Route::get('/users/test', function() {
    return Users::SaySomething('From users test routes.php');
});