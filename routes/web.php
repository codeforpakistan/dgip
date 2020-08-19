<?php

use Illuminate\Support\Facades\Route;
use App\RegionalOffice;
use App\BankBranch;
use App\VisaCategory;
use App\Update;
use App\Officer;

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

Route::get('/', 'HomeController')->name('home');

if (Schema::hasTable('regional_offices')) {
    Route::view('offices', 'offices', [
        'regions' => RegionalOffice::select('region')->distinct()->get(),
        'offices' => RegionalOffice::all()
    ])->name('offices');
}

if (Schema::hasTable('bank_branches')) {
    Route::view('branches', 'branches', [
        'regions' => BankBranch::select('region')->distinct()->get(),
        'branches' => BankBranch::all()
    ])->name('branches');
}

Route::prefix('passport')->group(function () {
    Route::name('passport.')->group(function () {
        Route::view('/', 'passport.overview')->name('overview');
        Route::view('types', 'passport.types')->name('types');
        Route::view('process', 'passport.process')->name('process');
        Route::view('fee', 'passport.fees')->name('fees');
    });
});

if (Schema::hasTable('visa_categories')) {
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
};

Route::prefix('immigration')->group(function () {
    Route::name('immigration.')->group(function () {
        Route::view('/', 'immigration.overview')->name('overview');
        Route::view('citizenship', 'immigration.citizenship')->name('citizenship');
        Route::view('dual_nationality', 'immigration.duality')->name('duality');
        Route::view('process', 'immigration.process')->name('process');
        Route::view('renunciation', 'immigration.renunciation')->name('renunciation');
        Route::view('questions', 'immigration.questions')->name('questions');
        Route::view('downloads', 'immigration.downloads')->name('downloads');
    });
});

if (Schema::hasTable('officers')) {
    Route::view('about', 'about', [
        'officers' => Officer::all()
    ])->name('about');
};

Route::view('contact', 'contact')->name('contact');
Route::view('jobs', 'jobs')->name('jobs');

if (Schema::hasTable('updates')) {
    Route::prefix('updates')->group(function () {
        Route::name('updates.')->group(function () {
            Route::view('', 'updates.index', [
                'items' => Update::latest()->get()
            ])->name('index');
            Route::get('{slug}', function ($slug) {
                return view('show_update', [
                    'updates' => Update::latest()->get(),
                    'item' => Update::where('slug', $slug)->firstOrFail()
                ]);
            })->name('show');
        });
    });
}

Route::prefix('admin')->group(function () {
    Route::name('admin.')->group(function () {
        Route::namespace('Admin')->group(function () {
            Route::middleware('auth')->group(function () {
                Route::get('/', 'AdminController')->name('home');
                Route::resource('visa_categories', 'VisaCategoryController');
                Route::resource('visa_fees', 'VisaFeeController');
                Route::resource('regional_offices', 'RegionalOfficeController');
                Route::resource('bank_branches', 'BankBranchController');
                Route::resource('officers', 'OfficerController');
                Route::resource('updates', 'UpdateController');
            });
        });
    });
});
