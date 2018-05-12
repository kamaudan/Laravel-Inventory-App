<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$role_manager = Role::where('name','manager')->first();
    	$role_admin =Role::where('name','admin')->first();

    	$manager = new User();
    	$manager->name = 'Manager Name';
    	$manager->email = 'manager@teflon.mobi.ke';
    	$manager->password = bcrypt(‘secret’);
    	$manager->save();
    	$manager->roles()->attach($role_manager);

    	$admin = new User();
    	$admin->name = 'Admin Name';
    	$admin->email = 'admin@teflon.mobi.ke';
    	$admin->password = bcrypt(‘secret’);
    	$admin>save();
    	$admin->roles()->attach($role_admin);

        
    }
}
