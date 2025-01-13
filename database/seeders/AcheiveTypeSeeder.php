<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AchieveType;

class AcheiveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        AchieveType::create([

            'name' => 'Recognition'

        ]);

        AchieveType::create([

            'name' => 'Awards'

        ]);


        AchieveType::create([

            'name' => 'Clientele'

        ]);

    }
}
