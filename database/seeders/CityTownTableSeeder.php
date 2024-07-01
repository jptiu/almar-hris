<?php

namespace Database\Seeders;

use App\Models\CityTown;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CityTownTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $city = [
            [
                'id' => '1',
                'code' => '9000',
                'city_town' => 'CDO',
                'user_id' => 4,
            ],
            [
                'id' => '2',
                'code' => '9001',
                'city_town' => 'Iligan',
                'user_id' => 4,
            ],
            [
                'id' => '3',
                'code' => '9002',
                'city_town' => 'Oroqueta',
                'user_id' => 4,
            ]
        ];
        CityTown::insert($city);
    }
}
