<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
  public function index()
  {
      $emelieScore = $this->getEmelieScore();
      $robScore = $this->getRobScore();

      $scores = array(
        'em' => $emelieScore,
        'rob' => $robScore
      );

      return view('welcome')->with('scores', $scores);
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
}
