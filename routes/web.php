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
use App\Http\Controllers\DrugController;
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

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('drugs', \App\Http\Controllers\Admin\DrugController::class);
});

// User routes
Route::get('/drugs', [DrugController::class, 'index'])->name('drugs.index');
Route::get('/drugs/all', [DrugController::class, 'all'])->name('drugs.all');
Route::get('/drugs/search', [DrugController::class, 'search'])->name('drugs.search');
Route::get('/drugs/letter/{letter}', [DrugController::class, 'byLetter'])->name('drugs.byLetter');
Route::get('/drugs/{drug}', [DrugController::class, 'show'])->name('drugs.show');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

require __DIR__.'/auth.php';