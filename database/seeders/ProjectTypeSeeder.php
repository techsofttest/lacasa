<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProjectType;

class ProjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProjectType::create([
            'type' => 'Residential'
        ]);

        ProjectType::create([
            'type' => 'Commercial'
        ]);

        ProjectType::create([
            'type' => 'Mixed Use'
        ]);

        ProjectType::create([
            'type' => 'Hospitality'
        ]);

        ProjectType::create([
            'type' => 'Master Plan'
        ]);

        ProjectType::create([
            'type' => 'Work Span'
        ]);

        ProjectType::create([
            'type' => 'Aviation'
        ]);

        ProjectType::create([
            'type' => 'Interior Design'
        ]);

    }
}
