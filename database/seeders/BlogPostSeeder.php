<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        BlogPost::create([
            'title' => 'Contoh Artikel Pertama',
            'slug' => 'contoh-artikel-pertama',
            'excerpt' => 'Ini adalah excerpt contoh artikel.',
            'content' => 'Ini adalah isi artikel contoh untuk testing.',
        ]);
    }
}
