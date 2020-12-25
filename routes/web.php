<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\PaySalaryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\AttdanceController;
use App\Http\Controllers\SettingController;

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


//Employee routes here
Route::get('show-employee', 'App\Http\Controllers\EmployeeController@showEmployee') -> name('show.employee');
Route::get('add-employee', 'App\Http\Controllers\EmployeeController@create') -> name('add.employee');
Route::post('insert-employee', 'App\Http\Controllers\EmployeeController@store');
Route::get('single-employee/{id}', 'App\Http\Controllers\EmployeeController@viewSingle') -> name('single.employee');

Route::delete('delete-employee/{id}', 'App\Http\Controllers\EmployeeController@destroy') -> name('destroy.employee');
Route::get('edit-employee/{id}', 'App\Http\Controllers\EmployeeController@edit') -> name('edit.employee');
Route::put('update-employee/{id}', 'App\Http\Controllers\EmployeeController@update') -> name('update.employee');

//Customer routes
Route::resource('customer', CustomerController::class);

//supplier Route
Route::resource('supplier', SupplierController::class);

//Salary Route
Route::resource('salary', SalaryController::class);
//Pay Salary Route
Route::resource('pay_salary', PaySalaryController::class);

//Category Route
Route::resource('category', CategoryController::class);

//Product Route
Route::resource('product', ProductController::class);

//Expense Route
Route::resource('expense', ExpenseController::class);

//Today expense
Route::get('today-expense', 'App\Http\Controllers\ExpenseController@TodayExpense') -> name('today.expense');

//Monthly Expense
Route::get('monthly-expense', 'App\Http\Controllers\ExpenseController@MonthlyExpense') -> name('monthly.expense');
//Yearly Expense
Route::get('yearly-expense', 'App\Http\Controllers\ExpenseController@YearlyExpense') -> name('yearly.expense');

//January Expense Route
Route::get('january-expense', 'App\Http\Controllers\ExpenseController@JanuaryExpense') -> name('january.expense');

//February Expense Route
Route::get('february-expense', 'App\Http\Controllers\ExpenseController@FebruaryExpense') -> name('february.expense');

//March Expense Route
Route::get('march-expense', 'App\Http\Controllers\ExpenseController@MarchExpense') -> name('march.expense');

//April Expense Route
Route::get('april-expense', 'App\Http\Controllers\ExpenseController@AprilExpense') -> name('april.expense');

//May Expense Route
Route::get('may-expense', 'App\Http\Controllers\ExpenseController@MayExpense') -> name('may.expense');

//June Expense Route
Route::get('june-expense', 'App\Http\Controllers\ExpenseController@JuneExpense') -> name('june.expense');

//July Expense Route
Route::get('july-expense', 'App\Http\Controllers\ExpenseController@JulyExpense') -> name('july.expense');

//August Expense Route
Route::get('august-expense', 'App\Http\Controllers\ExpenseController@AugustExpense') -> name('august.expense');

//September Expense Route
Route::get('september-expense', 'App\Http\Controllers\ExpenseController@SeptemberExpense') -> name('september.expense');

//October Expense Route
Route::get('october-expense', 'App\Http\Controllers\ExpenseController@OctoberExpense') -> name('october.expense');

//November Expense Route
Route::get('noverber-expense', 'App\Http\Controllers\ExpenseController@NoverberExpense') -> name('noverber.expense');

//December Expense Route
Route::get('december-expense', 'App\Http\Controllers\ExpenseController@DecemberExpense') -> name('december.expense');

//Attdance Route

Route::resource('attendence', 'App\Http\Controllers\AttdanceController');

//Setting Route
Route::get('setting', 'App\Http\Controllers\SettingController@Setting') -> name('setting.create');
Route::put('setting-update/{id}', 'App\Http\Controllers\SettingController@Update') -> name('setting.update');

//Elcel Import and export

Route::get('import-product', 'App\Http\Controllers\ProductController@ImportProduct') -> name('import.product');
Route::get('export', 'App\Http\Controllers\ProductController@export') -> name('export');
Route::post('import', 'App\Http\Controllers\ProductController@import') -> name('import');



//Pos ROutes

Route::get('pos', 'App\Http\Controllers\PosController@index') -> name('pos');

//Cart Route here

Route::post('add-cart', 'App\Http\Controllers\CartController@index') -> name('cart.add');
Route::post('update-cart/{rowId}', 'App\Http\Controllers\CartController@update') -> name('cart.update');
Route::get('remove-cart/{rowId}', 'App\Http\Controllers\CartController@destroy') -> name('cart.remove');
Route::post('create-invoice', 'App\Http\Controllers\CartController@CreateInvoice') -> name('invoice.create');
Route::post('final-invoice', 'App\Http\Controllers\CartController@finalInvoice') -> name('invoice.final');




