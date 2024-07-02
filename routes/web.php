<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/', 'pages/main')->name('main');
Route::view('/about', 'pages/about')->name('about');
Route::view('/contacts', 'pages/contacts')->name('contacts');
Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'sendMessage']);
Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'index'])->name('catalog');
Route::view('/delivery', 'pages/delivery')->name('delivery');
Route::get('/tovar/{id}', [\App\Http\Controllers\TovarController::class, 'index'])->name('tovar');
Route::get('/tovars/{id}', [\App\Http\Controllers\TovarController::class, 'showTovars'])->name('tovars');

Route::get('/alltovars', [\App\Http\Controllers\TovarController::class, 'allTovars']);

Route::get('/cart',  [\App\Http\Controllers\CartController::class, 'index'])->name('cart');
Route::post('/cart/{id}', [\App\Http\Controllers\CartController::class, 'addItem'])->name('addItem');
Route::delete('/cart/{id}', [\App\Http\Controllers\CartController::class, 'deleteItem'])->name('deleteItem');
Route::put('/cart/{id}', [\App\Http\Controllers\CartController::class, 'redactItem'])->name('redactItem');

Route::delete('/deleteCart', [\App\Http\Controllers\CartController::class, 'deleteCart'])->name('deleteCart');

Route::view('/login', 'pages/login')->name('login');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'login']);

Route::view('/signup', 'pages/signup')->name('signup');
Route::post('/signup', [\App\Http\Controllers\UserController::class, 'signup']);

Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index']);
Route::post('/order', [\App\Http\Controllers\OrderController::class, 'create']);

Route::get('/search', [\App\Http\Controllers\SearchController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/profile', [\App\Http\Controllers\UserController::class, 'profile']);
    Route::get('/history', [\App\Http\Controllers\HistoryController::class, 'index']);
    Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout']);
});

Route::get('/download/kzpo_catalog', function () {
    $filePath = public_path('uploads/kzpo_catalog.xlsx');

    if (!File::exists($filePath)) {
        abort(404);
    }

    return response()->download($filePath);
});

