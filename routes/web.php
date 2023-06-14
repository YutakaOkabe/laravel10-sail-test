<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Hoge\UsersController as HogeUsersController;
use App\Http\Controllers\Fuga\HomeController as FugaHomeController;
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

// こちらはBasic認証のみ
Route::domain(config('app.domain'))
    ->group(function () {
        Route::middleware('auth.basic')
            ->group(function () {
                Route::get('/', function () {
                    return view('welcome');
                });
                Route::name('users.')
                    ->prefix('users')
                    ->controller(UsersController::class)
                    ->group(function () {
                        Route::get('/', 'index')->name('index');
                    });
            });
    });

// こちらはユーザー認証が必要
Route::domain('hoge.' . config('app.domain'))
    ->name('hoge.')
    ->group(function () {
        Route::get('/', function () {
            return view('welcome-hoge');
        });
        Route::middleware('auth')->group(function () {
            Route::name('users.')
                ->prefix('users')
                ->controller(HogeUsersController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                });
        });
    });

// それ以外は認証なし
Route::domain('fuga.' . config('app.domain'))
    ->name('fuga.')
    ->group(function () {
        Route::get('/', function () {
            return view('welcome-fuga');
        });
        Route::name('home.')
            ->prefix('home')
            ->controller(FugaHomeController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/about', 'about')->name('about');
            });
    });

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware('')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
