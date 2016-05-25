<?php

Route::get('/', 'WelcomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
