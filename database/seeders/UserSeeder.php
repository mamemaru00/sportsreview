<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
                'name' => 'test1',
                'email' => 'test@1test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/01/01 11:11:11',
            ],
            [
                'name' => 'test2',
                'email' => 'test@t2est.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/01/01 11:11:11',
            ],
            [
                'name' => 'test3',
                'email' => 'test@3test.com',
                'password' => Hash::make('password123'),
                'created_at' => '2022/01/01 11:11:11',
            ],    
         ]);
    }
}
