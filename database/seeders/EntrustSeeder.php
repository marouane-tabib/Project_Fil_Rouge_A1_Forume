<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntrustSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // User Roles
        $adminRole = Role::create(['name' => 'admin' , 'display_name' => 'Administration' , 'description' => 'Administrator' , 'allowed_route' => 'admin']);
        $supervisorRole = Role::create(['name' => 'supervisor' , 'display_name' => 'Supervisor' , 'description' => 'Supervisor' , 'allowed_route' => 'admin']);
        $customerRole = Role::create(['name' => 'customer' , 'display_name' => 'Customer' , 'description' => 'Customer' , 'allowed_route' => null]);
    }
}
