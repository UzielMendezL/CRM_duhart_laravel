<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPassword;
use App\Http\Controllers\Auth\ChangePassword;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MaterialsController;
use App\Http\Controllers\EntryController;
use App\Http\Controllers\DeparturesController;

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
	return redirect('/landing');
})->middleware('auth');
Route::get('redirect', function () {
    alert()->info('Exito','try');
    return redirect('/');
});

Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');

Route::get('/register', [RegisterController::class, 'show'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->middleware('guest')->name('register.perform');

Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');

Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/user-profile', [ProfileController::class, 'show'])->name('user-profile');
    Route::post('/user-profile', [ProfileController::class, 'update'])->name('user-profile.perform');

    Route::controller(UserController::class)->group(function() {
        Route::get('/user-management', 'index')->name('user-management');
        Route::get('/user-management/new', 'create')->name('user-new');
        Route::post('/user-management/new', 'store')->name('user-new.store');
        Route::get('/user-management/edit/{id}', 'edit')->name('user-edit');
        Route::post('/user-management/edit/{id}', 'update')->name('user-edit.update');
        Route::post('/user-delete/{id}', 'destroy')->name('user-destroy');
    });

    Route::controller(RoleController::class)->group(function() {
        Route::get('/role-management', 'index')->name('role-management');
        Route::get('/role-management/new', 'create')->name('role-new');
        Route::post('/role-management/new', 'store')->name('role-new.store');
        Route::get('/role-management/edit/{id}', 'edit')->name('role-edit');
        Route::post('/role-management/edit/{id}', 'update')->name('role-edit.update');
        Route::post('/role-delete/{id}', 'destroy')->name('role-destroy');
    });

    Route::controller(CategoryController::class)->group(function() {
        Route::get('/category-management', 'index')->name('category-management');
        Route::get('/category-management/new', 'create')->name('category-new');
        Route::post('/category-management/new', 'store')->name('category-new.store');
        Route::get('/category-management/edit/{id}', 'edit')->name('category-edit');
        Route::post('/category-management/edit/{id}', 'update')->name('category-edit.update');
        Route::post('/category-delete/{id}', 'destroy')->name('category-destroy');
    });

    Route::controller(TagController::class)->group(function() {
        Route::get('/tag-management', 'index')->name('tag-management');
        Route::get('/tag-management/new', 'create')->name('tag-new');
        Route::post('/tag-management/new', 'store')->name('tag-new.store');
        Route::get('/tag-management/edit/{id}', 'edit')->name('tag-edit');
        Route::post('/tag-management/edit/{id}', 'update')->name('tag-edit.update');
        Route::post('/tag-delete/{id}', 'destroy')->name('tag-destroy');
    });

    Route::controller(ItemController::class)->group(function() {
        Route::get('/item-management', 'index')->name('item-management');
        Route::get('/item-management/new', 'create')->name('item-new');
        Route::post('/item-management/new', 'store')->name('item-new.store');
        Route::get('/item-management/edit/{id}', 'edit')->name('item-edit');
        Route::post('/item-management/edit/{id}', 'update')->name('item-edit.update');
        Route::post('/item-delete/{id}', 'destroy')->name('item-destroy');
    });

    //Inventory
    Route::controller(MaterialsController::class)->group(function() {
        
        //StockReal
        Route::get('/inventory/stock-real', 'stockReal')->name('material-stock-real-management');
        //StockMinimum
        Route::get('/inventory/stock-minimum', 'requireMaterial')->name('material-stock-minimum-management');
        
        Route::get('/inventory', 'index')->name('material-management');
        Route::get('/inventory/new-material', 'create')->name('material-new');
        Route::post('/inventory/new-material', 'store')->name('material-new.store');
        Route::get('/inventory/material/edit/{id}', 'edit')->name('material-edit');
        Route::put('/inventory/material-update/edit/{id}', 'update')->name('material-edit.update');
        Route::delete('/inventory/material-delete/{id}', 'destroy')->name('material.destroy');
    });

    Route::controller(DeparturesController::class)->group(function() {

        Route::get('/inventory/departure', 'index')->name('material-departure-management');
        // Route::get('/inventory/new-departure', 'create')1->name('departure-new');
        Route::post('/inventory/new-departure', 'store')->name('departure-new.store');
        Route::get('/inventory/departure/edit/{id}', 'edit')->name('departure-edit');
        Route::post('/inventory/departure/search','search')->name('departure.search');
        Route::get('/inventory/departure/search-estimation-{id}','searchEstimation')->name('departure.search-estimation');
        // Route::post('/inventory/departure-update/edit/{id}', 'update')->name('departure-edit.update');
        // Route::post('/inventory/departure-delete/{id}', 'destroy')->name('departure-destroy');
    });
    Route::controller(EntryController::class)->group(function() {
                
        Route::get('/inventory/entry', 'index')->name('material-entry-management');
        //Route::get('/inventory/new-entry', 'create')->name('entry-new');
         Route::post('/inventory/new-entry', 'store')->name('entry-new.store');
         Route::get('/inventory/entry/edit/{id}', 'edit')->name('entry-edit');
        // Route::post('/inventory/entry-update/edit/{id}', 'update')->name('entry-edit.update');
        // Route::post('/inventory/entry-delete/{id}', 'destroy')->name('entry-destroy');
    });

    Route::get('/{page}', [PageController::class, 'dashboards'])->name('dashboards');

    Route::get('/pages/profile/{page}', [PageController::class, 'profiles'])->name('profiles');

    Route::get('/pages/user/{page}', [PageController::class, 'users'])->name('users');

    Route::get('/pages/account/{page}', [PageController::class, 'accounts'])->name('accounts');

    Route::get('/pages/project/{page}', [PageController::class, 'projects'])->name('projects');

    Route::get('/pages/{page}', [PageController::class, 'pages'])->name('pages');

    Route::get('/applications/{page}', [PageController::class, 'applications'])->name('applications');

    Route::get('/ecommerce/products/{page}', [PageController::class, 'products'])->name('products');

    Route::get('/ecommerce/orders/{page}', [PageController::class, 'orders'])->name('orders');

    Route::get('/ecommerce/{page}', [PageController::class, 'ecommerce'])->name('ecommerce');

    Route::get('/authentication/sign-in/{page}', [PageController::class, 'signins'])->name('signins');

    Route::get('/authentication/sign-up/{page}', [PageController::class, 'signups'])->name('signups');

    Route::get('/authentication/reset-password/{page}', [PageController::class, 'resets'])->name('resets');

    Route::get('/authentication/lock/{page}', [PageController::class, 'locks'])->name('locks');

    Route::get('/authentication/verification/{page}', [PageController::class, 'verifications'])->name('verifications');

    Route::get('/authentication/errors/{page}', [PageController::class, 'errors'])->name('errors');

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});
