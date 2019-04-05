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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@index')->name('users');
Route::post('/register/create', 'UsersController@store')->name('register.user');

Route::get('/announcements', 'AnnouncementsController@index')->name('announcements');
Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::get('/projects', 'ProjectsController@index')->name('projects');
Route::get('/training-evaluations-summary', 'SummaryController@indexTraining')->name('training.summary');
Route::get('/resource-evaluations-summary', 'SummaryController@indexResource')->name('resource.summary');
