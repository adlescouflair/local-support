<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //-- User
        Permission::create(["name"=>"application.admin"]);
        Permission::create(["name"=>"user.create"]);
        Permission::create(["name"=>"user.list"]);
        Permission::create(["name"=>"user.show"]);
        Permission::create(["name"=>"user.update"]);
        Permission::create(["name"=>"user.delete"]);
        Permission::create(["name"=>"user.update.role"]);

        //-- Post
        Permission::create(["name"=>"post.create"]);
        Permission::create(["name"=>"post.update"]);
        Permission::create(["name"=>"post.delete"]);
   

        // -- Tag
        Permission::create(["name"=>"tag.create"]);
        Permission::create(["name"=>"tag.list"]);
        Permission::create(["name"=>"tag.show"]);
        Permission::create(["name"=>"tag.update"]);
        Permission::create(["name"=>"tag.delete"]);


          // -- Org
        
          Permission::create(["name"=>"org.update"]);
          Permission::create(["name"=>"org.delete"]);


        
    }
}
