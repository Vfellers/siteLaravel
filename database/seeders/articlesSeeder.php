<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class articlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("articles")->insert([
            "title" => "Programação em 2024",
            "preview" => "artigo de programação",
            "text" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reprehenderit saepe praesentium repellendus deleniti quia illum molestias natus eligendi aliquam esse distinctio, blanditiis, suscipit explicabo incidunt ad, repudiandae labore at quam!",
            "author" => "Vito",
            "directory" => "170751256458",
            "date" => "09/02/24",
            "from_category" => 1
        ]);
    }
}
