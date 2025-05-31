<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // pastikan ini sesuai dengan namespace model User kamu
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['name' => 'navitaladmin'], // pastikan kolom username ada di tabel users
            [
                'name' => 'Admin Navital',
                'email' => 'navital@admin', // boleh diganti atau disesuaikan
                'password' => Hash::make('adminnavital'),
                'roles' => 'ADMIN',
            ]
        );
    }
}
