<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        factory(User::class, 10)->create();
        factory(User::class)->create([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'password' => 'admin',
            'level' => config('settings.level.admin'),
        ]);
    }
}
