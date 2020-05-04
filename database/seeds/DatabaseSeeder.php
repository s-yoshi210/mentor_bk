<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PostTableSeeder::class);
        $this->call(SelfCountTableSeeder::class);
        $this->call(PostCommentTableSeeder::class);
        $this->call(LikesTableSeeder::class);
        $this->call(TakesTableSeeder::class);
    }
}
