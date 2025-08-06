<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('educations')->insert([]);

        Education::insert([
            [
                'institution' => 'University of Example',
                'period' => '2015 - 2019',
                'degree' => 'Bachelor of Science',
                'department' => 'Computer Science',
            ],
            [
                'institution' => 'Example Institute of Technology',
                'period' => '2020 - 2022',
                'degree' => 'Master of Science',
                'department' => 'Software Engineering',
            ],
        ]);
    }
}
