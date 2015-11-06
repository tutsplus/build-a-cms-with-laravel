<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->truncate();

        DB::table('posts')->insert([
            [
                'author_id' => 1,
                'title' => 'Example Post 1',
                'slug' => 'example-post-1',
                'body' => 'This is an example post.',
                'published_at' => date('Y-m-d H:i:s', strtotime('now'))
            ],
            [
                'author_id' => 2,
                'title' => 'Example Post 2',
                'slug' => 'example-post-2',
                'body' => 'This is an example post.',
                'published_at' => date('Y-m-d H:i:s', strtotime('+2 weeks'))
            ],
            [
                'author_id' => 1,
                'title' => 'Example Post 3',
                'slug' => 'example-post-3',
                'body' => 'This is an example post.',
                'published_at' => null
            ],
        ]);
    }
}
