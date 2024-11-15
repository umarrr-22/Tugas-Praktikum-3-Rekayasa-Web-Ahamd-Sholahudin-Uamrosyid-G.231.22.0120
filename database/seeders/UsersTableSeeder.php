<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Pastikan kolom 'name', 'email', dan 'password' ada di tabel users
        User::create([
            'name' => 'admin', // Nama user
            'email' => 'admin@gmail.com', // Email user
            'password' => Hash::make('admin') // Password terenkripsi
        ]);
        
        // Anda bisa menambahkan lebih banyak user jika diperlukan
        // User::create([
        //     'name' => 'user2',
        //     'email' => 'user2@example.com',
        //     'password' => Hash::make('password2')
        // ]);
    }
}
