<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Robert Marsh',
            'email' => 'rob.dmind@gmail.com',
            'password' => bcrypt('7p!RlKGpdGMg'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('users')->insert([
            'name' => 'Emelie Yates',
            'email' => 'emelieyates@hotmail.co.uk',
            'password' => bcrypt('7p!RlKGpdGMg'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
