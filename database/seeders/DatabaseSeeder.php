<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SubjectGrade;
use App\Models\Student;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

    
        Student::factory()->count(30)->create();

        //User::factory()->create([
            //'name' => 'Test Student',
            //email' => 'test@example.com',
       // ]);

            SubjectGrade::factory()->count(50)->create();


    }
}
