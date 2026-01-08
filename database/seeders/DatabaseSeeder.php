<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    $this->call([
        ProgramSeeder::class,
        TrainingSeeder::class,
        BlogPostSeeder::class,
        SuccessStorySeeder::class,
    ]);

    // Create admin user if not exists
    if (!User::where('email', 'admin@example.com')->exists()) {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'is_admin' => true,
        ]);
    }
}

}
