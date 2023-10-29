<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtracurricularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("extracurriculars")->insert([
            'name' => 'Chess Club',
            'requirements' => 'Basic understanding of chess rules',
            'price' => '$50 per semester',
            'tutor_name' => 'Mr. Johnson',
        ]);
        DB::table("extracurriculars")->insert([
            'name' => 'Art Club',
            'requirements' => 'Interest in art',
            'price' => '$40 per semester',
            'tutor_name' => 'Ms. Smith',
        ]);
        DB::table("extracurriculars")->insert([
            'name' => 'Coding Club',
            'requirements' => 'Basic programming knowledge',
            'price' => '$60 per semester',
            'tutor_name' => 'Mr. Davis',
        ]);
        DB::table("extracurriculars")->insert([
            'name' => 'Music Band',
            'requirements' => 'Musical instrument or singing talent',
            'price' => '$55 per semester',
            'tutor_name' => 'Mrs. Anderson',
        ]);
        DB::table("extracurriculars")->insert([
            'name' => 'Sports Club',
            'requirements' => 'Physical fitness',
            'price' => '$30 per semester',
            'tutor_name' => 'Coach Williams',
        ]);
    }
}
