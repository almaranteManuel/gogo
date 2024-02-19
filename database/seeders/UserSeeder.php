<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@test.com',
            'password' => Hash::make('asdasd')
        ]);
        $admin->assignRole('admin');

        $editor = User::create([
            'name' => 'editor',
            'email' => 'editor@test.com',
            'password' => Hash::make('asdasd')
        ]);
        $editor->assignRole('editor');

        $client = User::create([
            'name' => 'client',
            'email' => 'client@test.com',
            'password' => Hash::make('asdasd')
        ]);
        $client->assignRole('client');
    }
}
