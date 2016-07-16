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
      $ars = $this->getData();

      if(Auth::check()) {
          $teams = Team::all();
          return view('welcome')->with('ars', $ars)->with('teams', $teams);
      }
      else
          return view('welcome')->with('ars', $ars);
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

  private function getData()
  {
    $data = Score::All();
    return $data;
  }

  public function getTeamFixtures()
  {
      $teamID = $_POST['teamID'];
      //TODO - Add away fixtures also
      $fixtures = Fixture::all()->where('home_team_id', $teamID)->sortBy('date');
      return $fixtures;
  }
}
