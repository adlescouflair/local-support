<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
        "id"=> uniqid("", true),
        "name"=> "Admin",
        "email"=>"admin@localsupport.com",
        "password"=>Hash::make("password"),
        "role_id"=>Role::APPLICATION_ADMIN,
       ]);


       User::create([
        "id"=> uniqid("", true),
        "name"=> "Org Admin",
        "email"=>"orgadmin@localsupport.com",
        "password"=>Hash::make("password"),
        "role_id"=>Role::ORGANIZATION_ADMIN,
       ]);

       User::create([
        "id"=> uniqid("", true),
        "name"=> "Org User",
        "email"=>"orguser@localsupport.com",
        "password"=>Hash::make("password"),
        "role_id"=>Role::ORGANIZATION_USER,
       ]);

       User::factory()->count(1)->create();
    }
}
