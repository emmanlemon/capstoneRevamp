<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Admin\BulletinController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\PollController;


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
    'auth' ,
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'isAdmin'
])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home.admin');
    Route::get('/admin/{pages}' , [PagesController::class , 'index'])->name('pages');
    Route::get('/admin/poll/show/{poll}' , [PollController::class, 'showPoll']);
    Route::post('/admin/poll/create' , [PollController::class, 'store'])->name('poll.create');
    Route::delete('/admin/poll/delete/{id?}' , [PollController::class , 'destroy']);
    Route::get('/admin/poll/print/{poll}' , [PollController::class , 'printPoll']);
    Route::put('/admin/poll/update/{poll}' , [PollController::class , 'update']);
    Route::resource('/admin/bulletin', BulletinController::class);
    Route::post('/admin/bulletin/{bulletin}', [BulletinController::class , 'store']);
    Route::delete('/admin/bulletin/{bulletin}/{id?}' , [BulletinController::class , 'destroy'])->name('delete');
});

    Route::get('/poll/{poll}', [PollController::class,'show'])->name('poll.show');
    Route::post('/bulletin/{bulletin}/{id?}',[CommentController::class , 'store'])->name('comment');
    Route::post('/poll/{poll}/vote', [PollController::class,'vote'])->name('poll.vote');

    Route::post('/admin/contact' , [ContactController::class, 'store']);
    Route::get('/', [HomeController::class, 'indexShow'])->name('home');
    Route::get('/bulletin/{bulletin}/{id?}' , [HomeController::class, 'bulletins'])->name('bulletin');
    Route::get('/aboutus/{pages}' , AboutUsController::class)->name('aboutus');
    Route::get('/academic/{pages}' , AcademicController::class)->name('academics');
    Route::view('/contactus', 'contactus');

