<?php

use Illuminate\Support\Facades\Route;
use App\Office;
use App\Branch;

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

Route::view('/', 'home')->name('home');

Route::prefix('passport')->group(function () {
    Route::name('passport.')->group(function () {
        Route::view('/', 'passport.overview')->name('overview');
        Route::view('types', 'passport.types')->name('types');
        Route::view('process', 'passport.process')->name('process');
        Route::view('offices', 'passport.offices', [
            'regions' => Office::select('region')->distinct()->get(),
            'offices' => Office::all()
        ])->name('offices');
        Route::view('fee', 'passport.fees')->name('fees');
        Route::view('branches', 'passport.branches', [
            'regions' => Branch::select('region')->distinct()->get(),
            'branches' => Branch::all()
        ])->name('branches');
    });
});

Route::prefix('visa')->group(function () {
    Route::name('visa.')->group(function () {
        Route::view('/', 'visa.overview')->name('overview');
        Route::view('categories', 'visa.categories')->name('categories');
        Route::view('indian_nationals', 'visa.indians')->name('indians');
        Route::view('fee', 'visa.fee')->name('fee');
    });
});

Route::prefix('immigration')->group(function () {
    Route::name('immigration.')->group(function () {
        Route::view('/', 'immigration.overview')->name('overview');
        Route::view('citizenship', 'immigration.citizenship')->name('citizenship');
        Route::view('dual_nationality', 'immigration.duality')->name('duality');
        Route::view('process', 'immigration.process')->name('process');
        Route::view('renunciation', 'immigration.renunciation')->name('renunciation');
        Route::view('guidelines', 'immigration.guidelines')->name('guidelines');
        Route::view('questions', 'immigration.questions')->name('questions');
        Route::view('downloads', 'immigration.downloads')->name('downloads');
    });
});

Route::view('about', 'about')->name('about');
Route::view('contact', 'contact')->name('contact');
Route::view('jobs', 'jobs')->name('jobs');