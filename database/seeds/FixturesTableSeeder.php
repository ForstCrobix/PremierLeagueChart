<?php

use App\Team;
use Illuminate\Database\Seeder;

class FixturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teams = Team::all();
        $number_of_teams = $teams->count();

        for($i = 0; $i < $number_of_teams; $i++){
            $home_team_id = $teams->get($i)->id;
            for($j = 0; $j < $number_of_teams; $j++){
                if($i != $j) {
                    $away_team_id = $teams->get($j)->id;
                    DB::table('fixtures')->insert([
                        'home_team_id' => $home_team_id,
                        'away_team_id' => $away_team_id,
                        'date' => date("Y-m-d H:i:s")
                        // Skip score because it is nullable
                    ]);
                }
            }
        }
    }
}
