<?php
/**
 * Created by PhpStorm.
 * User: vasilogeswaran
 * Date: 23/12/2014
 * Time: 10:46
 */

class PipindexRoleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $admin = new Pipindex\Users\PipindexRole;
        $admin->name = 'Admin';

        if(! $admin->save()) {
            Log::info('Unable to create roles '.$admin->name, (array)$admin->errors());
        } else {
            Log::info('Created roles "'.$admin->name.'"');
        }

        $user = new Pipindex\Users\PipindexRole;
        $user->name = 'User';

        if(! $user->save()) {
            Log::info('Unable to create roles '.$user->name, (array)$user->errors());
        } else {
            Log::info('Created roles "'.$user->name.'"');
        }
    }
}