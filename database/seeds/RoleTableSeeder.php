<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    

    public function run()
    {
       $role_manager = new Role();
       $role_manager->name='manager';
       $role_manager->description ='A Shop manager';
       $role_manager->permissions=>
       $role_manager->save();



       $role_admin = new Role();
       $role_admin->name = 'admin';
       $role_admin->description ='System Admin';
       $role_admin->save();

    }
}
