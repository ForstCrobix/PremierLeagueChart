<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WelcomeController extends Controller
{
  public function index()
  {
      $percent = $this->getPercent();
      return view('welcome')->with('percent', $percent);
  }

  private function getPercent()
  {
    $total = 5000;
    $current = 1000;
    $percent = round(($current/$total) * 100, 1);
    return $percent;
  }
}
