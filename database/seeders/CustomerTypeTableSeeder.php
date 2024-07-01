<?php

namespace Database\Seeders;

use App\Models\CustomerType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cust = [
            [
                'id' => '1',
                'code' => '9000',
                'description' => 'Test CDO',
                'user_id' => 4,
            ],
            [
                'id' => '2',
                'code' => '9001',
                'description' => 'Test Iligan',
                'user_id' => 4,
            ],
            [
                'id' => '3',
                'code' => '9002',
                'description' => 'Test Oroqueta',
                'user_id' => 4,
            ]
        ];
        CustomerType::insert($cust);
    }
}
