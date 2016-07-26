<?php

use App\Team;
use App\Fixture;
use App\Helpers\APIHelper;
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
        $helper = new APIHelper();
        $team_directory = config('footballdata.url').config('footballdata.teams-directory');
        $fixtures_directory = config('footballdata.fixtures-directory');
        $teams = Team::all()->toArray();
        $number_of_teams = count($teams);

        for($i = 0; $i < $number_of_teams; $i++){
            $team_id = $teams[$i]['id'];
            $url = $team_directory."/".$team_id.$fixtures_directory;
            $json_data = $helper->GetAPIData($url);
            $fixtures = $helper->GetFixturesData($json_data, $teams);
            var_dump($fixtures);

            foreach($fixtures as $fixture){
                $existingFixture = Fixture::where('id', '=', $fixture[0])->first();
                if($existingFixture === null) {
                    DB::table('fixtures')->insert([
                        'id' => $fixture[0],
                        'date' => $fixture[1],
                        'matchday' => $fixture[2],
                        'home_id' => $fixture[3],
                        'away_id' => $fixture[4],
                        'created_at' => date("Y-m-d H:i:s"),
                        'updated_at' => date("Y-m-d H:i:s")
                        // Skip result because it is nullable
                    ]);
                }
                /*$existCheck = Fixture::firstOrCreate(
                    array('id' => $fixtures[0],
                    'date' => $fixtures[1],
                    'matchday' => $fixtures[2],
                    'home_id' => $fixtures[3],
                    'away_id' => $fixtures[4]));

                DB::table('fixtures')->insert([
                    'id' => $fixtures[0],
                    'date' => $fixtures[1],
                    'matchday' => $fixtures[2],
                    'home_id' => $fixtures[3],
                    'away_id' => $fixtures[4],
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                    // Skip result because it is nullable
                ]);*/
            }

            /*for($j = 0; $j < $number_of_teams; $j++){
                if($i != $j) {
                    $away_team_id = $teams->get($j)->id;
                    DB::table('fixtures')->insert([
                        'home_id' => $home_team_id,
                        'away_id' => $away_team_id,
                        'date' => date("Y-m-d H:i:s"),
                        'created_at' => date("Y-m-d H:i:s"),
                        'updated_at' => date("Y-m-d H:i:s")
                        // Skip score because it is nullable
                    ]);
                }
            }*/
        }
    }
}
