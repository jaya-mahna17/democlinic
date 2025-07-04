<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Admin User
        User::create([
            'Address' => 'Mohali',
            'role_id' => 1,
            'ContactNumber' => '1234567890',
            'UserName' => 'admin',
            'password' => Hash::make('admin123'), 
            'DateofJoin' => '2020-12-03',
            'DocName' => 'Admin',
            'DocRegNo' => null,
            'Qualification' => 'B.Tech',
            'email' => 'admin@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Doctor 1
        User::create([
            'Address' => 'Paprola',
            'role_id' => 2,
            'ContactNumber' => '9876543210',
            'UserName' => 'pk',
            'password' => Hash::make('pk123'),
            'DateofJoin' => '2021-01-01',
            'DocName' => 'Parkshit Bali',
            'DocRegNo' => '2738-1',
            'Qualification' => 'BAMS',
            'email' => 'pk@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Doctor 2
        User::create([
            'Address' => 'Paprola',
            'role_id' => 2,
            'ContactNumber' => '7894561230',
            'UserName' => 'sb',
            'password' => Hash::make('sb123'),
            'DateofJoin' => '2020-12-01',
            'DocName' => 'Sonia Bali',
            'DocRegNo' => '2820-1',
            'Qualification' => 'BAMS',
            'email' => 'sb@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Doctor 3
        User::create([
            'Address' => 'Paprola',
            'role_id' => 2,
            'ContactNumber' => '7412589630',
            'UserName' => 'rb',
            'password' => Hash::make('rb123'),
            'DateofJoin' => '2021-01-01',
            'DocName' => 'Rakesh Bali',
            'DocRegNo' => '1337-1',
            'Qualification' => 'GAMS',
            'email' => 'rb@gmail.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);  
    }
}
