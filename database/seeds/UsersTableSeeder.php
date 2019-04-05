<?php

use Illuminate\Database\Seeder;

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
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@extension.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Extension Units',
            'last_name' => 'Staff',
            'email' => 'unit@extension.com',
            'password' => bcrypt('password'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Regular',
            'last_name' => 'User',
            'email' => 'regular@extension.com',
            'password' => bcrypt('password'),
        ]);
    }
}
