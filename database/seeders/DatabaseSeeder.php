<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        $this->call(
//            [AboutSeeder::class],
//            [MediaSeeder::class],
//            [ServiceSeeder::class],
//            [SkillSeeder::class],
//            [EducationSeeder::class],
//            [ExperienceSeeder::class],
//            [ProjectSeeder::class],
//            [TestimonialSeeder::class],
//        );

        $this->call([
            AboutSeeder::class,
            MediaSeeder::class,
            ServiceSeeder::class,
            SkillSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            ProjectSeeder::class,
            TestimonialSeeder::class,
        ]);

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
    }
}
