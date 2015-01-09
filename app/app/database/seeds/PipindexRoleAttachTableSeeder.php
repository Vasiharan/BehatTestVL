<?php
/**
 * Created by PhpStorm.
 * User: vasilogeswaran
 * Date: 23/12/2014
 * Time: 10:46
 */

class PipindexRoleAttachTableSeeder extends Seeder {

    public function run()
    {
        DB::table('assigned_roles')->delete();

        $user = Pipindex\User\Model\User::where('username','=','vasi')->first();
        $userRole = Pipindex\Role\Model\Role::where('name','=','User')->first();

        $user->attachRole( $userRole );

        $adminUser = Pipindex\User\Model\User::where('username','=','admin')->first();
        $adminRole = Pipindex\Role\Model\Role::where('name','=','Admin')->first();

        $adminUser->attachRole( $adminRole );

    }
}