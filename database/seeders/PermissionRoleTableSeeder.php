<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
        $superadmin_permissions = Permission::all();
        $sadmin_permissions = $superadmin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 6) != 'admin_' && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 3) != 'hr_' && substr($permission->title, 0, 7) != 'branch_' && substr($permission->title, 0, 5) != 'loan_' && substr($permission->title, 0, 8) != 'auditor_' ;
        });
        Role::findOrFail(1)->permissions()->sync($sadmin_permissions);
        $admin_permissions = $superadmin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_' && substr($permission->title, 0, 6) != 'super_' && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 3) != 'hr_' && substr($permission->title, 0, 7) != 'branch_' && substr($permission->title, 0, 5) != 'loan_' && substr($permission->title, 0, 8) != 'auditor_' && substr($permission->title, 0, 10) != 'collector_' ;
        });
        Role::findOrFail(2)->permissions()->sync($admin_permissions);
        $hr_permissions = $superadmin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_' && substr($permission->title, 0, 6) != 'super_' && substr($permission->title, 0, 6) != 'admin_' && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 7) != 'branch_' && substr($permission->title, 0, 5) != 'loan_' && substr($permission->title, 0, 8) != 'auditor_' && substr($permission->title, 0, 10) != 'collector_' ;
        });
        Role::findOrFail(3)->permissions()->sync($hr_permissions);
        $branch_permissions = $superadmin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_' && substr($permission->title, 0, 6) != 'super_' && substr($permission->title, 0, 6) != 'admin_' && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 3) != 'hr_' && substr($permission->title, 0, 5) != 'loan_' && substr($permission->title, 0, 8) != 'auditor_' && substr($permission->title, 0, 10) != 'collector_' ;
        });
        Role::findOrFail(4)->permissions()->sync($branch_permissions);
        $loan_permissions = $superadmin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_' && substr($permission->title, 0, 6) != 'super_' && substr($permission->title, 0, 6) != 'admin_' && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 7) != 'branch_' && substr($permission->title, 0, 3) != 'hr_' && substr($permission->title, 0, 8) != 'auditor_' && substr($permission->title, 0, 10) != 'collector_' ;
        });
        Role::findOrFail(5)->permissions()->sync($loan_permissions);
        $auditor_permissions = $superadmin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_' && substr($permission->title, 0, 6) != 'super_' && substr($permission->title, 0, 6) != 'admin_' && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 7) != 'branch_' && substr($permission->title, 0, 3) != 'hr_' && substr($permission->title, 0, 5) != 'loan_' && substr($permission->title, 0, 10) != 'collector_' ;
        });
        Role::findOrFail(6)->permissions()->sync($auditor_permissions);
        $collector_permissions = $superadmin_permissions->filter(function ($permission) {
            return substr($permission->title, 0, 5) != 'role_' && substr($permission->title, 0, 11) != 'permission_' && substr($permission->title, 0, 6) != 'super_' && substr($permission->title, 0, 6) != 'admin_' && substr($permission->title, 0, 5) != 'user_' && substr($permission->title, 0, 7) != 'branch_' && substr($permission->title, 0, 3) != 'hr_' && substr($permission->title, 0, 5) != 'loan_' && substr($permission->title, 0, 8) != 'auditor_'  ;
        });
        Role::findOrFail(7)->permissions()->sync($collector_permissions);
    }
}
