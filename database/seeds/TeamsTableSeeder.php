<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = array('Arsenal', 'Bournemouth', 'Burnley', 'Chelsea', 'Crystal Palace', 'Everton', 'Hull City', 'Leicester City',
                       'Liverpool', 'Manchester City', 'Manchester United', 'Middlesbrough', 'Southampton', 'Stoke City', 'Sunderland', 'Swansea City',
                       'Tottenham Hotspur', 'Watford', 'West Brom', 'West Ham');

        foreach($teams as $team){
            DB::table('teams')->insert([
                'name' => $team,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
