<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'  =>  'admin',
            'email' =>  'admin@admin.com',
            'password'  =>  Hash::make('12345678'),
            'is_admin'  =>  1,
        ]);
        
        UserDetail::create([
            'user_id'   =>  $user->id,
        ]);
    }
}
