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
    return view('pages.home');
});

Route::get('/chat', function() {
  return view('pages.chat');
})->middleware('auth');

Auth::routes();

Route::get('/messages', function(){
  return App\Message::with('user')->get();
})->middleware('auth');

Route::post('/messages', function(){
  //store new messages
  $user = Auth::user();

  $user->messages()->create([
       'message' => request()->get('message')
   ]);

  return ['status' => 'OK'];

})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
