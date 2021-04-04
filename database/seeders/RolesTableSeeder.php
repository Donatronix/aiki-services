<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{

    public static function defaultPermissions()
    {
        return [
            'view_users',
            'add_users',
            'edit_users',
            'delete_users',

            'view_roles',
            'add_roles',
            'edit_roles',
            'delete_roles',
        ];
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Permission::get()->count() == 0) {
            // Reset cached roles and permissions
            app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

            // Seed the default permissions
            $permissions = $this->defaultPermissions();

            foreach ($permissions as $perms) {
                Permission::updateOrCreate(['name' => $perms]);
            }

            // create permissions
            Permission::updateOrCreate(['name' => 'add assessment']);
            Permission::updateOrCreate(['name' => 'edit assessment']);
            Permission::updateOrCreate(['name' => 'score assessment']);
            Permission::updateOrCreate(['name' => 'take assessment']);
            Permission::updateOrCreate(['name' => 'view assessment']);
        }


        if (Role::get()->count() == 0) {
            $role = Role::updateOrCreate(['name' => 'super admin']);
            $role->givePermissionTo(Permission::get());

            Role::updateOrCreate(['name' => 'admin']);
            $role->givePermissionTo(Permission::get());

            $role = Role::updateOrCreate(['name' => 'plumber']);
            $role->givePermissionTo([
                'take assessment', 'view assessment',
            ]);

            $role = Role::updateOrCreate(['name' => 'carpenter']);
            $role->givePermissionTo([
                'take assessment', 'view assessment',
            ]);

            Role::updateOrCreate(['name' => 'mechanic']);
            $role->givePermissionTo([
                'take assessment', 'view assessment',
            ]);
        }
    }
}
