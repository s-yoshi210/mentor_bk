<?php

use Illuminate\Database\Seeder;

class PostCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'post_id' => 1,
            'user_id' => 1,
            'content' => 'post_id:1,user_id:1 test comment',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('post_comments')->insert($param);

        $param = [
            'post_id' => 2,
            'user_id' => 2,
            'content' => 'post_id:2,user_id:2 test comment',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('post_comments')->insert($param);

        $param = [
            'post_id' => 3,
            'user_id' => 3,
            'content' => 'post_id:3,user_id:3 test comment',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('post_comments')->insert($param);

    }
}
