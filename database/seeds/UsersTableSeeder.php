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
        $param = [
            'user_name' => 'Masato Takahashi',
            'email' => 'Masato@gmail.com',
            'password' => bcrypt('secret'),
            'admin_flag' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('users')->insert($param);

        $param = [
            'user_name' => 'Youhei Kotani',
            'email' => 'Youhei@gmail.com',
            'password' => bcrypt('secret'),
            'admin_flag' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('users')->insert($param);

        $param = [
            'user_name' => 'Yoshitaka Shimazu',
            'email' => 'y.shimazu210@gmail.com',
            'password' => bcrypt('secret'),
            'admin_flag' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('users')->insert($param);
    }
}
