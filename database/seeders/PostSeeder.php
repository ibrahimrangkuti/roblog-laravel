<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
            'user_id' => 1,
            'title' => 'Bagaimana caranya berenang?',
            'slug' => 'bagaimana-caranya-berenang',
            'body' => 'Gampang kok',
            'likes_count' => 0,
            'created_at' => date('Y-m-d', time()),
            'updated_at' => date('Y-m-d', time()),
            ],
            [
                'user_id' => 1,
                'title' => 'Cara bikin web gampang?',
                'slug' => 'cara-bikin-web-gampang',
                'body' => 'Gampang kok',
                'likes_count' => 100,
                'created_at' => date('Y-m-d', time()),
                'updated_at' => date('Y-m-d', time()),
            ]
        ];

        Post::insert($posts);
    }
}
