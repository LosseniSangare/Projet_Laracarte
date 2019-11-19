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

Route::name('home_path')->get('/', 'pageController@home');

Route::name("about_path")->get('/about','pageController@about');

Route::name('contact_path')->get('/contact','contactsController@create');

Route::name('contact_path')->post('/contact','contactsController@store');

route::get('/test-mail',function(){
  return new ContactMessageCreated('LOSSENI','loss.sangare24@gmail.com','essayons avec laravel');
});
