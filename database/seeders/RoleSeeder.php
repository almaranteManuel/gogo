<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name' => 'admin']);
        $role_editor = Role::create(['name' => 'editor']);
        $role_client = Role::create(['name' => 'client']);

        $permisison_create_role = Permission::create(['name' => 'create roles']);
        $permisison_read_role = Permission::create(['name' => 'read roles']);
        $permisison_update_role = Permission::create(['name' => 'update roles']);
        $permisison_delete_role = Permission::create(['name' => 'delete roles']);

        $permisison_create_lesson = Permission::create(['name' => 'create lessons']);
        $permisison_read_lesson = Permission::create(['name' => 'read lessons']);
        $permisison_update_lesson = Permission::create(['name' => 'update lessons']);
        $permisison_delete_lesson = Permission::create(['name' => 'delete lessons']);

        $permisison_create_category = Permission::create(['name' => 'create categories']);
        $permisison_read_category = Permission::create(['name' => 'read categories']);
        $permisison_update_category = Permission::create(['name' => 'update categories']);
        $permisison_delete_category = Permission::create(['name' => 'delete categories']);

        $permissions_admin = [
            $permisison_create_role, $permisison_read_role, $permisison_update_role, $permisison_delete_role,
            $permisison_create_lesson, $permisison_read_lesson, $permisison_update_lesson, $permisison_delete_lesson,
            $permisison_create_category, $permisison_read_category, $permisison_update_category, $permisison_delete_category
        ];
        
        $permissions_editor = [
            $permisison_create_lesson, $permisison_read_lesson, $permisison_update_lesson, $permisison_delete_lesson,
            $permisison_create_category, $permisison_read_category, $permisison_update_category, $permisison_delete_category
        ];
        $permissions_client = [
            $permisison_read_lesson, 
            $permisison_read_category
        ];

        $role_admin->syncPermissions($permissions_admin);
        $role_editor->syncPermissions($permissions_editor);
        $role_client->syncPermissions($permissions_client);
    }
}
