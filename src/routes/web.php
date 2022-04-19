<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('ViewPersons', [App\Http\Controllers\PersonsController::class, 'index'])->name('viewPersons');
Route::get('ViewAddress', [App\Http\Controllers\AddressController::class, 'index'])->name('viewAddress');
Route::get('DetailPersons/{id}', [App\Http\Controllers\DetailPersonsController::class, 'detail'])->name('detailPersons');

Route::post('add', [App\Http\Controllers\PersonsController::class, 'add'])->name('add');
Route::get('delete/{id}', [DetailPersonsController::class, 'delete'])->name('delete');

Route::prefix('item')->group(function () {
    Route::get('/test', [App\Http\Controllers\ItemController::class, 'test'])->name('test.token');
    Route::get('/index', [App\Http\Controllers\ItemController::class, 'index'])->name('item.index');
    Route::get('/detail', [App\Http\Controllers\ItemController::class, 'detail'])->name('item.detail');
    Route::post('/update', [App\Http\Controllers\ItemController::class, 'update'])->name('item.update');
    Route::get('/upload/image', [App\Http\Controllers\ItemController::class, 'getUploadImage'])->name('item.get.image.upload');
    Route::post('/upload', [App\Http\Controllers\ItemController::class, 'postUploadImage'])->name('item.post.image.upload');
});
