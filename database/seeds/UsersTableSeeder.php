<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Str as Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
		DB::table('roles')->truncate();
		DB::table('role_users')->truncate();
		DB::table('activations')->truncate();

		$admin_1 = Sentinel::registerAndActivate(array(
		    'slug' 									=> Str::slug('Eduardo Callejas'),
			'first_name' 							=> 'Eduardo',
            'last_name' 							=> 'Callejas',
            'email' 								=> 'lcallejasrdz@gmail.com',
            'password' 								=> 'asdasd',
            'status_id' 							=> 1,
		));

		$adminRole = Sentinel::getRoleRepository()->createModel()->create([
			'slug' => 'administador',
			'name' => 'Administador',
			'permissions' => array('admin' => 1)
		]);

		$admin_1->roles()->attach($adminRole);

		$this->command->info('Admin User created with username lcallejasrdz@gmail.com and password asdasd');
    }
}
