<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'                => 1,
                'username'          => 'administrator',
                'name'              => 'Administrator',
                'company'           => 'PT SEMEN GRESIK',
                'email'             => 'administrator@smkp.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('password'),
                'role_id'           => 1,
                'remember_token'    => null,
            ],
            [
                'id'                => 2,
                'username'          => 'auditor',
                'name'              => 'Auditor',
                'company'           => 'PT SEMEN GRESIK',
                'email'             => 'auditor@smkp.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('password'),
                'role_id'           => 2,
                'remember_token'    => null,
            ],
            [
                'id'                => 3,
                'username'          => 'auditee',
                'name'              => 'Auditee',
                'company'           => 'PT SEMEN GRESIK',
                'email'             => 'auditee@smkp.com',
                'email_verified_at' => now(),
                'password'          => bcrypt('password'),
                'role_id'           => 3,
                'remember_token'    => null,
            ],
        ];

        User::insert($users);
    }
}