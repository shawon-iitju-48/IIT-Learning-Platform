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

function set_active($route)
{
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signup', 'App\Http\Controllers\LoginSignupForm@signup');
Route::post('/signup/data', 'App\Http\Controllers\LoginSignupForm@insert');

Route::get('/login', 'App\Http\Controllers\LoginSignupForm@login');
Route::post('/login/verify', 'App\Http\Controllers\LoginSignupForm@VerifyLogin');

Route::get('/logout', 'App\Http\Controllers\LoginSignupForm@logout');

Route::get('/home', 'App\Http\Controllers\Management@home')->middleware('loginauth');
Route::get('/profile', 'App\Http\Controllers\Management@profile')->middleware('loginauth');

Route::get('/courses', function () {
    return view('classroom');
})->middleware('loginauth');

Route::prefix('/course-task')->group(function () {
    Route::get('/', function () {
        return view('discussion');
    })->middleware('loginauth');
    Route::get('exam', function () {
        return view('exam');
    })->middleware('loginauth');
});

Route::post('/profile/data', 'App\Http\Controllers\QueryManagement@updateprofile')->middleware('loginauth');
