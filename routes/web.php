<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HospitalController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LayananController;
use App\Http\Controllers\Admin\DokterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SearchController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/detail/{id}', [SearchController::class, 'detail'])->name('detail');
Route::post('/hospital/{id}/review', [ReviewController::class, 'store'])->name('review.store');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
      
        Route::name('dashboard.')->prefix('dashboard')->group(function () {
            Route::middleware(['auth', 'admin'])->group(function () {
                Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
                Route::resource('user', UserController::class);
                Route::resource('category', CategoryController::class);
                Route::resource('hospital', HospitalController::class);
                Route::resource('layanan', LayananController::class);
                Route::resource('dokter', DokterController::class);

                Route::get('/get-layanan-by-hospital/{hospital}', function (App\Models\Hospital $hospital) {
                    return response()->json($hospital->layanans()->select('id', 'name')->get());
                })->name('get.layanan.by.hospital');
            });
        });
    });
require __DIR__.'/auth.php';