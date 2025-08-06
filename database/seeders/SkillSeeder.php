<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('skills')->insert([
//            [
//                'name' => 'PHP',
//                'proficiency' => 85,
//                'service_id' => 1,
//            ],
//            [
//                'name' => 'JavaScript',
//                'proficiency' => 90,
//                'service_id' => 1,
//            ],
//            [
//                'name' => 'Laravel',
//                'proficiency' => 80,
//                'service_id' => 1,
//            ],
//            [
//                'name' => 'React',
//                'proficiency' => 75,
//                'service_id' => 2,
//            ],
//        ]);

        Skill::insert([
            [
                'name' => 'PHP',
                'proficiency' => 85,
                'service_id' => 1,
            ],
            [
                'name' => 'JavaScript',
                'proficiency' => 90,
                'service_id' => 1,
            ],
            [
                'name' => 'Laravel',
                'proficiency' => 80,
                'service_id' => 1,
            ],
            [
                'name' => 'React',
                'proficiency' => 75,
                'service_id' => 2,
            ],
        ]);
    }
}
