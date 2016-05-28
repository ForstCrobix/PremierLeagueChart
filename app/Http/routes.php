<?php

//Route::get('/', 'WelcomeController@index');
Route::get('/', function() {
  return view('welcome');
});
Route::post('/getScores', 'WelcomeController@getScores');



Route::auth();

Route::get('/home', 'HomeController@index');
