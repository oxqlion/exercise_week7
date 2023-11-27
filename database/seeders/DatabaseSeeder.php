<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Satpam;
use App\Models\Student;
use App\Models\StudentExtracurricular;
use Database\Factories\StudentExtracurricularFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Student::factory(100)->create();
        Satpam::factory(100)->create(); 
        $this->call(ExtracurricularSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        UserFactory::factory(5)->create();
        StudentExtracurricular::factory(100)->create();
    }
}
