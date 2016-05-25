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

  private function getEmelieScore()
  {
    return 55;
  }

  private function getRobScore()
  {
    return 89;
  }
}
