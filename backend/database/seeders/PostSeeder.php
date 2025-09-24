<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         Post::insert([
            [
                'title' => 'Premier post',
                'content' => 'Contenu du premier post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Deuxième post',
                'content' => 'Contenu du deuxième post',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Troisième post',
                'content' => 'Contenu du troisième post',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
