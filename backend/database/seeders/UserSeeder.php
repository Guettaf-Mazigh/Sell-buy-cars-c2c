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
        $user = [
            'name' => 'user1','gender' => 'male',
            'wilaya'=>10,
            'phoneNumber'=>'0777852845',
            'email'=>'user1@gmail.com',
            'password'=>Hash::make('user1123')
        ];
        User::create($user);
    }
}
