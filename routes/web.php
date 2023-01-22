<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\App_ContentsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SuppliersController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
//Route::get('home', [HomeController::class, 'index']);


Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('dashboard');
});

//dashboard
//Route::get('dashboard', [DashboardController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'

])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.main-dashboard');
    })->name('dashboard');
//    ->middleware('verified')

//sliders
Route::controller(SliderController::class)->group(function () {
    Route::prefix('dashboard/slider')->group(function () {
        Route::get('/', 'index')->name('dashboard.slider');
        Route::get('create', 'create');
        Route::post('/',  'store');
        Route::get('{id}/edit',  'edit')->name('dashboard.slider.edit');
        Route::put('{id}',  'update');
        Route::delete('{id}',  'destroy');
        Route::get('deleteImage/{id}', 'deleteImage');
        Route::get('deleteItem', 'deleteicon');
        Route::get('/status-update/{id}', 'status_update');
    });
});

//categories
Route::controller(CategoriesController::class)->group(function () {
    Route::prefix('dashboard/categories')->group(function () {
        Route::get('/', 'index')->name('dashboard.categories');
        Route::get('create', 'create')->name('dashboard.categories.create');
        Route::post('/',  'store')->name('dashboard.categories');
        Route::get('{id}/edit',  'edit')->name('dashboard.categories.edit');
        Route::put('{id}',  'update');
        Route::delete('{id}',  'destroy');
        Route::get('deleteImage/{id}', 'deleteImage');
        Route::get('deleteItem', 'deleteicon');
        Route::get('/status-update/{id}', 'status_update');
        //  Route::get('{id}', 'confirmddelete');
    });
});

//products
Route::controller(ProductsController::class)->group(function () {
    Route::prefix('dashboard/products')->group(function () {
        Route::get('/', 'index')->name('dashboard.products');
        Route::get('create', 'create');
        Route::post('/',  'store');
        Route::get('{id}/edit',  'edit')->name('dashboard.products.edit');
        Route::put('{id}',  'update');
        Route::delete('{id}',  'destroy');
        Route::get('deleteImage/{id}', 'deleteImage');
        Route::get('deleteItem', 'deleteicon')->name('dashboard.products.delete');
        Route::get('/status-update/{id}', 'status_update');
    });
});

//suppliers
Route::controller(SuppliersController::class)->group(function () {
    Route::prefix('dashboard/suppliers')->group(function () {
        Route::get('/', 'index')->name('dashboard.suppliers');
        Route::get('create', 'create');
        Route::post('/',  'store');
        Route::get('{id}/edit',  'edit')->name('dashboard.suppliers.edit');
        Route::put('{id}',  'update');
        Route::delete('{id}',  'destroy');
        Route::get('deleteImage/{id}', 'deleteImage');
        Route::get('deleteItem', 'deleteicon');
        Route::get('/status-update/{id}', 'status_update');
    });
});

//app contents
Route::controller(App_ContentsController::class)->group(function () {
    Route::prefix('dashboard/app-contents')->group(function () {
        Route::get('/', 'index')->name('dashboard.app-contents');
        Route::get('create', 'create');
        Route::post('/',  'store');
        Route::get('{id}/edit',  'edit')->name('dashboard.app-contents.edit');
        Route::put('{id}',  'update');
        Route::delete('{id}',  'destroy');
        Route::get('deleteImage/{id}', 'deleteImage');
        Route::get('deleteItem', 'deleteicon');
        Route::get('/status-update/{id}', 'status_update');
    });
});

//colors
Route::controller(ColorsController::class)->group(function () {
    Route::prefix('dashboard/colors')->group(function () {
        Route::get('/', 'index')->name('dashboard.colors');
        Route::get('create', 'create');
        Route::post('/',  'store');
        Route::get('{id}/edit',  'edit')->name('dashboard.colors.edit');
        Route::put('{id}',  'update');
        Route::delete('{id}',  'destroy');
        Route::get('deleteImage/{id}', 'deleteImage');
        Route::get('deleteItem', 'deleteicon');
        Route::get('/status-update/{id}', 'status_update');
    });
});

//admins
Route::controller(AdminsController::class)->group(function () {
    Route::prefix('dashboard/admins')->group(function () {
        Route::get('/', 'index')->name('dashboard.admins');
        Route::get('create', 'create');
        Route::post('/', 'store');
        Route::get('{id}/edit', 'edit')->name('dashboard.admins.edit');
        Route::put('{id}', 'update');
        Route::delete('{id}', 'destroy');
        Route::get('deleteImage/{id}', 'deleteImage');
        Route::get('deleteItem', 'deleteicon')->name('dashboard.admins.deleteItem');
        Route::get('/status-update/{id}', 'status_update');
    });
});
    });
Route::get('/c', function () {
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:clear');
    dd('success clear');
})->name('cache');

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard.main-dashboard');
//    })->name('dashboard');
//});
