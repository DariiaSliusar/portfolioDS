<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('services')->insert([
//            [
//                'title' => 'Web Development',
//                'icon' => 'fa-solid fa-code',
//                'description' => 'Building responsive and modern websites.',
//            ],
//            [
//                'title' => 'Mobile App Development',
//                'icon' => 'fa-solid fa-mobile-alt',
//                'description' => 'Creating user-friendly mobile applications.',
//            ],
//            [
//                'title' => 'SEO Optimization',
//                'icon' => 'fa-solid fa-search',
//                'description' => 'Improving website visibility on search engines.',
//            ],
//            [
//                'title' => 'Digital Marketing',
//                'icon' => 'fa-solid fa-bullhorn',
//                'description' => 'Promoting brands through digital channels.',
//            ]
//        ]);

        Service::insert([
            [
                'title' => 'Web Development',
                'icon' => 'fa-solid fa-code',
                'description' => 'Building responsive and modern websites.',
            ],
            [
                'title' => 'Mobile App Development',
                'icon' => 'fa-solid fa-mobile-alt',
                'description' => 'Creating user-friendly mobile applications.',
            ],
            [
                'title' => 'SEO Optimization',
                'icon' => 'fa-solid fa-search',
                'description' => 'Improving website visibility on search engines.',
            ],
            [
                'title' => 'Digital Marketing',
                'icon' => 'fa-solid fa-bullhorn',
                'description' => 'Promoting brands through digital channels.',
            ]
        ]);

    }
}
