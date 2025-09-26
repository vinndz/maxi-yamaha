<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         User::updateOrCreate(
            ['username' => 'admin'], // cek kalau sudah ada
            [
                'name' => 'Super Admin',
                'password' => Hash::make('admin'), // ganti password sesuai kebutuhan
                'role' => 'admin',
            ]
        );
    }
}
