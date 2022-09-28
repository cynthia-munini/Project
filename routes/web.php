<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/about_us', function () {
    return view('about');
});
 Route::get('/projects_done', function () {
    return view('projects');
});
Route::get('/login_page', function () {
    return view('login');
});
Route::get('/register_here', function () {
    return view('register');
});
Route::get('/Github_here', function () {
    return view('github');
});
Route::get('/user_page', function () {
    return view('users');
});