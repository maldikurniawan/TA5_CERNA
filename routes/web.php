<?php

use App\Http\Controllers\CerpenController;
use App\Http\Controllers\MahasiswaController;
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

Route::get('/', function () {
    return view('auth.register');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/cerpen/about', function () {
    return view('cerpen.about');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/cerpen/contact', function () {
    return view('cerpen.contact');
});

Route::get('/cerpen/error', function () {
    return view('cerpen.error');
});

Route::get('/mahasiswa/index', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

Route::get('/cerpen', [CerpenController::class, 'create'])->name('cerpen.create');
Route::post('/cerpen/store', [CerpenController::class, 'store'])->name('cerpen.store');
Route::get('/cerpen/index', [CerpenController::class, 'index'])->name('cerpen.index');
Route::get('/cerpen/{cerpen}', [CerpenController::class, 'show'])->name('cerpen.show');
Route::get('/cerpen/edit/{cerpen}', [CerpenController::class, 'edit'])->name('cerpen.edit');
Route::put('/update/cerpen/show/{cerpen}', [CerpenController::class, 'update'])->name('cerpen.update');
Route::delete('/delete/cerpen/show/{cerpen}', [CerpenController::class, 'delete'])->name('cerpen.delete');
