<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'id'                => 1,
                'name'              => 'Cutomer 1',
                'email'             => 'customer1@gmail.com',
                'phone_number'      => '081234567890',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password'          => Hash::make('ArenaConnect'),
                'role'              => 'Customer',
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now(),
            ],
            [
                'id'                => 2,
                'name'              => 'Cutomer 2',
                'email'             => 'customer2@gmail.com',
                'phone_number'      => '081234567890',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password'          => Hash::make('ArenaConnect'),
                'role'              => 'Customer',
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now(),
            ],
            [
                'id'                => 3,
                'name'              => 'Admin Lapangan 1',
                'email'             => 'adminlapangan1@gmail.com',
                'phone_number'      => '081234567890',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password'          => Hash::make('ArenaConnect'),
                'role'              => 'Admin Lapangan',
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now(),
            ],
            [
                'id'                => 4,
                'name'              => 'Admin Lapangan 2',
                'email'             => 'adminlapangan2@gmail.com',
                'phone_number'      => '081234567890',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password'          => Hash::make('ArenaConnect'),
                'role'              => 'Admin Lapangan',
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now(),
            ],
            [
                'id'                => 5,
                'name'              => 'Admin Aplikasi 1',
                'email'             => 'adminaplikasi1@gmail.com',
                'phone_number'      => '081234567890',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password'          => Hash::make('ArenaConnect'),
                'role'              => 'Admin Aplikasi',
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now(),
            ],
            [
                'id'                => 6,
                'name'              => 'Admin Aplikasi 2',
                'email'             => 'adminaplikasi2@gmail.com',
                'phone_number'      => '081234567890',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password'          => Hash::make('ArenaConnect'),
                'role'              => 'Admin Aplikasi',
                'created_at'        => \Carbon\Carbon::now(),
                'updated_at'        => \Carbon\Carbon::now(),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
