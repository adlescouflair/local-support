<?php

namespace Database\Seeders;

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
       Role::create(["name"=>"Application admin"]);
       Role::create(["name"=>"Organization admin"]);
       Role::create(["name"=>"Organization user"]);
       Role::create(["name"=>"User"]);
    }
}
