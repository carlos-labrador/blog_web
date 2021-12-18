<?php

namespace Database\Seeders;

use App\Enums\UserType;
use App\Models\User;
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
        $admin = new User(
            [
                'username' => 'admin',
                'email' => 'admin@blog.com', 
                'password' =>  bcrypt('supersecret'),
            ]
        );
        $admin->save();
        $admin->roles()->attach(UserType::Administrator);
    }
}
