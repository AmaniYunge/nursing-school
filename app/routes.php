<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return View::make('home');
});

Route::get('about', function()
{
    return View::make('about');
});

Route::get('menu', function()
{
    return View::make('menu');
});

Route::get('gallery', function()
{
    return View::make('gallery');
});

Route::get('blog', function()
{
    return View::make('blog');
});



Route::get('project', function()
{
    return View::make('project');
});
Route::get('contact', function()
{
    return View::make('contact');
});