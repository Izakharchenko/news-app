<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['title' => 'technology'],
            ['title' => 'science'],
            ['title' => 'artificial intelligence'],
            ['title' => 'linux'],
            ['title' => 'apple'],
            ['title' => 'google'],
            ['title' => 'android'],
        ]);
    }
}
