<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
        Route::get('/services/hr-and-recruitment', 'hr')->name('hr.service');
        Route::get('/services/digital-marketing-web-development', 'digital')->name('digital.service');

        Route::get('/resources/partners', 'partners')->name('partners');
        Route::get('/resources/members', 'members')->name('members');
        Route::get('/resources/careers', 'careers')->name('careers');
        Route::get('/resources/blogs/{type}', 'blogs')->name('blogs');
        Route::get('/resources/blog/{slug}', 'blogDetails')->name('blogs.blog');

        Route::post('/callback', 'callback')->name('callback');
        Route::post('/blog/comment', 'blogComment')->name('blog.comment');
        Route::post('/contact', 'contactSubmit')->name('contact.submit');
        Route::get('/response', 'responseMessage')->name('response.message');

        Route::get('/sitemap.xml', 'sitemap')->name('sitemap');
        Route::get('/robots.txt', 'robots')->name('robots');

        Route::get('landing', 'landing')->name('landing');
        Route::post('landing', 'landingSubmit')->name('landing.form.submit');
    });
});

Route::get('/login', function () {
    return view('admin.user.login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dash', [UserController::class, 'dashboard'])->name('user.dash');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/create', [BlogController::class, 'store'])->name('blog.save');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/edit/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');

    Route::get('/comments/{id}', [BlogController::class, 'comments'])->name('blog.comments');


    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/create', [UserController::class, 'store'])->name('user.save');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/edit/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
});
