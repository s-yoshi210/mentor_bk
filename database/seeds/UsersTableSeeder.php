<?php

use Illuminate\Database\Seeder;
// クエリビルダなどを提供するファサード
use Illuminate\Support\Facades\DB;

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
            'user_name' => str_random(10),
            'mail' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'admin_flag' => 0,
        ]);
    }
}
