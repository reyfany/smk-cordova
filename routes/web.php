<?php

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

Route::resource('/', FrontController::class);
Route::resource('/tentang', TentangController::class);
Route::resource('/teknik-pengelasan', PengelasanController::class);
Route::resource('/usaha-perjalanan-wisata', WisataController::class);
Route::resource('/front-galeri', GaleriFrontController::class);
Route::resource('/front-extra', ExtraFrontController::class);
Route::resource('/front-berita', BeritaFrontController::class);

require __DIR__ . '/auth.php';

Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function () {
    Route::get('/', 'Admin\DashboardController@index');
    Route::resource('/galeri', 'Admin\GaleriController');
    Route::resource('/extra', 'Admin\ExtraController');
    Route::resource('/kategori', 'Admin\KategoriController');
    Route::resource('/berita', 'Admin\BeritaController');
    Route::resource('/guru', 'Admin\GuruController');
    Route::resource('/siswa', 'Admin\SiswaController');
});
