<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->mobile = '71585844';
        $user->password = Hash::make('12345678');
        $user->sex = 'male';
        $user->save();
        
        $user = new User;
        $user->name = 'editor';
        $user->email = 'editor@editor.com';
        $user->mobile = '71717171';
        $user->password = Hash::make('12345678');
        $user->sex = 'female';
        $user->save();
        
        $user = new User;
        $user->name = 'assistant';
        $user->email = 'assistant@assistant.com';
        $user->mobile = '71585844';
        $user->password = Hash::make('12345678');
        $user->sex = 'male';
        $user->save();
        
        $user = new User;
        $user->name = 'customer';
        $user->email = 'customer@customer.com';
        $user->mobile = '71585844';
        $user->password = Hash::make('12345678');
        $user->sex = 'male';
        $user->save();
        
        $user = new User;
        $user->name = 'ira';
        $user->email = 'ira@ira.com';
        $user->mobile = '71585844';
        $user->password = Hash::make('12345678');
        $user->sex = 'male';
        $user->save();
        
        $user = new User;
        $user->name = 'sam';
        $user->email = 'sam@sam.com';
        $user->mobile = '71585844';
        $user->password = Hash::make('12345678');
        $user->sex = 'male';
        $user->save();

    }
}
