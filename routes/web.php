<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\NewsController;
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
Route::get('/hello', function () {
    return "Hello world!";
});
// url with parameter

/* 
use Illuminate\Http\Request;

is required
*/
Route::get('/user/{id}', function (Request $request) {
    return $request->id;
});

Auth::routes();
Route::resource('news', NewsController::class);
// Route::middleware(['auth'])->group(function () {
//     Route::prefix('admin')->group(function () {
//         Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
//     });
// });