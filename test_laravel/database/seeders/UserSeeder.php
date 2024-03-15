<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory()->count(10)->create();
        // DB::table('user')->insert([
        //     'id' => 1,
        //     'name' => Str::random(5),

        // ]);
        // UserModel::factory()
        //     ->count(10)
        //     ->create();
        
    }
}