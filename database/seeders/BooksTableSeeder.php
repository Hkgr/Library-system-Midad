<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Laravel: Up & Running: A Framework for Building Modern PHP Apps 3rd Edition',
                'auther_name' => 'Matt Stauffer',
                'desc' => 'A comprehensive guide to Laravel.',
                'quantity' => '10',
                'book_img' => 'laravel1.jpg',
                'auther_img' => 'matt.jpg',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ultimate Laravel',
                'auther_name' => 'Drishti Jain',
                'desc' => 'Laravel.',
                'quantity' => '6',
                'book_img' => 'laravel2.jpg',
                'auther_img' => 'l2.jpg',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Ultimate Laravel',
                'auther_name' => 'Drishti Jain',
                'desc' => 'Laravel.',
                'quantity' => '6',
                'book_img' => 'laravel2.jpg',
                'auther_img' => 'l2.jpg',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laravel Livewire',
                'auther_name' => 'Simon Angatia',
                'desc' => 'Laravel.',
                'quantity' => '2',
                'book_img' => 'laravel3.jpg',
                'auther_img' => 'l3.jpg',
                'category_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'C#: Learn',
                'auther_name' => 'Jamie Chan',
                'desc' => 'C#',
                'quantity' => '12',
                'book_img' => 'c1.jpg',
                'auther_img' => 'c1 .jpg',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Head First C#',
                'auther_name' => 'Andrew Stellman',
                'desc' => 'C#',
                'quantity' => '3',
                'book_img' => 'c2.jpg',
                'auther_img' => 'c2 .jpg',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'C# 12',
                'auther_name' => 'Mark J. Price ',
                'desc' => 'C#',
                'quantity' => '7',
                'book_img' => 'c3.jpg',
                'auther_img' => 'c3 .jpg',
                'category_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Java: Programming Basics',
                'auther_name' => 'Nathan Clar ',
                'desc' => 'Java',
                'quantity' => '19',
                'book_img' => 'j1.jpg',
                'auther_img' => 'j1 .jpg',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Java para novatos',
                'auther_name' => 'A. M. Vozmediano',
                'desc' => 'Java',
                'quantity' => '1',
                'book_img' => 'j2.jpg',
                'auther_img' => 'j2 .jpg',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Improve Java Coding',
                'auther_name' => 'Sar Maroof',
                'desc' => 'Java',
                'quantity' => '7',
                'book_img' => 'j3.jpg',
                'auther_img' => 'j3 .jpg',
                'category_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'C++ Programming',
                'auther_name' => 'Stroustrup Bjarne',
                'desc' => 'c++',
                'quantity' => '27',
                'book_img' => 'cc1.jpg',
                'auther_img' => 'cc1 .jpg',
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'C++ Crash Course',
                'auther_name' => 'Josh Lospinoso',
                'desc' => 'c++',
                'quantity' => '2',
                'book_img' => 'cc2.jpg',
                'auther_img' => 'cc2 .jpg',
                'category_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
     
     
        ]);
    }
}
