<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\IssuedBooksController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ReturnedBooksController;
use App\Models\IssuedBook;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Route::resource('books','BooksController');

//Route::get('/create',[BooksController::class,'create'])->name('books.create');


Route::post('/issueBookSubmit', 'BooksIssuedController@index');
Route::get('/login',[AuthController::class,'showFormLogin'])->name('showFormLogin');
Route::post('/login',[AuthController::class,'login'])->name('admin.login');
Route::get('/booksList',[BooksController::class,'index'])->name('books.index');
Route::get('/addBooks', [BooksController::class,'create'])->name('books.create');
Route::post('/addBooks', [BooksController::class,'store'])->name('books.store');

Route::resource('cats','CategoriesController');

Route::get('/categoriesList',[CategoriesController::class,'index'])->name('cats.index');
Route::get('/addCategories', [CategoriesController::class,'create'])->name('cats.create');
Route::post('/addCategories', [CategoriesController::class,'store'])->name('cats.store');

Route::resource('iss','IssuedBooksController');
Route::get('/issuedBooks',[IssuedBooksController::class,'index'])->name('iss.index');
Route::post('/issueBooks', [IssuedBooksController::class,'store'])->name('iss.store');
Route::get('/issueBooks', [IssuedBooksController::class,'create'])->name('iss.create');

Route::resource('mems','MembersController');

Route::get('/membersList',[MembersController::class,'index'])->name('mems.index');
Route::get('/addMembers', [MembersController::class,'create'])->name('mems.create');
Route::post('/addMembers', [MembersController::class,'store'])->name('mems.store');

Route::resource('ret','ReturnedBooksController');
Route::get('/returnBooks', [ReturnedBooksController::class,'create'])->name('ret.create');
Route::post('/returnBooks',[ReturnedBooksController::class,'store'])->name('ret.store');



//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/main', function () {
    return view('layouts.sidebar');
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
