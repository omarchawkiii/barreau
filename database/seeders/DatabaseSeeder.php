<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CatEvent;
use App\Models\CatNews;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->superAdmin()->create();

        // Création de Lawyer
        \App\Models\User::factory()->lawyer()->create();


        CatEvent::factory()->count(20)->create();
        CatNews::factory()->count(20)->create();

        $this->call([
            RoleAndPermissionSeeder::class,
        ]);
        $superAdminRole = Role::firstOrCreate(['name' => 'SuperAdmin']);
        $user = User::firstOrCreate(['email' => 'superadmin@example.com']);
        $user->assignRole($superAdminRole);

        $lawyerRole = Role::firstOrCreate(['name' => 'Lawyer']);
        $user2 = User::firstOrCreate(['email' => 'lawyer@example.com']);
        $user2->assignRole($lawyerRole);
        // Création de SuperAdmin


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
