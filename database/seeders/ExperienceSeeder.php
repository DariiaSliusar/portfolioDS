<?php

namespace Database\Seeders;

use App\Models\Experience;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('experiences')->insert([
//            [
//                'company' => 'Tech Solutions',
//                'period' => '2019 - 2021',
//                'position' => 'Software Engineer',
//            ],
//            [
//                'company' => 'Web Innovations',
//                'period' => '2021 - 2023',
//                'position' => 'Senior Developer',
//            ],
//        ]);

        Experience::insert([
            [
                'company' => 'Tech Solutions',
                'period' => '2019 - 2021',
                'position' => 'Software Engineer',
            ],
            [
                'company' => 'Web Innovations',
                'period' => '2021 - 2023',
                'position' => 'Senior Developer',
            ],
        ]);
    }
}
