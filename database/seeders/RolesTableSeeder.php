<?php
namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'title' => 'Super Admin',
                'created_at' => '2019-04-16 08:40:08',
                'updated_at' => '2019-04-16 08:40:08',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'Admin',
                'created_at' => '2019-04-16 08:40:08',
                'updated_at' => '2019-04-16 08:40:08',
                'deleted_at' => null,
            ],
            [
                'id'         => 3,
                'title'      => 'HR',
                'created_at' => '2019-04-16 08:40:08',
                'updated_at' => '2019-04-16 08:40:08',
                'deleted_at' => null,
            ],
            [
                'id'         => 4,
                'title'      => 'Branch Manager',
                'created_at' => '2019-04-16 08:40:08',
                'updated_at' => '2019-04-16 08:40:08',
                'deleted_at' => null,
            ],
            [
                'id'         => 5,
                'title'      => 'Loan Officer',
                'created_at' => '2019-04-16 08:40:08',
                'updated_at' => '2019-04-16 08:40:08',
                'deleted_at' => null,
            ],
            [
                'id'         => 6,
                'title'      => 'Auditor',
                'created_at' => '2019-04-16 08:40:08',
                'updated_at' => '2019-04-16 08:40:08',
                'deleted_at' => null,
            ]
        ];

        Role::insert($roles);
    }
}
