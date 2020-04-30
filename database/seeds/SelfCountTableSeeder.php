<?php

use Illuminate\Database\Seeder;

class SelfCountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'give_count' => 5,
            'take_count' => 11,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        DB::table('self_counts')->insert($param);
    }
}
