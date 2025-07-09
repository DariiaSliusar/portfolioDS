<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('abouts')->insert([
//            [
//                'name' => 'Dariia Sliusar',
//                'home_image' => 'no-image.png',
//                'banner_image' => 'no-image.png',
//                'phone' => '+48508744705',
//                'email' => 'dariiasliusar@gmail.com',
//                'address' => 'Lodz, Poland',
//                'description' => 'I am a passionate and dedicated web developer with a focus on creating dynamic and user-friendly applications. My expertise lies in building robust back-end systems and intuitive front-end interfaces.',
//                'summary' => 'Experienced web developer with a passion for creating dynamic applications.',
//                'tagline' => 'Laravel Developer',
//                'cv' => 'DariiaSliusar.pdf',
//            ]
//        ]);

        About::create([
            'name' => 'Dariia Sliusar',
            'home_image' => 'no-image.png',
            'banner_image' => 'no-image.png',
            'phone' => '+48508744705',
            'email' => 'dariiasliusar@gmail.com',
            'address' => 'Lodz, Poland',
            'description' => 'I am a passionate and dedicated web developer with a focus on creating dynamic and user-friendly applications. My expertise lies in building robust back-end systems and intuitive front-end interfaces.',
            'summary' => 'Experienced web developer with a passion for creating dynamic applications.',
            'tagline' => 'Laravel Developer',
            'cv' => 'DariiaSliusar.pdf',
        ]);
    }
}
