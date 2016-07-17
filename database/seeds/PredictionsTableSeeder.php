<?php

use App\Fixture;
use App\User;
use Illuminate\Database\Seeder;

class PredictionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fills the predictions table with random data

        $fixtures = Fixture::all();
        $users = User::all();
        $resultValues = [0,1,3];
        $scoreValues = [0,1,2,3,4,5];

        foreach($fixtures as $fixture) {
            foreach($users as $user) {
                DB::table('predictions')->insert([
                    'fixture_id' => $fixture->id,
                    'user_id' => $user->id,
                    'home_score' => $scoreValues[array_rand($scoreValues)],
                    'away_score' => $scoreValues[array_rand($scoreValues)],
                    'points' => $resultValues[array_rand($resultValues)],
                    'created_at' => date("Y-m-d H:i:s"),
                    'updated_at' => date("Y-m-d H:i:s")
                ]);
            }
        }
    }
}
