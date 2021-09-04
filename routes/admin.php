<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdvertController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TeamController;
use Illuminate\Support\Facades\Route;



Route::get('admin/home',[AdminController::class,'index'])->name('adminhome');
Route::GET('admin',[LoginController::class,'showLoginForm'])->name('admin.login');
Route::POST('admin',[LoginController::class,'login']);
Route::POST('logout',[LoginController::class,'logout'])->name('admin.logout');

Route::group(['prefix' => 'admin', 'middleware' => ['auth:admin']], function () {

//settings
Route::get('setting',[SettingController::class,'index'])->name('setting');
Route::post('setting',[SettingController::class,'update'])->name('updatesetting');


//counter
Route::get('counter',[CounterController::class,'index'])->name('counter');
Route::post('counter',[CounterController::class,'update'])->name('updatecounter');


//about_us
Route::get('about',[AboutController::class,'index'])->name('about');
Route::post('about',[AboutController::class,'update'])->name('updateabout');


//our team 
Route::resource('team', TeamController::class);
Route::post('team_status',[TeamController::class,'teamStatus'])->name('team.status');


//blog 
Route::resource('blog', BlogController::class);
Route::post('blog_status',[BlogController::class,'blogStatus'])->name('blog.status');


//advert 
Route::resource('advert', AdvertController::class);
Route::post('advert_status',[AdvertController::class,'advertStatus'])->name('advert.status');


//course 
Route::resource('course', CourseController::class);
Route::post('course_status',[CourseController::class,'courseStatus'])->name('course.status');


//faq
Route::resource('faq', FaqController::class);
Route::post('faq_status',[FaqController::class,'faqStatus'])->name('faq.status');


//customer
Route::resource('customer', CustomerController::class);
Route::post('customer_status',[CustomerController::class,'customerStatus'])->name('customer.status');


//slider
Route::resource('slider', SliderController::class);
Route::post('slider_status',[SliderController::class,'sliderStatus'])->name('slider.status');


});

