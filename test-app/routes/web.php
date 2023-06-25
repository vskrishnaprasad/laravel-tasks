<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TestController::class, 'index']);
Route::get('/new-user', [TestController::class, 'index'])->name('index');
Route::get('/new-user/create', [TestController::class, 'create'])->name('create');
Route::post('/new-user', [TestController::class, 'store'])->name('store');
Route::get('/edit-user/{Id}', [TestController::class, 'edit'])->name('edit');
Route::put('/update-user/{id}', [TestController::class, 'update'])->name('update');
Route::get('/delete-user/{id}', [TestController::class, 'distroy'])->name('distroy');
