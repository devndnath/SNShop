<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Frontend\CouponController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\FrontendController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/',[FrontendController::class, 'index'])->name('frontend.index');
Route::get('/shop',[ShopController::class, 'shop'])->name('frontend.shop');
Route::get('/coupon',[CouponController::class, 'coupon'])->name('frontend.coupon');
Route::get('/contact',[ContactController::class, 'index'])->name('frontend.contact');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');


});