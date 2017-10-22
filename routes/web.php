<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/env', function () {
//     dump(config('app.name'));
//     dump(config('app.env'));
//     dump(config('app.debug'));
//     dump(config('app.url'));
// });

Route::get('/form', 'WelcomeController@form');
Route::get('/amount', 'WelcomeController@amount');

// Route::get('/debugbar', function () {

//     $data = ['foo' => 'bar'];
//     Debugbar::info($data);
//     Debugbar::info('Current environment: '.App::environment());
//     Debugbar::error('Error!');
//     Debugbar::warning('Watch out…');
//     Debugbar::addMessage('Another message', 'mylabel');

//     return 'Just demoing some of the features of Debugbar';
// });
