<?php

namespace App\Http\Controllers;

use App\Team;
use App\Fixture;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Score;

class WelcomeController extends Controller
{

  public function index()
  {
      $teams = Team::all();
      $fixtures = $this->getFixtureScores();

      if(Auth::check()) {
          return view('welcome')->with('fixtures', $fixtures)->with('teams', $teams);
      }
      else
          return view('welcome')->with('fixtures', $fixtures);
  }

  public function getScores()
  {
    $emelieScore = $this->getEmelieScore();
    $robScore = $this->getRobScore();

    $scores = array(
      'em' => $emelieScore,
      'rob' => $robScore
    );

    return $scores;
  }

  private function getEmelieScore()
  {
    // adding more here
    return 55;
  }

  private function getRobScore()
  {
    // adding more here
    return 87;
  }

  private function getFixtureScores()
  {
      $teams = Team::orderBy('name')->get(); //works
      $fixtures = Fixture::all()->toArray();
      $allFixtures = Array();

      foreach ($teams as $team) {
          //foreach ($fixtures as $fixture) {
            $homeFixtures = $this->searchArray($fixtures, 'home_id', $team->id);
            foreach($teams as $awayTeam) {
                if ($awayTeam->id != $team->id) {
                    $fixture = $this->searchArray($homeFixtures, 'away_id', $awayTeam->id);
                    array_push($allFixtures, $fixture[0]['score']);
                }
            }
      }
      
    return $allFixtures;
  }

  public function getTeamFixtures()
  {
      $teamID = $_POST['teamID'];
      //TODO - Add away fixtures also
      $fixtures = Fixture::all()->where('home_team_id', $teamID)->sortBy('date');
      return $fixtures;
  }

    private function searchArray($array, $key, $value)
    {
        $results = array();

        if (is_array($array)) {
            if (isset($array[$key]) && $array[$key] == $value) {
                $results[] = $array;
            }

            foreach ($array as $subarray) {
                $results = array_merge($results, $this->searchArray($subarray, $key, $value));
            }
        }

        return $results;
    }
}
