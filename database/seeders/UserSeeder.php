<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$HKO7epAEUUzzg2urUsT0W.ygl.a4Tf6sxni5doN31uJraA.NBlIGK',
                'is_admin'       => true,
                'remember_token' => null,
            ],
        ];
        User::insert($users);
    }
}
