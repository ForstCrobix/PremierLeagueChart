<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Score;

class WelcomeController extends Controller
{
  public function index()
  {
      $ars = $this->getData();

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
}
