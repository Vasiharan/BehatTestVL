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

        $user = Pipindex\Users\PipindexUser::where('username','=','vasi')->first();
        $userRole = Pipindex\Users\PipindexRole::where('name','=','User')->first();

        $user->attachRole( $userRole );

        $adminUser = Pipindex\Users\PipindexUser::where('username','=','admin')->first();
        $adminRole = Pipindex\Users\PipindexRole::where('name','=','Admin')->first();

        $adminUser->attachRole( $adminRole );

    }
}