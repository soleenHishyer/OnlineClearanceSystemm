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
Route::get('/get_stud','App\Http\Controllers\SyetemApiController@get_student');
Route::get('/get_library','App\Http\Controllers\SyetemApiController@get_library');
Route::get('/get_dorm','App\Http\Controllers\SyetemApiController@get_dorms');
#Route::get('get_stud','SyetemApiController@get_student');

Route::get('/make','App\Http\Controllers\SyetemApiController@testrequest');

