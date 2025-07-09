<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\TopCategoryController;
use App\Http\Controllers\MidCategoryController;
use App\Http\Controllers\LowCategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MenController;
use App\Http\Controllers\WomenController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

 Route::get('/', [IndexController::class, 'index'])->name('index');

Route::view('/about-us' , 'about')->name('about');


Route::get('/men', [MenController::class, 'showMenCategories'])->name('men');
Route::get('/women', [WomenController::class, 'showWomenCategories'])->name('women');
Route::get('{gender}/services', [ServiceController::class, 'services'])->name('services');


Route::view('/packages' , 'packages')->name('packages');
Route::view('/blog' , 'blog')->name('blog');
Route::view('/career' , 'career')->name('career');
Route::view('/contact' , 'contact')->name('contact');

Route::view('/wallet' , 'wallet')->name('wallet');
Route::view('/card' , 'card')->name('card');
Route::view('/login' , 'login')->name('login');
Route::view('/edit-profile' , 'edit-profile')->name('edit-profile');
Route::view('/forget' , 'forget')->name('forget');
Route::view('/password-changed' , 'password-changed')->name('password-changed');
Route::view('/booking' , 'booking')->name('booking');

Route::view('/doctor-details' , 'doctor-details')->name('doctor-details');
Route::view('/treatments-type-men' , 'treatments-type-men')->name('treatments-type-men');
Route::view('/treatments-type-women' , 'treatments-type-women')->name('treatments-type-women');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->group(function () {
    Route::view('/index' , 'admin/index')->name('admin.index');


    Route::resource('genders', GenderController::class);
    Route::resource('top-categories', TopCategoryController::class);
    Route::resource('mid-categories', MidCategoryController::class);
    Route::resource('services', ServiceController::class);

    Route::post('/mid-categories/{midCategory}/upload-image', [MidCategoryController::class, 'uploadImage']);

});


use App\Http\Controllers\AjaxCategoryController;

Route::prefix('admin')->group(function () {
    // Use AjaxCategoryController for all dynamic AJAX-based category fetching
    Route::get('get-top-categories/{gender_id}', [AjaxCategoryController::class, 'getTopCategories'])->name('ajax.getTopCategories');
    Route::get('get-mid-categories/{top_category_id}', [AjaxCategoryController::class, 'getMidCategories'])->name('ajax.getMidCategories');
});

Route::post('/admin/services/toggle-status/{id}', [ServiceController::class, 'toggleStatus'])->name('services.toggleStatus');






require __DIR__.'/auth.php';