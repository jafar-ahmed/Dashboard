<?php

use App\Http\Controllers\AdminsController;
use App\Http\Controllers\App_ContentsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\SliderAjaxController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PaymentProvider;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

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
//Route::get('home', [HomeController::class, 'index'])->middleware('auth');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
//logout
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
//dashboard
    Route::get('dashboard/login', [DashboardController::class, 'adminLogin'])->name('dashboard.login');
    Route::post('dashboard/login', [DashboardController::class, 'adminLoginCheck'])->name('dashboard.login.check');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
//    'auth:admin'
])->group(function () {
    //admin login

    Route::get('/dashboard', function () {
            return view('dashboard.layouts.main');
    })->name('dashboard');

    //event Listeners
    Route::get('instagram-video', [VideoController::class, 'index']);

//sliders
//Route::controller(SliderController::class)->group(function () {
//    Route::prefix('dashboard/sliders')->group(function () {
//        Route::get('/', 'index')->name('dashboard.sliders');
//        Route::get('create', 'create');
//        Route::post('/',  'store');
//        Route::get('{id}/edit',  'edit')->name('dashboard.sliders.edit');
//        Route::put('{id}',  'update');
//        Route::delete('{id}',  'destroy');
//        Route::get('deleteImage/{id}', 'deleteImage');
//        Route::get('deleteItem', 'deleteicon');
//        Route::get('/status-update/{id}', 'status_update');
//    });
//});

//sliders ajax
    Route::controller(SliderAjaxController::class)->group(function () {
        Route::prefix('dashboard/sliders')->group(function () {
            Route::get('/', 'index')->name('dashboard.sliders');
            Route::get('create', 'create')->name('sliders.create');
            Route::post('/',  'store')->name('sliders.store');
            Route::get('/edit/{id}',  'edit')->name('sliders.edit');
            Route::post('/update', 'update')->name('sliders.update');
            Route::post('/delete',  'delete')->name('sliders.delete');
            //
            //

            Route::get('deleteImage/{id}', 'deleteImage');
            Route::get('deleteItem', 'deleteicon');
            Route::get('/status-update/{id}', 'status_update');
        });
    });
    Route::get('/dashboard/sliders/payment', [PaymentProvider::class, 'getCheckOutId'])->name('payment');

    Route::get('/dashboard/send-mails', [HomeController::class, 'sendMails']);


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
