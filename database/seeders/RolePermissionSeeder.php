<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['guard_name' => 'admin', 'name' => 'admin']);
        $admin = Admin::where('email', 'like', 'admin%')->first();
        $admin->assignRole($role);

        $role = Role::create(['guard_name' => 'admin', 'name' => 'editor']);
        $admin = Admin::where('email', 'like', 'editor%')->first();
        $admin->assignRole($role);

        $role = Role::create(['guard_name' => 'admin', 'name' => 'assistant']);
        $admin = Admin::where('email', 'like', 'assistant%')->first();
        $admin->assignRole($role);

        $role = Role::create(['name' => 'customer']);
        $user = User::where('email', 'like', 'customer%')->first();
        $user->assignRole($role);

        $user = User::where('email', 'like', 'ira%')->first();
        $user->assignRole($role);

        $user = User::where('email', 'like', 'sam%')->first();
        $user->assignRole($role);
        
        // $permission = Permission::create(['name' => 'add post']);
        // $permission = Permission::create(['name' => 'store post']);
        // $permission = Permission::create(['name' => 'edit post']);
        // $permission = Permission::create(['name' => 'update post']);
        // $permission = Permission::create(['name' => 'delete post']);

        // $permission = Permission::create(['name' => 'add product']);
        // $permission = Permission::create(['name' => 'store product']);
        // $permission = Permission::create(['name' => 'edit product']);
        // $permission = Permission::create(['name' => 'update product']);
        // $permission = Permission::create(['name' => 'delete product']);

        // $permission = Permission::create(['name' => 'add setting']);
        // $permission = Permission::create(['name' => 'store setting']);
        // $permission = Permission::create(['name' => 'edit setting']);
        // $permission = Permission::create(['name' => 'update setting']);
        // $permission = Permission::create(['name' => 'delete setting']);
    }
}
