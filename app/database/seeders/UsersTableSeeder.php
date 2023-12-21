<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'username' => 'yassir fri',
            'email' => 'yassirfri318@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
