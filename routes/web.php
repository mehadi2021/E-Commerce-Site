<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin1', function () {
    return view('admin.layouts.Dashboard.home');
});
Route::resource('category', CategoryController::class);
Auth::routes();

 Route::get('/home', [HomeController::class, 'index'])->name('home');
