<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::factory()->create(['email' => 'admin@example.com']);
        $admin->roles()->attach(Role::where('name', 'Administrator')->value('id'));

        $editor = User::factory()->create(['email' => 'editor@example.com']);
        $editor->roles()->attach(Role::where('name', 'Editor')->value('id'));

        $admin = User::factory()->create(['email' => 'test@example.com']);
        $admin->roles()->attach(Role::where('name', 'Administrator')->value('id'));
    }
}
