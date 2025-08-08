<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('testimonials')->insert([
//            [
//                'name' => 'John Doe',
//                'function' => 'Software Engineer',
//                'testimony' => 'This is a great service! Highly recommended.',
//                'rating' => 5,
//                'image' => 'john_doe.jpg',
//            ],
//            [
//                'name' => 'Jane Smith',
//                'function' => 'Project Manager',
//                'testimony' => 'Excellent work and very professional.',
//                'rating' => 4,
//                'image' => 'jane_smith.jpg',
//            ],
//            [
//                'name' => 'Alice Johnson',
//                'function' => 'UX Designer',
//                'testimony' => 'I loved the design and user experience!',
//                'rating' => 5,
//                'image' => 'alice_johnson.jpg',
//            ],
//        ]);

        Testimonial::insert([
            [
                'name' => 'John Doe',
                'function' => 'Software Engineer',
                'testimony' => 'This is a great service! Highly recommended.',
                'rating' => 5,
                'image' => 'avatar.png',
            ],
            [
                'name' => 'Jane Smith',
                'function' => 'Project Manager',
                'testimony' => 'Excellent work and very professional.',
                'rating' => 4,
                'image' => 'avatar.png',
            ],
            [
                'name' => 'Alice Johnson',
                'function' => 'UX Designer',
                'testimony' => 'I loved the design and user experience!',
                'rating' => 5,
                'image' => 'avatar.png',
            ],
        ]);
    }

}
