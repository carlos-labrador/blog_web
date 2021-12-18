<?php

namespace Database\Seeders;

use App\Enums\UserType;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new Role();
        $admin->id = UserType::Administrator;
        $admin->name = 'admin';
        $admin->slug = 'Users manager';
        $admin->save();

        $user = new Role();
        $user->id = UserType::User;
        $user->name = 'user';
        $user->slug = 'Can manage posts';
        $user->save();

    }
}
