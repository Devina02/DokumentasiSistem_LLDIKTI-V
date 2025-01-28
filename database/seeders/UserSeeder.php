<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat akun superadmin
        User::create([
            'id_user' => (string) \Str::uuid(),
            'username' => 'sarahana',
            'password' => bcrypt('sarah123'),
            'role' => 'superadmin',
            'last_active' => now(),
        ]);

        // Membuat akun admin
        User::create([
            'id_user' => (string) \Str::uuid(),
            'username' => 'admin',
            'password' => bcrypt('passwordadmin135'),
            'role' => 'admin',
            'last_active' => now(),
        ]);

         // Membuat akun admin
         User::create([
            'id_user' => (string) \Str::uuid(),
            'username' => 'admin1',
            'password' => bcrypt('123'),
            'role' => 'admin',
            'last_active' => now(),
        ]);
    }
}
