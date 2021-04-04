<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@aikiservices.com',
            'password' => Hash::make('aikiservices819'),
        ]);

        //Assigning role to user
        $role = Role::whereName('admin')->first();
        $user->assignRole($role);
    }
}
