<?php
/**
 * Created by PhpStorm.
 * User: vasilogeswaran
 * Date: 23/12/2014
 * Time: 10:45
 */

class PipindexUserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pipindex_users')->delete();

        $users = array(
            array(
                'username'      => 'vasi',
                'email'      => 'vasi@site.dev',
                'password'   => Hash::make('1234'),
                'confirmed'   => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
            array(
                'username'      => 'admin',
                'email'      => 'admin@site.dev',
                'password'   => Hash::make('1234'),
                'confirmed'   => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            )
        );

        DB::table('pipindex_users')->insert( $users );

    }

}