<?php

use Illuminate\Database\Seeder;
use App\Helpers\APIHelper;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$teams = array('Arsenal', 'Bournemouth', 'Burnley', 'Chelsea', 'Crystal Palace', 'Everton', 'Hull City', 'Leicester City',
                       'Liverpool', 'Manchester City', 'Manchester United', 'Middlesbrough', 'Southampton', 'Stoke City', 'Sunderland', 'Swansea City',
                       'Tottenham Hotspur', 'Watford', 'West Brom', 'West Ham');

        foreach($teams as $team){
            DB::table('teams')->insert([
                'name' => $team,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }*/
        $url = config("footballdata.url").config("footballdata.seasons-directory")."/".config("footballdata.premier-league-id").config("footballdata.teams-directory");
        $helper = new APIHelper();
        $teamJSON = $helper->GetAPIData($url);
        $teams = $helper->GetTeamData($teamJSON);

        foreach($teams as $team) {
            DB::table('teams')->insert([
                'id' => $team[0],
                'name' => $team[1],
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }

    }
}
