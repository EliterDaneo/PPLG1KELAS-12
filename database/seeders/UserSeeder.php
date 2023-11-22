<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Abi',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 'admin'
            ],
            [
                'name' => 'Umi',
                'email' => 'umi@gmail.com',
                'password' => bcrypt('123456'),
                'level' => 'siswa'
            ]
        ];

        foreach ($data as $key => $value) {
            User::create($value);
        }
    }
}