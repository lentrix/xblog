<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'lname' => 'Lenteria',
                'fname' => 'Benjie',
                'username' => 'lentrix',
                'password' => bcrypt('password123'),
                'email' => 'benjielenteria@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'dela Cruz',
                'fname' => 'Juan',
                'username' => 'Johnny',
                'password' => bcrypt('password123'),
                'email' => 'johndecruz@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],
            [
                'lname' => 'Zarate',
                'fname' => 'Trisha',
                'username' => 'twish',
                'password' => bcrypt('password123'),
                'email' => 'teacher_twish@yahoo.com',
                'email_verified_at' => Carbon::now()
            ],

        ];

        foreach($users as $user) {
            User::create($user);
        }
    }
}
