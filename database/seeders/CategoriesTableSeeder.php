<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'cat_title' => 'C#',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cat_title' => 'Laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cat_title' => 'C++',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'cat_title' => 'Java',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);    }
}
