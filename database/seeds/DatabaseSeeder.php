<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(QuanLyTableSeeder::class);
    }
}
class QuanLyTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('quanly')->insert([
       	['username'=>'admin', 'password'=>Hash::make('12345'), 'level'=>1],
       	['username'=>'master', 'password'=>Hash::make('12345'), 'level'=>1],
       	['username'=>'user', 'password'=>Hash::make('12345'), 'level'=>2],
       	['username'=>'member', 'password'=>Hash::make('12345'), 'level'=>2]
       ]);
    }
}
