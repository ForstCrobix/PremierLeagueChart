<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->insert([
            'home' => 'arsenal',
            'away' => 'bournemouth',
            'em_pred' => '2-0',
            'rob_pred' => '1-5',
            'score' => '2-0'
        ]);
        DB::table('scores')->insert([
            'home' => 'arsenal',
            'away' => 'burnley',
            'em_pred' => '0-2',
            'rob_pred' => '4-2',
            'score' => '1-0'
        ]);
        DB::table('scores')->insert([
            'home' => 'arsenal',
            'away' => 'chelsea',
            'em_pred' => '2-0',
            'rob_pred' => '1-5',
            'score' => '2-0'
        ]);

        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
        $this->call(FixturesTableSeeder::class);

        Model::reguard();
    }
}
