<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class UsersDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $avatar = file_get_contents(storage_path('app/public/noimage/blobnoimage.txt'));

        DB::table('users_details')->insert([
            'user_id' => '1',
            'role' => 'admin',
            'avatar' => $avatar,
            'avatar_extension' => 'jpg',
        ]);

        DB::table('users_details')->insert([
            'user_id' => '2',
            'role' => 'unit',
            'avatar' => $avatar,
            'avatar_extension' => 'jpg',
        ]);

        DB::table('users_details')->insert([
            'user_id' => '3',
            'role' => 'regular',
            'avatar' => $avatar,
            'avatar_extension' => 'jpg',
        ]);
    }
}
