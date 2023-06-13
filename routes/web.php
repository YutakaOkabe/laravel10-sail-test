<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Hoge\UsersController as HogeUsersController;
use App\Http\Controllers\Fuga\UsersController as FugaUsersController;
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
                })->name('welcome');
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
        })->name('welcome');
        Route::middleware('auth')->group(function () {
            Route::name('users.')
                ->prefix('users')
                ->controller(HogeUsersController::class)
                ->group(function () {
                    Route::get('/', 'index')->name('index');
                });
            Route::get('/dashboard', function () {
                return view('dashboard');
            });
        });
    });

// それ以外は認証なし
Route::domain('fuga.' . config('app.domain'))
    ->name('fuga.')
    ->group(function () {
        Route::get('/', function () {
            return view('welcome-fuga');
        })->name('welcome');
        Route::name('users.')
            ->prefix('users')
            ->controller(FugaUsersController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
            });
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
