<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\Admin\Bulletin\AchievementController;
// use App\Http\Controllers\Admin\Bulletin\AnnouncementController;
// use App\Http\Controllers\Admin\Bulletin\NewsController;
use App\Http\Controllers\Admin\BulletinController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded eb routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('home', [HomeController::class, 'index']);
    Route::group(['name' => 'admin.', 'prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::view('/', 'admin.dashboard')->name('dashboard');
        Route::resource('/contact',ContactController::class);
    });
    Route::resource('/admin/bulletin', BulletinController::class);
    Route::delete('/admin/bulletin/{bulletin}/{id?}' , [BulletinController::class , 'destroy'])->name('delete');
    // Route::prefix('/admin/bulletin')->group(function(){
    //     Route::resource('achievements', AchievementController::class);
    //     Route::resource('announcements' , AnnouncementController::class);
    //     // Route::resource('events', UpcomingEventController::class);
    //     Route::resource('news', NewsController::class);
    // });
});


    Route::get('/', [HomeController::class, 'indexShow'])->name('home');
    Route::get('/bulletin/{bulletin}/{id?}' , [HomeController::class, 'bulletins'])->name('bulletin');
    Route::view('/history', 'history')->name('history');
    Route::view('/contactus', 'contactus');
