<?php

namespace Database\Seeders;

use App\Models\SuccessStory;
use Illuminate\Database\Seeder;

class SuccessStorySeeder extends Seeder
{
    public function run(): void
    {
        SuccessStory::create([
            'name' => 'Budi Santoso',
            'title' => 'Alumni Sukses',
            'story' => 'Budi berhasil bekerja di perusahaan Jepang setelah mengikuti program.',
        ]);
    }
}
