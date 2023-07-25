<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Ryan Chandra',
            'email' => 'ryan@gmail.com',
            'password' => bcrypt('ryan123'),
            'gender' => 'Male',
            'date_of_birth' => Carbon::parse('2000-04-04'),
            'country' => 'Indonesia',
            'role' => '1'
        ]);
        //role => 1 (Admin), role=> 0 (Customer)
        DB::table('users')->insert([
            'name' => 'Andra Sasmita',
            'email' => 'andra@gmail.com',
            'password' => bcrypt('andra123'),
            'gender' => 'Male',
            'date_of_birth' => Carbon::parse('2000-07-08'),
            'country' => 'Indonesia'
        ]);
    }
}
