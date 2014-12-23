<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PipindexRoleTableSeeder');

		$this->command->info('roles table seeded!');

		$this->call('PipindexUserTableSeeder');

		$this->command->info('pipindex_users table seeded!');

		$this->call('PipindexRoleAttachTableSeeder');

		$this->command->info('assigned_roles table seeded!');

		$this->call('PermissionsTableSeeder');

		$this->command->info('permissions table seeded!');
	}

}

