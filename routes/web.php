<?php
use Illuminate\Support\Facades\Route;
use App\Http\controllers\Productcontroller;
use App\Models\product;
use App\Models\catagory;
use Illuminate\Support\Facades\Auth;
use App\Http\controllers\CatagoryController;
;
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

Auth::routes();
Route::get('/product/register', [ProductController::class, 'register'])->name('product/register');
Route::post('/product/register', [ProductController::class, 'store'])->name('product/register');
Route::get('/catagory/register', [CatagoryController::class, 'register'])->name('catagory/register');
Route::post('/catagory/register', [CatagoryController::class, 'store'])->name('catagory/register');

Route::get('/home', [App\Http\controllers\HomeControllers ::class, 'index'])->name('home');

Route::get('/product/list', [ProductController::class, 'get_all'])->name('product/list');
Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
Route::post('/product/update',[ProductController::class,'update'])->name('product/update');
Route::get('/product/delete/{id}', [ProductController::class, 'delete']);
Route::get('/product/search/{id}', [ProductController::class, 'search'])->name('catagory/search');
Route::get('/catagory/list', [CatagoryController::class, 'get_all'])->name('catagory/list');
Route::get('/catagory/edit/{id}', [CatagoryController::class, 'edit']);
Route::post('/catagory/update',[CatagoryController::class,'update'])->name('catagory/update');
Route::get('/catagory/delete/{id}', [CatagoryController::class, 'delete']);
Route::get('/catagory/search/{id}', [CatagoryController::class, 'search'])->name('catagory/search');





