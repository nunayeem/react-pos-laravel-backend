<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminData = [
            'name' => 'Nizam Uddin Nayeem',
            'email' => 'nizamuddinnayeem22@gmail.com',
            'password' => Hash::make('password'),
            'mobile' => '01853696782',
            'role_id' => 1
        ];

        User::create($adminData);
    }
}
