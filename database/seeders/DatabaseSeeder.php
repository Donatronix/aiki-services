<?php

namespace Database\Seeders;

use Database\Seeders\AdminTableSeeder;
use Database\Seeders\RolesTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AdminTableSeeder::class,
            RolesTableSeeder::class,
        ]);
    }
}
