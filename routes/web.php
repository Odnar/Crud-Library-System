<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\BorrowedController;
use App\Http\Controllers\ReturnController;

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

//// Book Controller ///// 

Route::get('/', 'BooksController@index');
 
Route::get('/', 'BooksController@getbooks');

route::get('/searchbooks','BooksController@searchbooks');
 
Route::post('/savebooks', 'BooksController@savebooks');
 
Route::patch('/update/{id}', ['as' => 'books.update', 'uses' => 'BooksController@update']);
 
Route::delete('/delete/{id}', ['as' => 'books.delete', 'uses' => 'BooksController@delete']);

///// Borrowed Controller /////

route::get('/borrowed','BorrowedController@getborrowed');

route::get('/show','BorrowedController@index');



Route::patch('/borrowed/{id}', ['as' => 'borrowed.save', 'uses' => 'BorrowedController@saveborrowed']);
 
Route::patch('/updateborrowed/{id}', ['as' => 'borrowed.update', 'uses' => 'BorrowedController@updateborrowed']);
 
Route::delete('/deleteborrowed/{id}', ['as' => 'borrowed.delete', 'uses' => 'BorrowedController@deleteborrowed']);


///// Return Controller /////

route::get('/borrowedbooks','ReturnController@getbooksborrowed');

route::get('/returnbooks','ReturnController@getbooksreturn');

Route::delete('/deletereturn/{id}', ['as' => 'return.delete', 'uses' => 'ReturnController@deletereturn']);

Route::delete('/deletereturned/{id}', ['as' => 'return.delete', 'uses' => 'ReturnController@deletereturned']);

Route::patch('/updatereturn/{id}', ['as' => 'return.update', 'uses' => 'ReturnController@updatereturn']);

Route::patch('/updateborrowed/{id}', ['as' => 'return.returnupdate', 'uses' => 'ReturnController@updateborrowed']);

route::get('/searchreturn','ReturnController@searchreturn');
