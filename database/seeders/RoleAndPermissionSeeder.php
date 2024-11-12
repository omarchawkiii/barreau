<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'SuperAdmin']);
        $role_admin = Role::create(['name' => 'Admin']);
        $role_lawyer = Role::create(['name' => 'Lawyer']);

        // Créer les permissions
        $permission1 = Permission::create(['name' => 'Manage News']);
        $permission2 = Permission::create(['name' => 'Manage CatNews']);
        $permission3 = Permission::create(['name' => 'Manage Events']);
        $permission4 = Permission::create(['name' => 'Manage CatEvents']);

        // Associer les permissions au rôle SuperAdmin
        $role->givePermissionTo($permission1);
        $role->givePermissionTo($permission2);
        $role->givePermissionTo($permission3);
        $role->givePermissionTo($permission4);
    }
}
