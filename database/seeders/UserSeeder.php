<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sanjay Rout',
            'email' => 'sanjay@gmail.com',
            'password' => Hash::make('sanjay'),
            'email_verified_at' => now(),
        ]);
    }
}
