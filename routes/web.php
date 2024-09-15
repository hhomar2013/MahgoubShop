<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Admin\AdminAddCategoryComponent;
use App\Http\Livewire\Admin\AdminCategoriesComponent;
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
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\WishListComponent;
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
            Route::get('/user/account',UserProfileComponent::class)->name('user.account');
        });

        Route::middleware(['authAdmin'])->group(function(){

            Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('Admin.dashboard');
            Route::get('/admin/categories',AdminCategoriesComponent::class)->name('Admin.categories');
            Route::get('/admin/categories/create',AdminAddCategoryComponent::class)->name('Admin.categories.create');
        });

        Route::get('/',HomeComponent::class)->name('home');
        Route::get('/shop',ShopComponent::class)->name('shop');
        Route::get('/wishlist',WishListComponent::class)->name('shop.wishlist');
        Route::get('/checkout',CheckoutComponent::class)->name('checkout');
        Route::get('/product/{slug}',DetailsComponent::class)->name('product.details');
        Route::get('/product-category/{slug}',CategoryComponent::class)->name('product.category');
        Route::get('/cart',CartComponent::class)->name('shop.cart')->middleware('auth');
        Route::get('/logout',LogoutComponent::class)->name('logout');
    });
