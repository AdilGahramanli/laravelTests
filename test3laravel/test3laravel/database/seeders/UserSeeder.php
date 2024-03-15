<?php

namespace Database\Seeders;

use app\Models\user;
// use Database\Factories\UserFactory;
// use Database\Factories\UsersFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Eloquent\Factories\User;
// use test3laravel\database\factories\UserFactory;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::factory()->count(10)->create();
    }
}
// C:\MAMP\htdocs\test3laravel\test3laravel\database\factories\UserFactory.php