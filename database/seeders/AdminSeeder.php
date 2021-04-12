<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Admin;
        $admin->name = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->mobile = '71585844';
        $admin->password = Hash::make('12345678');
        $admin->sex = 'male';
        $admin->save();

        $admin = new Admin;
        $admin->name = 'editor';
        $admin->email = 'editor@editor.com';
        $admin->mobile = '71717171';
        $admin->password = Hash::make('12345678');
        $admin->sex = 'female';
        $admin->save();

        $admin = new Admin;
        $admin->name = 'assistant';
        $admin->email = 'assistant@assistant.com';
        $admin->mobile = '71585844';
        $admin->password = Hash::make('12345678');
        $admin->sex = 'male';
        $admin->save();
    }
}
