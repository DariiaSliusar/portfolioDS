<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        DB::table('messages')->insert([
//            [
//                'name' => 'John Doe',
//                'email' => 'customer@gmail.com',
//                'subject' => 'Inquiry about services',
//                'description' => 'I would like to know more about your services and pricing.',
//                'status' => "0"
//            ]
//        ]);

        Message::insert([
            [
                'name' => 'John Doe',
                'email' => 'customer@gmail.com',
                'subject' => 'Inquiry about services',
                'description' => 'I would like to know more about your services and pricing.',
                'status' => "0"
            ]
        ]);
    }
}
