<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('projects')->insert([
//            [
//                'image' => 'https://via.placeholder.com/150',
//                'title' => 'Project One',
//                'description' => 'Description for project one.',
//                'link' => 'https://example.com/project-one',
//            ],
//            [
//                'image' => 'https://via.placeholder.com/150',
//                'title' => 'Project Two',
//                'description' => 'Description for project two.',
//                'link' => 'https://example.com/project-two',
//            ],
//            [
//                'image' => 'https://via.placeholder.com/150',
//                'title' => 'Project Three',
//                'description' => 'Description for project three.',
//                'link' => 'https://example.com/project-three',
//            ],
//        ]);

        Project::insert([
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Project One',
                'description' => 'Description for project one.',
                'link' => 'https://example.com/project-one',
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Project Two',
                'description' => 'Description for project two.',
                'link' => 'https://example.com/project-two',
            ],
            [
                'image' => 'https://via.placeholder.com/150',
                'title' => 'Project Three',
                'description' => 'Description for project three.',
                'link' => 'https://example.com/project-three',
            ],
        ]);
    }
}
