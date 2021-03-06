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
