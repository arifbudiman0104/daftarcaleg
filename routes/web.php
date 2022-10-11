<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalegController;


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
    return view('welcome');
});
// Route::get('/pendaftaran', function () {
//     return view('pendaftaran');
// });
Route::get('/pendaftaran', [\App\Http\Controllers\PendaftaranController::class, 'pendaftaran'])->name('pendaftaran');
Route::post('/pendaftaran', [\App\Http\Controllers\PendaftaranController::class, 'store'])->name('pendaftaran.store'); // Create Mahasiswa
// Route::get('/caleg', function () {
//     return view('caleg.index');
// });

Auth::routes(
    ['register' => false]
);
Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');

// Route::get('/caleg', [\App\Http\Controllers\HomeController::class, 'calegIndex'])->name('caleg.index');
// Route::resource('caleg', CalegController::class)
//     ->except(
//         [
//             'index', // View Mahasiswa
//             'create', // Create Mahasiswa
//             'store', // Create Mahasiswa
//             'edit', // Edit Mahasiswa
//             'update',// Edit Mahasiswa
//             'destroy' // Delete Mahasiswa
//         ]
//     );


Route::get('/caleg', [CalegController::class, 'index'])->name('caleg.index'); // View Mahasiswa
Route::get('/caleg/create', [CalegController::class, 'create'])->name('caleg.create'); // Create Mahasiswa
Route::post('/caleg/create', [CalegController::class, 'store'])->name('caleg.store'); // Create Mahasiswa
Route::get('/caleg/{caleg}/edit', [CalegController::class, 'edit'])->name('caleg.edit'); // Edit Mahasiswa
Route::put('/caleg/{caleg}', [CalegController::class, 'update'])->name('caleg.update'); // Edit Mahasiswa
Route::delete('/caleg/{caleg}/delete', [CalegController::class, 'destroy'])->name('caleg.destroy'); // Delete Mahasiswa

Route::get('caleg/export/', [CalegController::class, 'export']);
