<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/


Route::middleware('auth','admin','status','verified')->prefix('admin-panel')->group(function () {

    Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('admin.index');

    Route::get('/visits', 'App\Http\Controllers\Admin\HomeController@visits')->name('admin.visits');

    Route::resource('users','App\Http\Controllers\Admin\UserController'); // Route user resource

    /** Start route settings **/
    Route::resource('settings','App\Http\Controllers\Admin\SettingController'); // Route settings
    /** End route settings **/

    /** Start route about **/
    Route::resource('about','App\Http\Controllers\Admin\AboutController');  // Route about
    /** End route about **/

    /** Start route tags **/
    Route::resource('tags','App\Http\Controllers\Admin\TagController'); // Route tags
    /** End route tags **/

    /** Start route icons track **/
    Route::resource('icons','App\Http\Controllers\Admin\IconController'); // Route icons track
    /** End route icons **/

    /** Start route categories **/
    Route::resource('categories','App\Http\Controllers\Admin\CategoryController');  // Route slider categories

    Route::resource('articles','App\Http\Controllers\Admin\ArticleController'); // Route articles

    Route::resource('services','App\Http\Controllers\Admin\ServiceController'); // Route services

    Route::resource('testimonials','App\Http\Controllers\Admin\TestimonyController'); // Route testimonials

    /** Start route profile **/
    Route::get('profile', 'App\Http\Controllers\Admin\ProfileController@profile')->name('profile.index'); // Route profile
    Route::post('profile', 'App\Http\Controllers\Admin\ProfileController@profileUpdate')->name('profile.update'); // update profile
    Route::post('profileUpdatePassword', 'App\Http\Controllers\Admin\ProfileController@profileUpdatePassword')->name('profile.update.password'); // update profile
    /** End route profile **/

    Route::resource('mail' ,'App\Http\Controllers\Admin\MailController');
    Route::get('email/sender' ,'App\Http\Controllers\Admin\MailController@sender')->name('mail.sender');
    Route::get('email/delete' ,'App\Http\Controllers\Admin\MailController@delete')->name('mail.delete');
});



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
Route::middleware('XSS')->group(function () {
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('services',[App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('about',[App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('contact',[App\Http\Controllers\HomeController::class, 'contact'])->name('mail');
Route::post('mail-send',[App\Http\Controllers\HomeController::class, 'storeContact'])->name('mail.send');
Route::get('articles',[App\Http\Controllers\HomeController::class, 'articles'])->name('articles');
Route::get('articles/{id}',[App\Http\Controllers\HomeController::class, 'article'])->name('article');
Route::get('categories/{id}',[App\Http\Controllers\HomeController::class, 'categories'])->name('categories');
Route::get('tags/{id}',[App\Http\Controllers\HomeController::class, 'tags'])->name('tags');
Route::get('privacy-policy',[App\Http\Controllers\HomeController::class, 'privacy_policy'])->name('privacy_policy');
});
