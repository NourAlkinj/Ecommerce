<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view("/login", "login");

Route::view('/register', 'register');

Route::post('/login', [UserController::class, 'login']);

Route::post('/register', [UserController::class, 'register']);

Route::get('/', [ProductController::class, 'index']);

Route::get('detail/{id}', [ProductController::class, 'detail']);

Route::get('search', [ProductController::class, 'search']);

Route::post('/add_to_cart', [ProductController::class, 'addToCart']);

Route::get('cart_list', [ProductController::class, 'cartList']);

Route::get('remove_cart/{id}', [ProductController::class, 'removeCart']);

Route::get('order_now', [ProductController::class, 'orderNow']);

Route::post('order_place', [ProductController::class, 'orderPlace']);

Route::get('my_order', [ProductController::class, 'myOrder']);


Route::group(['namespace' => 'Product', 'prefix' => 'product'], function () {
    Route::post('storeProduct', [ProductController::class, 'storeProduct'])->name('product.storeProduct');
    Route::get('deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('product.deleteProduct');
});

Route::group(['namespace' => 'User', 'prefix' => 'user'], function () {
    Route::post('storeUser', [UserController::class, 'storeUser'])->name('user.storeUser');
    Route::get('deleteUser/{id}', [UserController::class, 'deleteUser'])->name('user.deleteUser');
});
