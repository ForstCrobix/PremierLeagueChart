<?php

namespace App\Http\Controllers;

use App\Team;
use App\Fixture;
use Auth;
use DB;
use App\Score;

class WelcomeController extends Controller
{
  public function index()
  {
      $ars = $this->getData();

      if(Auth::check()) {
          $teams = Team::orderBy('name')->get();
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
      $matchThese = ['home_id' => $teamID, 'away_id' => $teamID];
      //TODO - Add away fixtures also
      $fixtures = Fixture::where('home_id', "=", $teamID)->
                           orWhere('away_id', "=", $teamID)->
                           orderBy('date')->get();
      return $fixtures;
  }

  public function updateFixture()
  {
      $datetime = $_POST['date'] . ' ' . $_POST['time'];
      $parsedDatetime = date_create_from_format('Y-m-d H:i:s', $datetime);
      if(!$parsedDatetime)
          return "NOT_OK";

      try {
          if(DB::table('fixtures')->where('id', '=', $_POST['fixture_id'])
              ->update(array('date' => $datetime, 'updated_at' => date("Y-m-d H:i:s"))))
              return "OK";
      }
      catch(Exception $e) {
          return "NOT_OK";
      }
  }
}
