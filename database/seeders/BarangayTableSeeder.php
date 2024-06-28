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
                'barangay_name',
                'code' => '9000',
                'city' => 'CDO',
                'user_id' => 4
            ],
            [
                'id' => '2',
                'barangay_name',
                'code' => '9002',
                'city' => 'Iligan',
                'user_id' => 4
            ],[
                'id' => '3',
                'barangay_name',
                'code' => '9003',
                'city' => 'Oroqueta',
                'user_id' => 4
            ]
        ];
        Barangay::insert($bry);
    }
}
