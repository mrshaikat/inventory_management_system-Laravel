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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
     return view('welcome');
});

//Frontend load
Route::get('main', 'App\Http\Controllers\FrontEndController@showHome') -> name('home.show');
Route::get('blog', 'App\Http\Controllers\FrontEndController@showBlog') -> name('blog.show');
Route::get('contact', 'App\Http\Controllers\FrontEndController@showContact') -> name('contact.show');
Route::get('about', 'App\Http\Controllers\FrontEndController@showAbout') -> name('about.show');
Route::get('cart', 'App\Http\Controllers\FrontEndController@showCart') -> name('cart.show');

// Admin load

Route::get('show-employee', 'App\Http\Controllers\EmployeeController@showEmployee') -> name('show.employee');
Route::get('add-employee', 'App\Http\Controllers\EmployeeController@create') -> name('add.employee');
Route::post('insert-employee', 'App\Http\Controllers\EmployeeController@store');
Route::get('single-employee/{id}', 'App\Http\Controllers\EmployeeController@viewSingle') -> name('single.employee');



Route::delete('delete-employee/{id}', 'App\Http\Controllers\EmployeeController@destroy') -> name('destroy.employee');

Route::get('edit-employee/{id}', 'App\Http\Controllers\EmployeeController@edit') -> name('edit.employee');

Route::put('update-employee/{id}', 'App\Http\Controllers\EmployeeController@update') -> name('update.employee');
