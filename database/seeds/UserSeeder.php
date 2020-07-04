<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
    		'username' =>'vit',
    		'password' =>Hash::make('123')
    	]);

    	DB::table('users')->insert([
    		'username' =>'tien',
    		'password' =>Hash::make('321')
    	]);
    }
}
