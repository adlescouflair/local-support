<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $admin = Role::create(["name"=>"Application admin"]);
       $admin->permissions()->attach(Permission::pluck('id'));

       $orgAdmin = Role::create(["name"=>"Organization admin"]);
       $orgAdmin->permissions()->attach(Permission::where('name', '!=', 'application.admin')->pluck('id'));

       $orgUser = Role::create(["name"=>"Organization user"]);
       $orgUser->permissions()->attach(
        Permission::whereNotIn('name',[
            "application.admin",
            "user.create",
            "user.list",
            "user.delete",
            "user.update.role",
            "org.update",
            "org.delete"
        ])->pluck('id')
    
    );

       Role::create(["name"=>"User"]);


    }
}
