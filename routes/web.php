<?php

use App\Http\Controllers\WebController;
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

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/uae-free-zone', 'freezone')->name('freezone');
        Route::get('/uae-offshore', 'offshore')->name('offshore');
        Route::get('/uae-mainland', 'mainland')->name('mainland');

        Route::get('/services/company-incorporation-and-trade-license', 'company')->name('company.incorporation');
        Route::get('/services/golden-visa', 'visa')->name('golden.visa');
        Route::get('/services/business-consulting', 'business')->name('business.consulting');
        Route::get('/services/pro-service', 'pro')->name('pro.service');
        Route::get('/services/trademark-registration-and-intellectual-property', 'trademark')->name('trademark');

        Route::get('/resources/partners', 'partners')->name('partners');
        Route::get('/resources/members', 'members')->name('members');
        Route::get('/resources/careers', 'careers')->name('careers');
        Route::get('/resources/blogs', 'blogs')->name('blogs');
    });
});
