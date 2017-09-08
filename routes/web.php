<?php
use App\Task;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', function () {
	
    return view('form', ['toto'=>Task::all()]);
});

Route::post('/koko', 'TachesController@lolo');

Route::delete('/delete/{id}', 'TachesController@delete');

Route::put('/modif/{id}', 'TachesController@updateTask');