<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    public function run(): void
    {
        Program::truncate();

        Program::create([
            'name' => 'Program A',
            'description' => 'Contoh program',
            'image' => null,
        ]);

        Program::create([
            'name' => 'Tokutei Ginou (Skill Spesifik)',
            'description' => 'Program kerja skill spesifik resmi pemerintah Jepang.',
            'image' => 'assets/img/program-skill.jpg',
        ]);

        Program::create([
            'name' => 'Internship / Magang Jepang',
            'description' => 'Program magang resmi ke Jepang dengan sertifikasi.',
            'image' => 'assets/img/program-magang.jpg',
        ]);

        Program::create([
            'name' => 'Kursus Bahasa Jepang',
            'description' => 'Kursus bahasa Jepang JLPT N5 – N1 (online & offline).',
            'image' => 'assets/img/program-kursus.jpg',
        ]);
    }
}
