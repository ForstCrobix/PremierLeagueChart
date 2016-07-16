<?php

Route::get('/', 'WelcomeController@index');

Route::post('/getScores', 'WelcomeController@getScores');

Route::auth();

Route::post('/authenticate', 'Auth\AuthController@authenticate');
Route::post('/getTeamFixtures', 'WelcomeController@getTeamFixtures');
