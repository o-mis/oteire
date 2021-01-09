<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ポストを15個作成する
        factory(Post::class, 15)->create();
        \App\Models\Post::factory(10)->create();
    }
}
