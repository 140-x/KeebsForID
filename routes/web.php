<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KeyboardController;
use App\Http\Controllers\SwitchController;
use App\Http\Controllers\KeycapController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/admin', [KeyboardController::class, 'admin']);

    Route::get('/admin/create', [KeyboardController::class, 'create']);
    Route::post('/admin/store', [KeyboardController::class, 'store']);

    Route::get('/admin/edit/{id}', [KeyboardController::class, 'edit']);
    Route::post('/admin/update/{id}', [KeyboardController::class, 'update']);

    Route::get('/admin/delete/{id}', [KeyboardController::class, 'delete']);

    Route::get('/product/{id}', [KeyboardController::class, 'show']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/catalog', [KeyboardController::class, 'index'])->name('catalog');

    Route::get('/switches', [SwitchController::class, 'index']);
    Route::get('/keycaps', [KeycapController::class, 'index']);

    Route::get('/community', function () {
        return view('community');
    });

});

require __DIR__.'/auth.php';
