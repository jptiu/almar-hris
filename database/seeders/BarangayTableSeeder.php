<?php

namespace Database\Seeders;

use App\Models\Barangay;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bry = [
            [
                'id' => '1',
                'code' => '1',
                'city' => 'CDO',
                'user_id' => 4
            ],
            [
                'id' => '2',
                'code' => '2',
                'city' => 'Iligan',
                'user_id' => 4
            ],[
                'id' => '3',
                'code' => '3',
                'city' => 'Oroqueta',
                'user_id' => 4
            ]
        ];
        Barangay::insert($bry);
    }
}
