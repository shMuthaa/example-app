<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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
    return view('index');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/process_signup', function () {
    return view('process_signup');
});
Route::get('/', function () {
    return view('');
});
Route::get('/', function () {
    return view('');
});

Route::get('/process_signup', [Controller::class, 'create']);
