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

Route::get('/', 'HomePageController@index')->name('home');
Route::get('events', 'EventsController@index')->name('events.index');
Route::get('events/{event:slug}', 'EventsController@show')->name('events.show');
Route::get('posts/{post:slug}', 'PostsController@show')->name('posts.show');

Route::get('/home', function () {
    $routeName = auth()->user()->is_blog_writer ? 'admin.posts.index' : 'admin.events.index';

    if (session('status')) {
        return redirect()->route($routeName)->with('status', session('status'));
    }

    return redirect()->route($routeName);
});
Auth::routes();

