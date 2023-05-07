<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
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

        // Admin User with adminRole
        $admin = User::create([ 'first_name' => 'admin' , 'last_name' => 'System' , 'username' => 'admin' ,  'email' =>'admin@ecommerce.test' , 'email_verified_at' => now() , 'mobile' => '93049585989' , 'password' => bcrypt('marwan789') , 'user_image' => 'avatar.svg' , 'status' => 1, 'remember_token' => Str::random(10) ]);
        $admin->attachRole($adminRole);

        // Supervisor User with supervisorRole
        $supervisor = User::create([ 'first_name' => 'Supervisor' , 'last_name' => 'System' , 'username' => 'supervisor', 'email' =>'supervisor@ecommerce.test' , 'email_verified_at' => now() , 'mobile' => '93049585999' , 'password' => bcrypt('marwan789') , 'user_image' => 'avatar.svg' , 'status' => 1, 'remember_token' => Str::random(10) ]);
        $supervisor->attachRole($supervisorRole);

        // Customer User with customerRole
        $customer = User::create([ 'first_name' => 'marwan' , 'last_name' => 'tabib' ,'username' => 'marwan_tabib', 'email' =>'marwan@gmail.com' ,'email_verified_at' => now() , 'mobile' => '99049585999' , 'password' => bcrypt('marwan789') , 'user_image' => 'avatar.svg' , 'status' => 1, 'remember_token' => Str::random(10) ]);
        $customer->attachRole($customerRole);

    }
}
