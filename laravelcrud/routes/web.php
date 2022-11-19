<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\crudcontroller;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',[crudcontroller::class,'view']);
Route::get('/add',[crudcontroller::class,'add']);
Route::post('/store-data',[crudcontroller::class,'storeData']);
Route::get('/edit-data/{id}',[crudcontroller::class,'editView']);
Route::post('/update-data/{id}',[crudcontroller::class,'editData']);
Route::get('/delete-data/{id}',[crudcontroller::class,'deleteData']);




