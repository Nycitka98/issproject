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
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/sklad', 'App\Http\Controllers\PagesController@sklad');
Route::get('/zamestnanci', 'App\Http\Controllers\PagesController@zamestnanci');
Route::get('/ekonomika', 'App\Http\Controllers\PagesController@ekonomika');


Route::resource('sklad', 'App\Http\Controllers\SkladController');
Route::resource('zamestnanci', 'App\Http\Controllers\ZamestnanciController');
Route::resource('ekonomika', 'App\Http\Controllers\EkonomikaController');
Route::resource('medzisklad', 'App\Http\Controllers\MedziskladController');
Route::resource('vydajsklad', 'App\Http\Controllers\VydajskladController');
Route::resource('zoskladudovyrobysklad', 'App\Http\Controllers\ZoskladudovyrobyController');

