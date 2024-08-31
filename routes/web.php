<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Auth\LoginComponent;
use App\Http\Livewire\Auth\LogoutComponent;
use App\Http\Livewire\Auth\RegisterComponent;
use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CategoryComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\DetailsComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ShopComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

        // Auth::routes();
        Route::middleware(['guest'])->group(function(){
            Route::get('/login',LoginComponent::class)->name('login');
            Route::get('/register',RegisterComponent::class)->name('register');
        });

        Route::middleware(['auth'])->group(function(){
            Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
        });

        Route::middleware(['authAdmin'])->group(function(){
            Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('Admin.dashboard');
        });

        Route::get('/',HomeComponent::class)->name('home');
        Route::get('/shop',ShopComponent::class)->name('shop');
        Route::get('/cart',CartComponent::class)->name('shop.cart');
        Route::get('/checkout',CheckoutComponent::class)->name('checkout');
        Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
        Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');
        Route::get('/logout',LogoutComponent::class)->name('logout');
    });
