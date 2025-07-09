<?php

namespace Database\Seeders;

use App\Models\Media;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('media')->insert([
//            [
//                'link' => 'https://www.facebook.com',
//                'icon' => 'fa-brands fa-facebook',
//            ],
//            [
//                'link' => 'https://www.instagram.com',
//                'icon' => 'fa-brands fa-instagram',
//            ],
//            [
//                'link' => 'https://www.linkedin.com',
//                'icon' => 'fa-brands fa-linkedin',
//            ],
//        ]);

        Media::insert([
            [
                'link' => 'https://www.instagram.com',
                'icon' => 'fa-brands fa-instagram',
            ],
            [
                'link' => 'https://www.linkedin.com',
                'icon' => 'fa-brands fa-linkedin',
            ],
        ]);
    }
}
