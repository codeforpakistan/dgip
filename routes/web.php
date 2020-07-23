<?php

use Illuminate\Support\Facades\Route;
use App\RegionalOffice;
use App\BankBranch;
use App\VisaCategory;

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

Auth::routes();

Route::view('/', 'home')->name('home');

Route::prefix('passport')->group(function () {
    Route::name('passport.')->group(function () {
        Route::view('/', 'passport.overview')->name('overview');
        Route::view('types', 'passport.types')->name('types');
        Route::view('process', 'passport.process')->name('process');
        Route::view('offices', 'passport.offices', [
            'regions' => RegionalOffice::select('region')->distinct()->get(),
            'offices' => RegionalOffice::all()
        ])->name('offices');
        Route::view('fee', 'passport.fees')->name('fees');
        Route::view('branches', 'passport.branches', [
            'regions' => BankBranch::select('region')->distinct()->get(),
            'branches' => BankBranch::all()
        ])->name('branches');
    });
});

Route::prefix('visa')->group(function () {
    Route::name('visa.')->group(function () {
        Route::view('/', 'visa.overview')->name('overview');
        Route::view('process', 'visa.process')->name('process');

        Route::view('categories', 'visa.categories', [
            'visas' => VisaCategory::all()
        ])->name('categories');
        Route::get('categories/{slug}', function ($slug) {
            return view('visa.category', [
                'visa' => VisaCategory::where('slug', $slug)->first()
            ]);
        })->name('category');
        Route::get('categories/{slug}/edit', function ($slug) {
            return view('visa.edit_category', [
                'visa' => VisaCategory::where('slug', $slug)->first()
            ]);
        })->name('edit_category');
        
        Route::view('indian_nationals', 'visa.indians')->name('indians');
        Route::view('fees', 'visa.fees')->name('fees');
        Route::view('registration', 'visa.registration')->name('registration');
        Route::view('overstay', 'visa.overstay')->name('overstay');
        Route::view('extension', 'visa.extension')->name('extension');
        Route::view('abolition', 'visa.abolition')->name('abolition');
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

Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::namespace('Admin')->group(function () {
            Route::middleware('auth')->group(function () {
                Route::get('/', 'AdminController')->name('home');
                Route::resource('visa_categories', 'Visa\CategoryController');
                Route::resource('visa_fees', 'Visa\FeeController');
                Route::resource('regional_offices', 'Passport\OfficeController');
                Route::resource('bank_branches', 'Passport\BranchController');
                Route::resource('updates', 'UpdateController');
            });
        });
    });
});