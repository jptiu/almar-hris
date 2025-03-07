<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'         => '1',
                'title'      => 'user_management_access',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '2',
                'title'      => 'permission_create',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '3',
                'title'      => 'permission_edit',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '4',
                'title'      => 'permission_show',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '5',
                'title'      => 'permission_delete',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '6',
                'title'      => 'permission_access',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '7',
                'title'      => 'role_create',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '8',
                'title'      => 'role_edit',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '9',
                'title'      => 'role_show',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '10',
                'title'      => 'role_delete',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '11',
                'title'      => 'role_access',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '12',
                'title'      => 'user_create',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '13',
                'title'      => 'user_edit',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '14',
                'title'      => 'user_show',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '15',
                'title'      => 'user_delete',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '16',
                'title'      => 'user_access',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '17',
                'title'      => 'hr_create',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '18',
                'title'      => 'hr_edit',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '19',
                'title'      => 'hr_show',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '20',
                'title'      => 'hr_delete',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '21',
                'title'      => 'hr_access',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '22',
                'title'      => 'super_create',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '23',
                'title'      => 'super_edit',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '24',
                'title'      => 'super_show',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '25',
                'title'      => 'super_delete',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '26',
                'title'      => 'super_access',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '27',
                'title'      => 'admin_create',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '28',
                'title'      => 'admin_edit',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '29',
                'title'      => 'admin_show',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '30',
                'title'      => 'admin_delete',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
            [
                'id'         => '31',
                'title'      => 'admin_access',
                'created_at' => '2019-04-16 08:40:35',
                'updated_at' => '2019-04-16 08:40:35',
            ],
        ];

        Permission::insert($permissions);
    }
}
