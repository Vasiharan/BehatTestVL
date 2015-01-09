<?php
/**
 * Created by PhpStorm.
 * User: vasilogeswaran
 * Date: 23/12/2014
 * Time: 11:08
 */

class PermissionsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('permissions')->delete();

        $permissions = array(
            array( // 1
                'name'         => 'manage_blogs',
                'display_name' => 'manage blogs',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array( // 2
                'name'         => 'manage_posts',
                'display_name' => 'manage posts',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array( // 3
                'name'         => 'manage_comments',
                'display_name' => 'manage comments',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array( // 4
                'name'         => 'manage_users',
                'display_name' => 'manage users',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array( // 5
                'name'         => 'manage_roles',
                'display_name' => 'manage roles',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
            array( // 6
                'name'         => 'post_comment',
                'display_name' => 'post comment',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ),
        );

        DB::table('permissions')->insert( $permissions );

        DB::table('permission_role')->delete();

        $adminId = Pipindex\Role\Model\Role::where('name','=','Admin')->first()->id;
        $userId = Pipindex\Role\Model\Role::where('name','=','User')->first()->id;

        $permission_base = (int)DB::table('permissions')->first()->id - 1;

        $permissions = array(
            array(
                'role_id'       => $adminId,
                'permission_id' => $permission_base + 1
            ),
            array(
                'role_id'       => $adminId,
                'permission_id' => $permission_base + 2
            ),
            array(
                'role_id'       => $adminId,
                'permission_id' => $permission_base + 3
            ),
            array(
                'role_id'       => $adminId,
                'permission_id' => $permission_base + 4
            ),
            array(
                'role_id'       => $adminId,
                'permission_id' => $permission_base + 5
            ),
            array(
                'role_id'       => $adminId,
                'permission_id' => $permission_base + 6
            ),
            array(
                'role_id'       => $userId,
                'permission_id' => $permission_base + 6
            ),
        );

        DB::table('permission_role')->insert( $permissions );
    }

}