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
Route::get('/',function (){
    return view('welcome');
});
Route::get('/','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');



Route::resource('/projects','ProjectsController');
//Route::get('/projects','ProjectsController@index');
//Route::post('/projects','ProjectsController@store');
//Route::get('/projects/create','ProjectsController@create');
//Route::get('/projects/{projects}/edit','ProjectsController@edit');
//Route::patch('/projects/{projects}','ProjectsController@update');
//Route::get('/projects/{projects}','ProjectsController@show');
//Route::delete('/projects/{projects}','ProjectsController@destroy');