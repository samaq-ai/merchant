<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

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


Route::get('/c-panel', function () {
    return view('apps.index');
});


Route::get('/manifest0', function () {
    return view('manifest.index');
});


Route::get('/manifest1', [
    'uses' => '\samadev\Http\Controllers\ManifestController@See',
'as' => 'manifest.index',
]);



Route::get('/user/profile', [
    'uses' => '\samadev\Http\Controllers\UserController@showProfile',
'as' => 'user.profile',
]);



Route::get('/cache', function () {
    return Cache::get('session');
});
