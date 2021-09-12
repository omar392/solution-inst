<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\CourceController;
use App\Http\Controllers\Frontend\EmploymentController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name('website');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

//home page
Route::get('/',[HomeController::class,'home'])->name('website');

//courses page
Route::get('/courses',[CourceController::class,'courses'])->name('fronts.courses');
Route::get('courses-detail/{id}/',[CourceController::class,'coursesDetail'])->name('courses.detail');

//employment page
Route::get('/employment',[EmploymentController::class,'employment'])->name('fronts.employment');
Route::get('employment-detail/{id}/',[EmploymentController::class,'employmentDetail'])->name('employment.detail');

//employment subscribe
Route::get('/employment-subscribe',[EmploymentController::class,'employmentSubscribe'])->name('fronts.employment.subscribe');
Route::post('save-subscribe',[EmploymentController::class,'saveSubscribe'])->name('save.subscribe');

//contactus
Route::get('/contact-us',[ContactController::class,'index'])->name('contactus');
Route::post('contact-submit',[ContactController::class,'contactSubmit'])->name('contact.submit');






});

Route::get('command', function () {
    \Artisan::call('route:clear');
    \Artisan::call('config:clear');
    \Artisan::call('cache:clear');
    \Artisan::call('config:cache');

    });

Auth::routes([
'register'=>false,
'login'=>false,
]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

