<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Seed default roles
        $roles = [
            ['name' => 'Super Admin', 'description' => 'Full system access'],
            ['name' => 'Employee', 'description' => 'Company staff'],
            ['name' => 'Client', 'description' => 'External client'],
        ];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role['name']], $role);
        }

        // Create Super Admin user and assign role
        $superAdminRole = Role::where('name', 'Super Admin')->first();
        $superAdmin = User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superdk@arkraft.co.ke',
            'password' => bcrypt('canivore99'),
            'role_id' => $superAdminRole->id,
        ]);
    }
}
