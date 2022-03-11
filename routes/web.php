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



Auth::routes();
Route::get('/admin1', function () {
    return view('admin.layouts.Dashboard.home');
})->name('admin');
Route::middleware(['auth'])->group(function () {
    Route::get('/admin1', function () {
    return view('admin.layouts.Dashboard.home');
})->name('admin');
// Route::resource('category/create', CategoryController::class);
// Route::resource('category/store', CategoryController::class);
//  Route::resource('category', CategoryController::class);
//   Route::resource('category/{$id}', CategoryController::class);
//   Route::resource('category/{$id}/edit', CategoryController::class);
//   Route::resource('category/{$id}', CategoryController::class);
//   Route::resource('product/create', ProductController::class);
//   Route::resource('product', ProductController::class);
// //  Route::get('category list', [CategoryController::class,'index'])->name('category.index');
Route::resources([
    'category' => CategoryController::class,
    'product' => ProductController::class,
]);

 Route::get('/home', [HomeController::class, 'index'])->name('home');


});
