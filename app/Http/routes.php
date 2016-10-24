<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Resursna ruta za StudentController
|--------------------------------------------------------------------------
| Rute potrebne za manipulaciju sa ucenicima
*/

//Rura sa ya manipulaciju sa u;enicima
Route::resource('student', 'StudentController');

//Rura sa ya manipulaciju sa predmetima
Route::resource('subject', 'SubjectController');


//Ovde prikazujemo kompletne informacije o članu
Route::get('/student/odeljenje/{id}', array( 
	'as' 	=> 'student.odeljenje',
	'uses'	=> 'StudentController@GetUcenikOdeljenje'
));




//Ruta ya manipulaciju sa odeljenjima
Route::resource('department', 'DepartmentController');

Route::auth();
//Route::get('/home', 'HomeController@index');
