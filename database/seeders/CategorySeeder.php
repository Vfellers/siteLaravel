<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            [
                "name" => "Gareth Koch",
                "show" => "0"
            ],
            [
                "name" => "Darrel Sykes",
                "show" => "1"
            ],
            [
                "name" => "Francesca Noble",
                "show" => "0"
            ],
            [
                "name" => "Beck Silva",
                "show" => "1"
            ],
            [
                "name" => "Eve Taylor",
                "show" => "0"
            ],
            [
                "name" => "Rachel Booker",
                "show" => "1"
            ],
            [
                "name" => "Damian Phillips",
                "show" => "1"
            ],
            [
                "name" => "Laith Bennett",
                "show" => "0"
            ],
            [
                "name" => "Evan Schmidt",
                "show" => "0"
            ],
            [
                "name" => "Sacha Weiss",
                "show" => "0"
            ]
        ]);
    }
}
