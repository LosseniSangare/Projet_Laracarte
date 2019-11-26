<?php
use App\Mail\ContactMessageCreated;
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

// Route::name('home_path')->get('/', 'pageController@home');
// Route::name("about_path")->get('/about','pageController@about');

Route::view('/','pages.home')->name('home');

Route::view('/about_path','pages.about')->name('about');

Route::get('/contact','contactsController@create')->name('contact.create');

Route::post('/contact','contactsController@store')->name('contact.store');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
